<?php 



if (isset($_POST['submet'])) {
// fetch Data from web form
	$email   =$_POST['admin_email'];
	$password=$_POST['admin_password'];
	$fullname=$_POST['fullname'];
	
	$query ="insert into admin(admin_email,admin_password,fullname) values('$email','$password','$fullname')";
	 

	//perform query
	mysqli_query($conn,$query);
     //prevent refresh for adding same record on database
	header('location:manage.php');
	exit;
	
	}

include("includes/public_header.php");

?>


    <!-- Hero Slider Begin -->
    <div class="hero-slider">
        <div class="slider-item">
            <div class="single-slider-item set-bg" data-setbg="img/slider-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" >
                            <h1>We hope you’ll enjoy <br />your stay.</h1><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-nav">
                                
                                <?php 

                                  $query  ="SELECT * FROM roomservice";
                                  $result = mysqli_query($conn,$query);
                               while ($row= mysqli_fetch_assoc($result)) {

                                echo " <a href='services.php?service_id={$row['service_id']} & service_name={$row['service_name']}' class='single-slider-nav'>";
                                echo " <img  width='168px' height='213px' src='admin/upload/{$row['service_image']}' alt=''>
                                    <div class='nav-text active'>
                                        <p>{$row['service_name']}<i class='lnr lnr-arrow-right'></i></p>
                                    </div>
                          
                               </a>
                                ";}
                                ?>

       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<p style="font-c"></p>

   
    <!-- Footer Room Pic Section End -->

   <?php 
include("includes/public_footer.php");

   ?>