<?php 
include("../includes/connect.php");
//the action will start if user press on button
if (isset($_POST['submet'])) {
// fetch Data from web form
	$email   =$_POST['email'];
	$password=$_POST['password'];
	
	
 $query ="UPDATE email SET email ='$email',
                            password='$password'
                            WHERE id ={$_GET['id']}";
	
	

	//perform query
	mysqli_query($conn,$query);
     //prevent refresh for adding same record on database
	header('location:manage_email.php');
	exit;
	
	}
	
 $query   = "SELECT * FROM email WHERE id={$_GET['id']}";
    $result  = mysqli_query($conn,$query);
    $row     =mysqli_fetch_assoc($result);


include("../includes/header.php"); 
	
 $query   = "SELECT * FROM email WHERE id={$_GET['id']}";
    $result  = mysqli_query($conn,$query);
    $row     =mysqli_fetch_assoc($result);


?>
<title>Manage Customer</title>
  <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Updat Email</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">Edit Email</h4></center>
                                    <div class="card-body">
                                        <form  method="post">
                                         
                                            <div class="form-group">
                                                <label for="inputEmail">Email</label>
                                                <input name="email" id="inputEmail" type="email" placeholder="" <?php echo "value= '{$row['email']}'";  ?> class="form-control">
                                            
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputPassword">Password</label>
                                                <input name="password" id="inputPassword" type="number" placeholder="" <?php echo "value= '{$row['password']}'";  ?> class="form-control">
                                            </div> 
                                           
                                            
                                            <button name="submet" type="submet" class="btn btn-primary col-12">Update</button>
                                           
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php include("../includes/footer.php"); ?>