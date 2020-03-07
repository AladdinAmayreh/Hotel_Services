<?php

include("includes/public_header.php");

if (isset($_POST['submet'])) {

$fullname      =$_POST['fullname'];

$phone         =$_POST['customer_phone'];
$message       =$_POST['customer_message'];

$query ="UPDATE customer SET customer_phone   ='$phone',
                             fullname         ='$fullname',
                             customer_message ='$message'
                             WHERE customer_id={$_SESSION['customer_id']}";
                           
                         
    
mysqli_query($conn,$query);
    header('location:contact.php');
    exit;
    

}
?>
    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/contact-bg.jpg">
        <div class="hero-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Contact</h1>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-left">
                        <div class="contact-information">
                            <h2>Contact Information</h2>
                            <ul>
                                <li><img src="img/placeholder-copy.png" alt=""> <span>Aqaba, King Hussain Street, JO</span></li>
                                <li><img src="img/phone-copy.png" alt=""> <span>+962796940789</span></li>
                                <li><img src="img/envelop.png" alt=""> <span>aladdin.amayreh95@gmail.com</span></li>
                                <li><img src="img/clock-copy.png" alt=""> <span>Everyday: 06:00 -22:00</span></li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <h2>Follow us on:</h2>
                            <a href="https://web.facebook.com/aladdin.amayreh"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/aladinamayreh/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/ala-a-amayreh-8797a5176/"><i class="fa fa-linkedin"></i></a>
                            
                            <a href="https://twitter.com/Aladdinamayreh9"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UCQtJmfcFTXk2O-ZEAESGYIQ?view_as=subscriber"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h5>Write us ...</h5>
                        <form method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>From</p>     
                                    <div class="input-group">
                                        <input name="fullname" type="text" placeholder="Full Name">
                                        <img src="img/edit.png" alt="">
                                    </div>
                                </div>
                              
                                <div class="col-lg-6">
                                    <div class="input-group phone-num">
                                        <input name="customer_phone" type="text" placeholder="Phone">
                                        <img src="img/phone-copy.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="message">
                                        <p>Message</p>
                                        <div class="textarea">
                                            <textarea name="customer_message"  placeholder="Hi ..."></textarea>
                                            <img src="img/speech-copy.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button name="submet">Send <i class="lnr lnr-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Section Begin -->
   
    <!-- Map Section End -->

   <?php 
include("includes/public_footer.php");

   ?>

