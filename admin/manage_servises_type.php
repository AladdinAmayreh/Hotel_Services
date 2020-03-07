<?php 
include("../includes/connect.php");
//the action will start if user press on button
if (isset($_POST['submet'])) {
// fetch Data from web form
    $query = "SELECT * FROM roomservice";
    $result= mysqli_query($conn,$query);                                                       
    $row=mysqli_fetch_assoc($result);                                                      
	$name       =$_POST['name'];
    $desc       =$_POST['desc'];
   
    $service_id =$_POST['Service_name'];


    $images        =$_FILES['images']['name'];
    $tmp_name      =$_FILES['images']['tmp_name'];
    $path          ="upload/";
    move_uploaded_file($tmp_name, $path.$images);
	
	
	$query ="insert into services_type(name,description,image,Service_id) values('$name','$desc','$images','$service_id')";

	 

	//perform query
	mysqli_query($conn,$query);
     //prevent refresh for adding same record on database
	header('location:manage_servises_type.php');
	exit;
	
	}
	


include("../includes/header.php"); 


?>
<title>Manage Services</title>
  <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Creat Service Type</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">New Type</h4></center>
                                    <div class="card-body">
                                        <form  method="post" enctype="multipart/form-data">
                                         
                                            <div class="form-group">
                                                <label for="inputEmail">Type Name</label>
                                                <input name="name" id="inputEmail" type="text"  class="form-control">
                                            
                                            </div>
                                          
                                            
                                          
                                            <div class="form-group">
                                                <label for="inputEmail">Type Descreption</label>
                                                <input name="desc" id="inputEmail" type="text"  class="form-control">
                                            
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputEmail">Type Image</label>
                                                <input name="images" id="inputEmail" type="file"  class="form-control">
                                            
                                            </div>
                                          <div class="form-group">
                                                <label for="inputEmail">Select Service</label>
                                                <select name="Service_name">
                                                     <?php
                                                             $query = "SELECT * FROM roomservice";
                                                             $result= mysqli_query($conn,$query);
                                                          while($row=mysqli_fetch_assoc($result)){

                                            echo "<option value='{$row['service_id']}'>{$row['service_name']}</option>";

                                        }


                                        ?>
                                                </select>                                            
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
                                                <th scope="col">Time</th>
                                                <th scope="col">Desc</th>
                                                <th scope="col">Service Area</th>
                                                
                                                <th scope="col">image</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                 $query = "SELECT * FROM services_type
                                 INNER JOIN roomservice ON
                                 roomservice.service_id=services_type.service_id"; 
                                  
                                 $result= mysqli_query($conn,$query);
                                 while($row=mysqli_fetch_assoc($result)){
                                       echo "<tr>";
                                    echo "<td>{$row['type_id']}</td>";
                                    echo "<td>{$row['name']}</td>"; 
                                    echo "<td>{$row['time']}</td>";
                                    echo "<td>{$row['description']}</td>";
                                    echo "<td>{$row['service_name']}</td>";
                                    echo "<td><img hight='50px' width='50px' src='upload/{$row['image']}'></td>";

                                    echo "<td><a href='edit_type.php?type_id={$row['type_id']}' class='btn
                                    btn-warning'> EDIT</a></td>";
                                    echo "<td><a href='delete_type.php?type_id={$row['type_id']}' class='btn
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
