<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Example</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg">
    <div class="container">
        <div>
            <h2>Basic database</h2>
            <from action="" name="form1" method="POST"> 
                <div class="form-group">
                    <label for="lastname">Firstname:</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname:</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname">
                 </div>
	            <div class="form-group">
                    <label for="khname">Khmername:</label>
                    <input type="text" class="form-control" id="khname" placeholder="Enter khmername" name="khname">
                </div>
	            <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
	            <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
                </div>
     
                <button type="submit" name="insert1" class="btn btn-default">Insert</button>
                <button type="submit" name="update" class="btn btn-default">Update</button>
            </form>
        </div>
    </div>
    <div class ="col-lg-12">
    <table class="table table-striped">
            <thead>
                 <tr>
                    <th>ID</th>
                    <th>First Name </th>
                    <th>Last name</th>
                    <th>Khmer name</th>
                    <th>Email</th>
                    <th>contact</th>
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

    if(isset($_POST["update"]))
            {
                echo "Click!";
                mysqli_query($link,"insert into tbluser1 values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]','$_POST[khname]')");
                ?>
                <script type="text/javascript">
                window.location.href=window.location.href;
                </script>
                <?php*/
            }else
            {
                echo "Not Click!";
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
            }*/
?> 
	
</html>