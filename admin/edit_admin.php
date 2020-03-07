<?php 
include("../includes/connect.php");
//the action will start if user press on button
if (isset($_POST['submet'])) {
// fetch Data from web form
	$email   =$_POST['admin_email'];
	$password=$_POST['admin_password'];
	$fullname=$_POST['fullname'];
	
    $query ="UPDATE admin SET admin_email='$email',
                            admin_password='$password',
                            fullname='$fullname'
                            WHERE admin_id ={$_GET['admin_id']}";
	
	//perform query
	mysqli_query($conn,$query);
	//prevent refresh for adding same record on database
    header("location:manage.php");
    exit;
	




    }




	
    //fetch old data
    $query   = "SELECT * FROM admin WHERE admin_id={$_GET['admin_id']}";
    $result  = mysqli_query($conn,$query);
    $row     =mysqli_fetch_assoc($result);



include("../includes/header.php"); 


?>

 <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">update Admin</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">>Edit Admin</h4></center>
                                    <div class="card-body">
                                        <form  method="post">
                                         
                                            <div class="form-group">
                                                <label for="inputEmail">Admin Email</label>
                                                <input name="admin_email" id="inputEmail" type="email" placeholder=""<?php echo "value= '{$row['admin_email']}'";  ?> class="form-control">
                                            
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputPassword">Admin Password</label>
                                                <input name="admin_password" id="inputPassword" type="password" placeholder="" <?php echo "value= '{$row['admin_password']}'";  ?>class="form-control">
                                            </div> 
                                            <div class="form-group">
                                                <label for="inputPassword">Admin Fullname</label>
                                                <input name="fullname" id="inputPassword" type="Text" placeholder="" <?php echo "value= '{$row['fullname']}'";  ?>class="form-control">
                                            </div>
                                            <button name="submet" type="submet" class="btn btn-primary">Save</button>
                                           
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>



<?php include("../includes/footer.php"); ?>