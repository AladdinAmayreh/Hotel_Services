<?php 
session_start();
include('includes/connect.php');

if(isset($_POST['SUBMIT'])){

    $email   =$_POST['customer_email'];
    $password=$_POST['customer_password'];

    if (!empty($email) && !empty($password)) {
        $query = "SELECT * FROM customer 
                   WHERE customer_email='$email'
                    AND customer_password= '$password'";
                    
        $result=mysqli_query($conn,$query);
        $row   =mysqli_fetch_assoc($result);
        if ($row['customer_id']) {
            $_SESSION['customer_id']= $row['customer_id'];
            header("location:index.php");
            

             } else{
                $error = "You are not authorized";
         } 
    }
}

?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assetss/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assetss/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assetss/libs/css/style.css">
    <link rel="stylesheet" href="assetss/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><h2>Please enter your user information.</h2></span></div>
            <div class="card-body">
                <?php 
                                if(isset($error)){
                                    echo "<div class='alert alert-danger'> $error </div>";
                                }
                            ?>
                <form  method="post">
                    <div class="form-group">
                        <input name="customer_email" class="form-control form-control-lg" id="username" type="text" placeholder="Email" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <input name="customer_password" class="form-control form-control-lg" id="password" type="password" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button name="SUBMIT" type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assetss/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assetss/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>





























