<?php 
include("../includes/connect.php");
if (isset($_POST['submet'])) {
// fetch Data from web form

    $name          =$_POST['name']; 
   
    $desc          =$_POST['description']; 
     $service_id   =$_POST['Service_name'];
     
    $image         =$_FILES['image']['name'];
    $tmp_name      =$_FILES['image']['tmp_name'];
    $path          ="upload/";
    move_uploaded_file($tmp_name, $path.$image);
   
/*
    $query="SELECT product.product_id, category.category_name
               FROM product
          INNER JOIN category ON product.product_id = category.category_id";
                                           */

    # code...
     $query ="UPDATE services_type SET name        =' $name',                             
                                       description = '$desc',
                                       image       = '$image'
                    
                            WHERE type_id ={$_GET['type_id']}";
                           
    
          

         
    //perform query
          mysqli_query($conn,$query);
     //prevent refresh for adding same record on database
          header('location:manage_servises_type.php');
          exit;

      }








include("../includes/header.php"); 


?>

<<div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Creat Service Type</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">New Type</h4></center>
                                    <div class="card-body">
                                        <form  method="post" enctype="multipart/form-data">
                                         <?php 
                                            $query= "SELECT * from services_type WHERE type_id ={$_GET['type_id']} ";
                                            
                                            $result= mysqli_query($conn,$query);
                                            $row=mysqli_fetch_assoc($result);


                                            ?>
                                            <div class="form-group">
                                                <label for="inputEmail">Type Name</label>
                                                <input <?php echo "value='{$row['name']}'"; ?> name="name" id="inputEmail" type="text"  class="form-control">
                                            
                                            </div>
                                          
                                            
                                          
                                            <div class="form-group">
                                                <label for="inputEmail">Type Descreption</label>
                                                <input <?php echo "value='{$row['description']}'"; ?>name="description" id="inputEmail" type="text"  class="form-control">
                                            
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputEmail">Type Image</label>
                                                <input <?php echo "value='{$row['image']}'"; ?> name="image" id="inputEmail" type="file"  class="form-control">
                                            
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


   




<?php include("../includes/footer.php"); ?>