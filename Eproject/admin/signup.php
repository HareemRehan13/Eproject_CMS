<?php
include('connection.php');
$fetch_q = "SELECT * FROM `tbl_role`";
$run_q = mysqli_query($conn, $fetch_q);
if(isset($_POST['btnlogin'])){
$u_name = $_POST["u_name"];
$u_email = $_POST["u_email"];
$u_pass = $_POST["u_pass"];

$insert_q = "INSERT INTO `tbl_user`( `u_name`, `u_email`,  `r_id`,  `password`) VALUES ('$u_name','$u_email',2,'$u_pass' )";
$run_q = mysqli_query($conn, $insert_q);

        if($insert_q){
            echo"<script>window.location.href='login.php' </script>";
           

		}
       
else{
    echo '<script> alert("login fail")</script>';
  
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
    margin-top:65px !important;
    background-color: #fff;
    padding: 50px;
    border-radius: 15px;
    width: 90%;
    max-width: 500px;
    margin: auto;
}
.heading{
    padding-bottom:10px;
    color:  #112646 ;    
    font-weight: bold;
    text-align: center;
}
.button{
    background-color: #0e1d34 !important;
    color: #fff !important;
}
</style>
</head>

<body>

                                 <div class="maindiv">
                                     <h2 class="heading">SIGN UP</h2>
                                    <form method="POST">
                                        <div class="form-group">
                                        <label >Username</label>
                                            <input type="text" class="form-control "
                                                name="u_name" aria-describedby="emailHelp"
                                                placeholder="Enter Your Name...">
                                        </div>
                                        <div class="form-group">
                                        <label >Email</label>
                                            <input type="text" class="form-control "
                                                name="u_email" aria-describedby="emailHelp"
                                                placeholder="Enter Your Name...">
                                        </div>
                                        <div class="form-group">
                                        <label>Password</label>
                                            <input type="password" class="form-control "
                                                name="u_pass" placeholder="Enter Your Password...">
                                        </div>
                            <br>
                                        <button type="submit" class="btn button btn-user btn-block" name="btnlogin" >
                                          Sign Up</button>
                                          <br>
                                          <div style="text-align: center;">Already have an account? <a href="login.php">Login</a></div>

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