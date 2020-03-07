<?php

include('../includes/connect.php');

$query = "DELETE FROM services_type WHERE type_id = {$_GET['type_id']}";

mysqli_query($conn,$query);
//prevent refresh for adding same record on database
header("location:manage_servises_type.php");
exit;

?>