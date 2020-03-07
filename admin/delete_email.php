<?php

include('../includes/connect.php');

$query = "DELETE FROM email WHERE id = {$_GET['id']}";


mysqli_query($conn,$query);
//prevent refresh for adding same record on database
header("location:manage_email.php");
exit;

?>