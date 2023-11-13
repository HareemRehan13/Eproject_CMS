<?php
include('connection.php');
session_start();
if(isset($_POST['btnlogin'])){
$u_name = $_POST["u_name"];
$u_pass = $_POST["u_pass"];
$select_q = "SELECT * FROM `tbl_user` WHERE u_name ='$u_name' and password ='$u_pass'";
$run_q = mysqli_query($conn, $select_q);
$roles=mysqli_fetch_assoc($run_q);
$role=$roles['r_id'];
$row = mysqli_num_rows($run_q);

if($row>=1){
		if($role == 1){
            echo '<script>alert("login successful")</script>'; 
            $_SESSION['user_name'] = $u_name;
            $_SESSION['id'] = $roles['u_id'];
            echo"<script>window.location.href='dashboard.php' </script>";

		}
        if($role == 3){
            echo '<script>alert("login successful")</script>'; 
            $_SESSION['user_name'] = $u_name;
            $_SESSION['id'] = $roles['u_id'];
            echo"<script>window.location.href='../agent/dashboard.php' </script>";

		}
        else{
            echo '<script>alert("login successful")</script>'; 
            $_SESSION['user_name'] = $u_name;
            $_SESSION['id'] = $roles['u_id'];
            echo"<script>window.location.href='../user/home.php' </script>";
         
        }
      
}
else if($u_name != $role && $u_pass != $role){
    echo '<script> alert(" User data not found. Please sign up")</script>';
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
      width: 44%; 
      border-radius: 15px;
    padding: 60px;
    margin:  auto;
}
.heading{
    color:white;
    margin-top:60px ;
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
                                                name="u_name" aria-describedby="emailHelp"
                                                placeholder="Enter Your Name...">
                                        </div>
                                        <div class="form-group">
                                        <label>Password</label>
                                            <input type="password" class="form-control "
                                                name="u_pass" placeholder="Enter Your Password...">
                                        </div>
<br>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="btnlogin" >
                                          Login</button>
                                          <br>
                                      <div style="text-align: center;">Don't have an account? <a href="signup.php">Sign up</a></div>
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