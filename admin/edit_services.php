<?php 
include("../includes/connect.php");
//the action will start if user press on button
if (isset($_POST['submet'])) {
// fetch Data from web form
    $name          =$_POST['service_name'];
    $images        =$_FILES['service_image']['name'];
    $tmp_name      =$_FILES['service_image']['tmp_name'];
    $path          ="upload/";
    move_uploaded_file($tmp_name, $path.$images); 
    
    
                          

         if ($_FILES['service_image']['error']==0) {
    # code...
     $query ="UPDATE roomservice SET service_name ='$name',
                                    service_image='$images '
                           
                            WHERE service_id ={$_GET['service_id']}";
} else {
    # code...
    $query ="UPDATE roomservice SET service_name ='$name'
                           
                            WHERE service_id ={$_GET['service_id']}";
}   





                            
     

    //perform query
    mysqli_query($conn,$query);
     //prevent refresh for adding same record on database
    header('location:manage_services.php');
    exit;
    
    }
    
 $query   = "SELECT * FROM roomservice WHERE service_id={$_GET['service_id']}";
    $result  = mysqli_query($conn,$query);
    $row     =mysqli_fetch_assoc($result);


include("../includes/header.php"); 


?>

<title>Manage Services</title>
  <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Update Service</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">Edit Service</h4></center>
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
                                          
                                           
                                            <button name="submet" type="submet" class="btn btn-primary col-12">Update</button>
                                           
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

   




<?php include("../includes/footer.php"); ?>