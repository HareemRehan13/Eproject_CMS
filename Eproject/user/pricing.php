
<!-- ======= Header ======= -->
  <?php include('navbar.php');
  include('connection.php');
  ?>
  <link rel="stylesheet" href="#main">
  <link rel="stylesheet" href="agnet/css/sb-admin-2.min.css">

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
    }
    .opn{
      text-transform: uppercase;
      text-align: center;
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
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
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

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item div1">
            <?php
        $q='SELECT * FROM `tbl_company` WHERE co_id= 2';
        $res=mysqli_query($conn,$q);
        while($row=mysqli_fetch_array($res)){
        ?>
<h5><option class="option2" value="<?php echo $row['co_id']?>">PER KG <?php echo   $row['per_kg'] ?></option></h5>
<br>
<h5><option class="option2" value="<?php echo $row['co_id']?>">PER Grams <?php echo $row['per_gram']?></option></h5>
<br>
<h3><option class="opn" value="<?php echo $row['co_id']?>"><?php echo $row['co_name']?></option></h3>
<br>
 <p><option value="<?php echo $row['co_id']?>"><?php echo $row ['co_desc'] ?></option></p>
        <?php
        }
        ?>  

              <!-- <h3>overnight</h3>
              <h4><sup>$</sup>0<span> / month</span></h4> -->
              <ul>
                
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              
              <h3>sameday delivery</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
          gg
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>End Pricing Item

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>DHL</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div>End Pricing Item -->
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Horizontal Pricing Section ======= -->
    <section id="horizontal-pricing" class="horizontal-pricing pt-0">
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
        </div><!-- End Pricing Item -->

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
        </div><!-- End Pricing Item -->

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
        </div><!-- End Pricing Item -->

      </div>
    </section><!-- End Horizontal Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- End Footer -->
