<?php 
include("../includes/connect.php");
//the action will start if user press on button
if (isset($_POST['submet'])) {
// fetch Data from web form
	$email   =$_POST['customer_email'];
	$password=$_POST['customer_password'];
	$fullname=$_POST['fullname'];
	$room    =$_POST['room_number'];
	
	$query ="insert into customer(customer_email,customer_password,fullname,room_number) values('$email','$password','$fullname','$room ')";
	

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
                                    <h3 class="section-title">Creat Customer</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">New Customer</h4></center>
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
                                            
                                            <button name="submet" type="submet" class="btn btn-primary col-12">Add</button>
                                           
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                
                                                <th scope="col">ID</th>
                                                <th scope="col">Email</th> 
                                                <th scope="col">Name</th>
                                                <th scope="col">Room Number</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM customer"; 
                                            $result= mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($result)){

                                                echo "<tr>";
                                                echo "<td>{$row['customer_id']}</td>";
                                                echo "<td>{$row['customer_email']}</td>";
                                                echo "<td>{$row['fullname']}</td>";  
                                                echo "<td>{$row['room_number']}</td>";
                                                echo "<td><a href ='edit_customer.php?customer_id={$row['customer_id']}' class='btn
                                                             btn-warning'> EDIT</a></td>";
                                                echo "<td><a href ='delete_customer.php?customer_id={$row['customer_id']}' class='btn
                                                             btn-danger'>DELETE</td>";
                                                echo "</tr>";                                               
                                            }


                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

  <a href="customer_feedback.php"><button class="btn btn-primary col-12">Customer Feedback</button><br><br>


<?php include("../includes/footer.php"); ?>