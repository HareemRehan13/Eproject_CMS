
<!-- ======= Header ======= -->
 <?php
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
  color: white;
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
.li{
  color:#0e1d34;
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
            <li class="li"><a  href="index.html">Home</a></li>
            <li class="li">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

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
elseif($unit=="grams"){
  $price=$weight*$pergrams;
  echo "<script>alert('Total Price: '+$price);</script>";
}
else{
  $weight>="1000gm";
  echo "<script>alert('please enter in kg');</script>";
}
  }
  ?>   
<div class="container divcon ">
  <div class="row">
    <div class="col-lg-6 div1 ">
    <h1>Courier Price Calculator</h1>
</div>
    <div class="col-lg-6 div2">
    <div class="calculator">
      <form action="" method="POST">
        <input class="input1"  type="number" id="weight" name="weight" placeholder="Enter Weight">
        <br>
        <br>
        <select class="select1" id="unit" name="unit">
            <option  value="kg">Kilograms (kg)</option>
            <option value="gm">Grams (gm)</option>
        </select>
        <br>
        <br>
        <select class="select2" name="comp">
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
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="col-lg-12">
          <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4 mt-4">

          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- End Footer -->

