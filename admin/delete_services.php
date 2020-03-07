<?php

include('../includes/connect.php');

$query = "DELETE FROM roomservice WHERE service_id = {$_GET['service_id']}";

mysqli_query($conn,$query);
//prevent refresh for adding same record on database
header("location:manage_services.php");
exit;

?>