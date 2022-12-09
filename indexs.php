<?php
include "connection.php";
?>

<html lang="en">
<head>
  <title>Basic Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class ="col-lg-6">
  <h2>Basic Database Connection</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="firstname">firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
    </div>
	<div class="form-group">
      <label for="khname">khmername:</label>
      <input type="text" class="form-control" id="khname" placeholder="Enter khmername" name="khname">
    </div>
	 <div class="form-group">
      <label for="email">email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	 <div class="form-group">
      <label for="contact">contact:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
    </div>
    <button type="submit" name="insert" class=" button">Insert</button>
	<button type="submit" name="update" class=" button">Update</button>
	<button type="submit" name="delete" class=" button">Delete</button>
  </form>
</div>
</div>
<div class ="col-lg-12">

<table class="table table-striped">
    <thead>
      <tr>
	  <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
		<th>Khmername</th>
        <th>Email</th>
		<th>Contact</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    <tbody>
      
	  <?php
	    $res=mysqli_query($link,"select * from tbluser");
	    while($row=mysqli_fetch_array($res))
		{
			echo"<tr>";
			echo"<td>"; echo $row["id"]; echo"</td>";
			echo"<td>"; echo $row["firstname"]; echo"</td>";
			echo"<td>"; echo $row["lastname"]; echo"</td>";
			echo"<td>"; echo $row["khname"]; echo"</td>";
			echo"<td>"; echo $row["email"]; echo"</td>";
			echo"<td>"; echo $row["contact"]; echo"</td>";
			echo"<td>"; ?> <a href="edit.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo"</td>";
			echo"<td>"; ?> <a href="delete.php?id=<?php echo $row["id"];?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo"</td>";
			echo"</tr>";
			
		}
	  ?>
	  
    </tbody>
  </table>

</div>
</body>

<?php

if(isset($_POST["insert"]))
{
	mysqli_query($link,"insert into tbluser values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]','$_POST[khname]')");
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
}

if(isset($_POST["delete"]))
{
	mysqli_query($link,"delete from tbluser where firstname='$_POST[firstname]'") or die(mysqli_error($link));
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
}
if(isset($_POST["update"]))
{
	mysqli_query($link,"update tbluser set firstname='$_POST[lastname]' where firstname='$_POST[firstname]'") or die(mysqli_error($link));
	?>
	<script type="text/javascript">
	window.location.href=window.location.href;
	</script>
	<?php
}
?>
</html>