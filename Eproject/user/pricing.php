
<!-- ======= Header ======= -->
  <?php
$currentPage = 'pricing';

  include('navbar.php');
  include('connection.php');
  $fetch_q = "SELECT * FROM `tbl_company`";
$run_q = mysqli_query($conn, $fetch_q);
?>
  <!-- End Header -->
  <style>
    .option1{
      justify-content: center;
      font-size: large;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      display:block;
      font-weight: bolder;
      
    }
    .option2{
    text-align: center;
    font-weight: bold;
    }
    .opn{
      text-transform: uppercase;
      text-align: center;
      background-color: #0e1d34;
      color:azure;
      font-weight: bolder;
    }
    .grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr); 
  gap: 10px;
} 

.grid-item {
  border: 1px solid #ccc;
  padding: 10px;
  
}
.description {
  white-space: nowrap; 
  overflow: hidden;
  text-overflow: ellipsis; 
  max-width: 100%; 
  white-space: initial; 
  text-align: center;
}
.div1{
  background-color:#f0f0f0;
  padding:20px;

}
.mm{
color:#0e1d34;
font-weight:bold ;

}
  </style>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Pricing Plan</h2>
              <p>The courier management system offers flexible pricing plans tailored to meet the diverse needs of businesses. Whether you're a small enterprise or a large corporation, our plans ensure cost-effectiveness, scalability, and seamless integration, providing a comprehensive solution for efficient and streamlined courier operations.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Pricing</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->


    <!-- ======= Our Team Section ======= -->
    <section id="pricing" class=" pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>Affordable Pricing Packages</span>
          <h1 class="mm">Affordable Pricing Packages</h1>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
   <?php while($row = mysqli_fetch_array($run_q)){ ?>
          <div class="col-lg-4 col-md-6 d-flex">
            <div class="">
              <div class="div1">
               <h5><option class="option2" value="<?php echo $row['co_id']?>"> Rupees Per Kg: <?php echo   $row['per_kg'] ?></option></h5>
<br>
<h5><option class="option2" value="<?php echo $row['co_id']?>">Rupees Per Grams: <?php echo $row['per_gram']?></option></h5>
<br>
<h3><option class="opn" value="<?php echo $row['co_id']?>"><?php echo $row['co_name']?></option></h3>
<br>
 <p><option class="description" value="<?php echo $row['co_id']?>"><?php echo $row ['co_desc'] ?></option></p>
              </div>
            </div>
          </div>
         <?php } ?>
         </div> 
      </div>
    </section>
   <!-- ======= Horizontal Pricing Section ======= -->
     <!-- <section id="horizontal-pricing" class="horizontal-pricing pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>Horizontal Pricing</span>
          <h2>Horizontal Pricing</h2>

        </div>
        <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>Free Plan</h3>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>0<span> / month</span></h4>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
              <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
            </ul>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div>

        <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>Business Plan</h3>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>29<span> / month</span></h4>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
              <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bi bi-check"></i> <strong>Nec feugiat nisl pretium</strong></li>
              <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
            </ul>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div>

        <div class="row gy-4 pricing-item mt-4" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>Developer Plan</h3>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>49<span> / month</span></h4>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
              <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
            </ul>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div>

      </div>
    </section> -->
  </main>

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- End Footer -->
