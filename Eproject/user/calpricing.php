
<!-- ======= Header ======= -->
 <?php
 $currentPage = 'calpricing';

 include('connection.php');
include('navbar.php');

?>
  <!-- End Header -->
  <link rel="stylesheet" href="agent/css/sb-admin-2.min.css">
     <link rel="stylesheet" type="text/css" href="styles.css">
     <script src="agent/js/sb-admin-2.min.js"></script>
<style>
body {
    text-align: center;
    font-family: Arial, sans-serif;
}

.calculator {
  margin-left: 0px !important;
    margin:50px;
    padding: 20px;
    border: 1px solid white;
    border-radius: 5px;
    display: inline-block;
}

button {
    padding: 10px 20px;
    background-color:white;
    color:black; 
    border: none;
    border-radius: 5px;
    cursor: pointer;

}
h1{
  color:white;
  margin-top:50px;
  align-items: center;
vertical-align: middle;
}
.div1{
  text-align: center;
  vertical-align:middle;
  justify-content: center;
  margin-top:80px;
  font-size: xx-large;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  font-weight: bold;
}
.input1{
width:270px;
text-align: center;
}
.select1{
  width:270px;
  text-align: center;
}
.select2{
  width:270px;
  text-align: center;
  line-height: normal;

}
.divcon{
  background-color:#0e1d34; 
  
}
.div2{
  background-color: #0e1d34;
}
.divho{
  background-color: #0e1d34;
}
</style>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Calculator</h2>
              <p> Powerful automatic pricing calculator for courier. Transparency is the key to building trust in courier services </p>
            </div>
          </div>
        </div>
      </div>
      <nav>
       
        <div class="container">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li>Calculate Pricing</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
 <br><br>
    <!-- ======= Contact Section ======= -->
  <?php
  if(isset($_POST['calc'])){
$weight=$_POST['weight'];
$unit=$_POST['unit'];
$comp=$_POST['comp'];
$qqq="select * from tbl_company WHERE co_id=$comp";
$results=mysqli_query($conn,$qqq);
$rows1=mysqli_fetch_array($results);
$perkg=$rows1['per_kg'];
$pergrams=$rows1['per_gram'];

if($unit=="kg"){
$price=$weight*$perkg;
echo "<script>alert('Total Price: '+$price);</script>";
}
elseif($unit=="gm"){
  if($weight>=1000){
    echo "<script>alert('Enter weight in kgs');</script>";
  }
  else{
  $price=$weight*$pergrams;
  echo "<script>alert('Total Price: '+$price);</script>";}
}

  }
  ?>   
<div class="container divcon">
  <div class="row">
    <div class="col-lg-6 div1 divcon">
    <h1>Courier Price Calculator</h1>
</div>
    <div class="col-lg-6 div2 ">
    <div class="calculator">
      <form action="" method="POST">
        <input class="input1"  type="number" id="weight" name="weight" placeholder="Enter Weight">
        <br>
        <br>
        <select class="select1" id="unit" name="unit">
        <option selected disabled>Select Unit</option>
            <option  value="kg">Kilograms (kg)</option>
            <option value="gm">Grams (gm)</option>
        </select>
        <br>
        <br>
        <select class="select2" name="comp">
        <option selected disabled>Select A Service</option>
        <?php
        $q="select * from tbl_company";
        $res=mysqli_query($conn,$q);
        while($row=mysqli_fetch_array($res)){
        ?>
<option value="<?php echo $row['co_id']?>"><?php echo $row['co_name']?></option>
        <?php
        }
        ?>
        </select>
        <br>
        <br>
        <button type="submit" name="calc">Calculate Price</button>
        </form>
        <p id="result"></p>
    </div>
    </div>
  </div>
</div>

  </main><!-- End #main -->
<br><br>
  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- End Footer -->

