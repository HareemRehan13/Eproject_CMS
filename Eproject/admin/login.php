<?php
include('connection.php');
session_start();
if(isset($_POST['btnlogin'])){
$user_name = $_POST["user_name"];
$user_pass = $_POST["user_pass"];
$select_q = "SELECT * FROM `tbl_user` WHERE u_name ='$user_name' and password ='$user_pass'";
$run_q = mysqli_query($conn, $select_q);
$row = mysqli_num_rows($run_q);
		if($row == 1){
            echo '<script>alert("login successful")</script>'; 
            $_SESSION['user_name'] = $user_name;
            echo"<script>window.location.href='dashboard.php' </script>";

		}
        else{
            echo '<script> alert("login fail")</script>';
            echo"<script>window.location.href='login.php' </script>";

		}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin  - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style>
    body {

    background-image: url(img/img2.png); 
  
  background-repeat: no-repeat;
  background-size: cover;

  

}

.maindiv{
    background-color: #fff;
      position: relative;
      width: 45%; 
      border-radius: 15px;
    padding: 70px;
    margin:  auto;
}
.heading{
    color:white;
    margin-top:70px ;
    text-align: center;
}
</style>
</head>

<body>

                               <div class="container">
                                 <h1 class="heading">ACCOUNT LOGIN</h1>
                                 <br>
                                 <div class="maindiv">
                                    <form method="POST">
                                        <div class="form-group">
                                        <label >Username</label>
                                            <input type="text" class="form-control "
                                                name="user_name" aria-describedby="emailHelp"
                                                placeholder="Enter Your Name...">
                                        </div>
                                        <div class="form-group">
                                        <label>Password</label>
                                            <input type="password" class="form-control "
                                                name="user_pass" placeholder="Enter Your Password...">
                                        </div>

                                        <div class="row">
                                        <div class="form-group col-6">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <div class="col-6" style="text-align:right;">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="btnlogin" >
                                          Login</button>
                                      
                                    </form></div>
           
</div>
        </div>

    </div>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>