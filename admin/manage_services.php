<?php 
include("../includes/connect.php");
//the action will start if user press on button
if (isset($_POST['submet'])) {
// fetch Data from web form
	$name   =$_POST['service_name'];

    $images        =$_FILES['service_image']['name'];
    $tmp_name      =$_FILES['service_image']['tmp_name'];
    $path          ="upload/";
    move_uploaded_file($tmp_name, $path.$images);
	
	
	$query ="insert into roomservice(service_name,service_image) values('$name','$images')";
	 

	//perform query
	mysqli_query($conn,$query);
     //prevent refresh for adding same record on database
	header('location:manage_services.php');
	exit;
	
	}
	


include("../includes/header.php"); 


?>
<title>Manage Services</title>
  <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Creat Service</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">New Service</h4></center>
                                    <div class="card-body">
                                        <form  method="post" enctype="multipart/form-data">
                                         
                                            <div class="form-group">
                                                <label for="inputEmail">Service Name</label>
                                                <input name="service_name" id="inputEmail" type="text"  class="form-control">
                                            
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail">Service Image</label>
                                                <input name="service_image" id="inputEmail" type="file"  class="form-control">
                                            
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
                                                
                                                <th scope="col">Name</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM roomservice";
                                            $result= mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($result)){

                                                echo "<tr>";
                                                echo "<td>{$row['service_id']}</td>";
                                                echo "<td>{$row['service_name']}</td>";
                                                echo "<td> <img hight='50px' width='50px' src='upload/{$row['service_image']}'></td>";
                                              
                                                echo "<td><a href ='edit_services.php?service_id={$row['service_id']}' class='btn
                                                             btn-warning'> EDIT</a></td>";
                                                echo "<td><a href ='delete_services.php?service_id={$row['service_id']}' class='btn
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