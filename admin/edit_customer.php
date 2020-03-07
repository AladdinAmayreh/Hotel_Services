<?php 
include("../includes/connect.php");
//the action will start if user press on button
if (isset($_POST['submet'])) {
// fetch Data from web form
	$email   =$_POST['customer_email'];
	$password=$_POST['customer_password'];
	$fullname=$_POST['fullname'];
	$room    =$_POST['room_number'];
	
 $query ="UPDATE customer SET customer_email ='$email',
                            customer_password='$password',
                            fullname         ='$fullname',
                            room_number      ='$room'
                            WHERE customer_id ={$_GET['customer_id']}";
	
	

	//perform query
	mysqli_query($conn,$query);
     //prevent refresh for adding same record on database
	header('location:manage_customer.php');
	exit;
	
	}
	


include("../includes/header.php"); 


?>
<title>Manage Customer</title>
  <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Updat Customer</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">Edit Customer</h4></center>
                                    <div class="card-body">
                                        <form  method="post">
                                         
                                            <div class="form-group">
                                                <label for="inputEmail">Customer Email</label>
                                                <input name="customer_email" id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                                            
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputPassword">Customer Password</label>
                                                <input name="customer_password" id="inputPassword" type="password" placeholder="Password" class="form-control">
                                            </div> 
                                            <div class="form-group">
                                                <label for="inputPassword">Customer Fullname</label>
                                                <input name="fullname" id="inputPassword" type="Text" placeholder="Name" class="form-control">
                                            </div> 
                                            <div class="form-group">
                                                <label for="inputPassword">Room Number</label>
                                                <input name="room_number" id="inputPassword" type="number" placeholder="Please Select room number" class="form-control">
                                            </div>
                                            
                                            <button name="submet" type="submet" class="btn btn-primary col-12">Update</button>
                                           
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php include("../includes/footer.php"); ?>