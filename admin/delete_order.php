<?php

include('../includes/connect.php');

$query = "DELETE FROM orders WHERE order_id = {$_GET['order_id']}";

mysqli_query($conn,$query);
//prevent refresh for adding same record on database
header("location:manage_order.php");
exit;

?>