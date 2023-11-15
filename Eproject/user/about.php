<?php
include('connection.php');
$fetch_q = "SELECT * FROM `tbl_company`";
$run_q = mysqli_query($conn, $fetch_q);
//Count Work
$countbranch = "SELECT COUNT(*) as totalbranches FROM tbl_branch";
$countagent = "SELECT COUNT(*) as totalagents FROM tbl_agent";
$countuser = "SELECT COUNT(*) as totalusers FROM tbl_user WHERE r_id = '2'";
$countorder = "SELECT COUNT(*) as totalorders FROM tbl_order";

$q1 = mysqli_query($conn, $countbranch);
$q2 = mysqli_query($conn, $countagent);
$q3 = mysqli_query($conn, $countuser);
$q4 = mysqli_query($conn, $countorder); 

$row1 = mysqli_fetch_assoc($q1);
$row2 = mysqli_fetch_assoc($q2);
$row3 = mysqli_fetch_assoc($q3);
$row4 = mysqli_fetch_assoc($q4);

$totalbranches = $row1['totalbranches'];
$totalagents= $row2['totalagents'];
$totalusers= $row3['totalusers'];
$totalorders= $row4['totalorders'];
?>
 <!-- ======= Header ======= -->
  <?php include('navbar.php');?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>About</h2>
              <p>Unlock the full potential of your delivery business with Courier Manager - the
game-changing software solution designed to streamline your delivery processes, optimize
your logistics, and give you a competitive edge!</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://youtu.be/x4hh3Hh4xSk?si=_YOShC0753p8zoTX" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
            Our user-friendly software is tailored to meet the needs of all users and can be customized to suit
your specific requirements. From e-commerce to large and small courier companies,
Courier Manager covers every step of the journey from first mile to last.

            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-printer"></i>
                <div>
                  <h5>Your parcel details can be printed</h5>
                  <p class="fst-italic">You can get your complete parcel details in printed form as well from our website and you can also get the details of delivered parcel at your doorsteps.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Automatically import delivery data
</h5>
                  <p class="fst-italic">Dispatchers or drivers can add the info required to create a route. Submit complex or simplified route data depending on your needs</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Track your parcel anytime on our website.</h5>
                  <p class="fst-italic">Trusted by logistic companies, marketplaces and sellers across the world.
Track more than 1524+ couriers logistics and marketplaces, including UPS, DHL, FedEx, China Post, Alibaba, Ebay, Wish and more, all in one place.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span><?php echo $totalusers; ?></span>
              <p>Users</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span><?php echo $totalbranches; ?></span>
              <p>Branches</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span><?php echo $totalorders; ?></span>
              <p>Orders</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span><?php echo $totalagents; ?></span>
              <p>Agents</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
   
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Collaboration</span>
          <h2>Our Collaboration</h2>

        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
   <?php while($row = mysqli_fetch_array($run_q)){ ?>
      

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <br>
              <img src="assets/img/icon.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4><?php echo $row['co_name']; ?></h4>
              
                <p>
                <?php echo $row['co_desc']; ?>
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          
       
         <?php } ?>
         </div> 
      </div>
    
    </section><!-- End Our Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  “Businesses often forget about the culture, and ultimately, they suffer for it because you can’t deliver good service from unhappy employees.”

– Tony Hsieh, CEO of Zappos
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  “Design is not just what it looks like and feels like. Design is how it works.” — Steve Jobs
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  “You don't build a business, you build people, then people build the business.”

- Zig Ziglar
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  “If you’re working on something that you really care about, you don’t have to be pushed. The Vision pulls you.”

— Steve Jobs
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  “The thing that motivates me is a very common form of motivation. And that is, with other folks counting on me, it’s so easy to be motivated.” - Jeff Bezos
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

   
  </main><!-- End #main -->
<br><br>
<br>
  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- End Footer -->
