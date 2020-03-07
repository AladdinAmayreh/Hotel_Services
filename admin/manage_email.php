<?php 
include("../includes/connect.php");
//the action will start if user press on button
if (isset($_POST['submet'])) {
// fetch Data from web form
	$email   =$_POST['email'];
	$password=$_POST['password'];
	
	
	$query ="insert into email(email,password) values('$email','$password')";
	 

	//perform query
	mysqli_query($conn,$query);
     //prevent refresh for adding same record on database
	header('location:manage_email.php');
	exit;
	
	}
//the action will start if user press on button
if (isset($_GET['admin_id'])) {
    
$query = "DELETE FROM email WHERE id = {$_GET['admin_id']}";
     

    //perform query
    mysqli_query($conn,$query);
     //prevent refresh for adding same record on database
    header('location:manage_email.php');
    exit;
    
    }
    if (isset($_POST['submit'])) {
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

include("../includes/header.php"); 


?>
<title>Manage Admin</title>
  <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Creat Email</h3>
                                    
                                </div>
                                <div class="card">
                                  <center>  <h4 class="card-header">New Email</h4></center>
                                    <div class="card-body">
                                        <form  method="post">
                                         
                                            <div class="form-group">
                                                <label for="inputEmail"> Email</label>
                                                <input name="email" id="inputEmail" type="email" placeholder="name@example.com" class="form-control">
                                            
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputPassword"> Password</label>
                                                <input name="password" id="inputPassword" type="password" placeholder="Password" class="form-control">
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
                                                
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM email";
                                            $result= mysqli_query($conn,$query);
                                            while($row=mysqli_fetch_assoc($result)){

                                                echo "<tr>";
                                                echo "<td>{$row['id']}</td>";
                                                echo "<td>{$row['email']}</td>";
                                                
                                               
                                                echo "<td><a href ='?admin_id={$row['id']}'class='btn
                                                             btn-warning'> EDIT</a></td>";
                                               

                                                echo "<td ><a href='?id={$row['id']}' class='btn
                                                             btn-danger' >DELETE</a></td>";
                                                echo "</tr>";                                               
                                            }


                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

<button type='button' class='btn btn-info btn-lg' data-toggle='modal' data-target='#myModal'>Edit </button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Email</h4>
      </div>
      <div class="modal-body">
     <div class="form-group">
        <?php
    
 $query   = "SELECT * FROM email ";
    $result  = mysqli_query($conn,$query);
    $row     =mysqli_fetch_assoc($result);

         ?>
                                                <label for="inputEmail">Email</label>
                                                <input name="email" id="inputEmail" type="email" placeholder="" <?php echo "value= '{$row['email']}'";  ?> class="form-control">
                                            
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="inputPassword">Password</label>
                                                <input name="password" id="inputPassword" type="number" placeholder="" <?php echo "value= '{$row['password']}'";  ?> class="form-control">
                                            </div>
                                             <button name="submet" type="submit" class="btn btn-primary col-12">Update</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php include("../includes/footer.php"); ?>