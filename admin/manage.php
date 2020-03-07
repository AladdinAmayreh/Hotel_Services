<?php 
include("../includes/connect.php");
//the action will start if user press on button
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
	


include("../includes/header.php"); 


?>
<title>Manage Admin</title>
  <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Creat Admin</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">New Admin</h4></center>
                                    <div class="card-body">
                                        <form  method="post">
                                         
                                            <div class="form-group">
                                                <label for="inputEmail">Admin Email</label>
                                                <input name="admin_email" id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                                            
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputPassword">Admin Password</label>
                                                <input name="admin_password" id="inputPassword" type="password" placeholder="Password" class="form-control">
                                            </div> 
                                            <div class="form-group">
                                                <label for="inputPassword">Admin Fullname</label>
                                                <input name="fullname" id="inputPassword" type="Text" placeholder="Name" class="form-control">
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
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM admin";
                                            $result= mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($result)){

                                                echo "<tr>";
                                                echo "<td>{$row['admin_id']}</td>";
                                                echo "<td>{$row['admin_email']}</td>";
                                                echo "<td>{$row['fullname']}</td>";
                                                echo "<td><a href ='edit_admin.php?admin_id={$row['admin_id']}' class='btn
                                                             btn-warning'> EDIT</a></td>";
                                                echo "<td><a href ='delete_admin.php?admin_id={$row['admin_id']}' class='btn
                                                             btn-danger'>DELETE</td>";
                                                echo "</tr>";                                               
                                            }


                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>




<?php include("../includes/footer.php"); ?>