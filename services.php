<?php
include("includes/public_header.php");

?>
    <!-- Hero Section Begin -->
  
                            
                        </div>
    <!-- Hero Section End -->
 <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/services-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       <?php 
                     $query  ="SELECT * FROM services_type where service_id={$_GET['service_id']}";
                              
                            echo "<h1>{$_GET['service_name']}</h1><br>";

                            ?>
                    </div>
                </div>
                <div class="page-nav">
                    <a href="./about-us.php" class="left-nav"><i class="lnr lnr-arrow-left"></i> About</a>
                    <a href="./contact.php" class="right-nav">Contact <i class="lnr lnr-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section Begin -->
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <?php 
                     $query  ="SELECT * FROM services_type where service_id={$_GET['service_id']}";
                                  $result = mysqli_query($conn,$query);
                               while ($row= mysqli_fetch_assoc($result)) {
                                echo "<div class='col-lg-4 col-sm-3'>
                                    <div class='single-services-item'>
                                    <div class='services-pic-item'>";
                                echo "<img width='300px' height='476px' src='admin/upload/{$row['image']}' alt=''>";  
                                echo"</div><div class='services-text'>";
                                echo"
                                 


                        </div>
                        <h2  style='color:#6d0000'>{$row['name']}</h2>
                        <a href='order.php?type_id={$row['type_id']} & name={$row['name']}' class='single-slider-nav'><button class='btn btn-primary col-12'>Order Now</button></a>
                    </div>
                </div>
               ";

                               }
                ?>

 </div></div>
    </section>
              
                        
    <!-- Services Section End -->

    <!-- Services Section End -->
   

   <?php 
include("includes/public_footer.php");

   ?>

    