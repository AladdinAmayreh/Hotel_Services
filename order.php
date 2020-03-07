<?php

include("includes/public_header.php");

$query="SELECT * FROM customer where customer_id={$_SESSION['customer_id']}";

$result =mysqli_query($conn,$query);
$row	=mysqli_fetch_assoc($result);

$fullname   = $row['fullname'];
$customer_id=$_SESSION['customer_id'];
$room_number=$row['room_number'];
$name       =$_GET['name'];
$query1="INSERT INTO orders(fullname,customer_id,room_number,name)VALUES('$fullname' ,'$customer_id', '$room_number','$name')";
mysqli_query($conn,$query1);



?>
    <section class="hero-section set-bg" data-setbg="img/services-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="color:#ff0000">Thank You For Ordaring,Your Order Has Been Submitted And Our Employee Will Visit You As Soon As Possible.</h2>
                    </div>
                </div>
                <div class="page-nav">
                    
                </div>
            </div>
        </div>
    </section>

   <?php 
include("includes/public_footer.php");

   ?>

    