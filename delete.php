<?php
include	"connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from tbluser1 where id=$id");
?>
<script type="text/javascript">
window.location="index1.php";
</script>