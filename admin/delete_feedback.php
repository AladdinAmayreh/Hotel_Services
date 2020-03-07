<?php

include('../includes/connect.php');

$query = "DELETE FROM customer WHERE customer_id = {$_GET['customer_id']}";

mysqli_query($conn,$query);
//prevent refresh for adding same record on database
header("location:customer_feedback.php");
exit;

?>