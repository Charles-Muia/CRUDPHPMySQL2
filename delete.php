<?php
require('dbconnect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id";
$result = mysqli_query($connect,$query) or die ( mysqli_error());
header("Location: view.php");
?>