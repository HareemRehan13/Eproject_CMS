<?php
$currentPage = 'home';

include('connection.php');
include('navbar.php');
$or_id = $sender_name = $status = '';

if (isset($_POST['btnsubmit'])) {
  $order_idInput = $_POST['order_id'];
  
  $select_q = "SELECT * FROM `tbl_order` WHERE or_id = '$order_idInput'";
  $run_q = mysqli_query($conn, $select_q);
  
  if ($run_q && mysqli_num_rows($run_q) > 0) {
      $row = mysqli_fetch_array($run_q);
      $or_id = $row['or_id'];
      $sender_name = $row['sender_name'];
      $status = $row['status'];
  }
   else {
      echo " <script>alert('Order ID not found')</script>";
  }
}
?>
<style>
  .comp{
  background-color:#fafafa;
 
}
.btn1{
 margin: 5px;
 color: white;
 background-color:#0e1d34;
 padding-top: 10px;
 padding-bottom: 10px;
 padding-right: 50px;
 padding-left: 50px;
border-radius: 10px;
}
.btna{
  color:white;
}
.li1{
  color: aqua;
}
.siv1{
  background-color: #fafafa;
text-align: center;

}

</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Your Lightning Fast Delivery Partner</h2>
          <p data-aos="fade-up" data-aos-delay="100">Experience seamless and transparent deliveries with our 
            lightning-fast service. Utilizing advanced tracking technology, we keep you informed in real-time,
             ensuring a swift and worry-free experience.</p>

          <form action="#" method="POST" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
    <input type="text" name="order_id" class="form-control" placeholder="Enter Your Order Id">
    <button type="submit" name="btnsubmit" class="btn1">Track</button>
</form>
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-4 ">
              <div class="stats-item text-center w-100 h-100">
                <span ><?php echo $or_id; ?></span>
                <p>Order Id</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-4 ">
              <div class="stats-item text-center w-100 h-100">
                <span><?php echo $sender_name; ?></span>
                <p>Sender Name</p>
              </div>
            </div><!-- End Stats Item -->

           

            <div class="col-4 ">
              <div class="stats-item text-center w-100 h-100">
                <span><?php echo $status; ?></span>
                <p>Status</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
  <section id="team " class="team pt-0 comp">
   <br>
   <div class="container" data-aos="fade-up">

     <div class="section-header">
     <span>Our Companies</span>
       <h2 class="mm">Our Companies</h2>
     </div>
     <div class="row" data-aos="fade-up" data-aos-delay="100">
      <?php
      $fetch_q1 = "SELECT * FROM `tbl_company`";
      $run_q1 = mysqli_query($conn, $fetch_q1);
      ?>
<?php while($row = mysqli_fetch_array($run_q1)){ ?>
   

       <div class="col-lg-4 col-md-12 col-sm-12 ">
         <div class="member">
          <br>
          <br>
           <div class="member-content">
             <h2 class="headings"><?php echo $row['co_name']; ?></h2>
           
             <p>
             <?php echo $row['co_desc']; ?>
             </p>
             <div class="btnlink">
                  <a  href="pricing.php"> Find Price</a>
                 
                </div>
           </div>
         </div>
       </div>
    
      <?php } ?>
      </div> 
   </div>
 
 </section>
      <!-- ======= Services Section ======= -->
      <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <span>Our Services</span>
          <h2 class="mm">Our Services</h2>
        </div>
        <div class="row gy-4">
          <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/logistics-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="services.php" class="stretched-link">Logistics</a></h3>
              <p>Our precision-focused logistics optimize your supply chain, reducing costs and enhancing efficiency. We manage transportation intricacies, inventory, and route planning with expertise. Real-time tracking and a dedicated team ensure seamless cargo movement. Elevate your business with us.
</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="services.php" class="stretched-link">Cargo</a></h3>
              <p>Experience seamless domestic and international shipments. We handle all logistics intricacies—from paperwork to customs clearance—ensuring your cargo arrives safely and on time. Trust us for effortless and reliable cargo services.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/trucking-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="services.php" class="stretched-link">Trucking</a></h3>
              <p>Count on us for punctual deliveries on any terrain. Our well-maintained fleet and skilled professionals guarantee safe and timely arrivals. Whether urban deliveries or large shipments, we have the perfect vehicle. Safety and efficiency are our focus, ensuring your cargo arrives securely and on schedule. Trust us for worry-free journeys.</p>
            </div>
          </div><!-- End Card Item -->
        </div>

      </div>
    </section>
    <!-- End Services Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about comp">
      <div class="container" data-aos="fade-up">
      <div class="section-header">
          <span>About Us</span>
          <h2 class="mm">About Us</h2>
        </div>
        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://youtu.be/x4hh3Hh4xSk?si=_YOShC0753p8zoTX" class="glightbox play-btn"></a>
          </div>
         

          <div class="col-lg-6 content order-last  order-lg-first">
            <p>
            Our user-friendly software is tailored to meet the needs of all users and can be customized to suit
your specific requirements. From e-commerce to large and small courier companies,
Courier Manager covers every step of the journey from first mile to last.

            </p>
            <ul>
              <li data-aos="fade-up"  data-aos-delay="100">
              <i class="bi bi-printer "></i>
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
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h3>Call To Action</h3>
            <p> Streamline your deliveries with our Courier Management System – the key to efficient logistics. Take charge, optimize routes, and elevate your delivery experience today.</p>
            <a class="cta-btn " href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section>
    <!-- End Call To Action Section -->
<br>
<br>
   <!-- ======= Features Section ======= -->
   <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item siv1" data-aos="fade-up">

          <div class="col-md-5">
            <img src="assets/img/features-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
            <h3>Streamlined Packing for Swift Parcel Delivery</h3>
            <p class="fst-italic">
            Optimize your packing process for efficient parcel delivery. Our user-friendly solutions prioritize security and efficiency, ensuring a smooth and reliable experience. Simplify your packing to streamline the entire delivery journey.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Streamline your packing procedures.</li>
              <li><i class="bi bi-check"></i>Ensure secure and efficient handling. </li>
              <li><i class="bi bi-check"></i>Optimize for a swift and reliable delivery service.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1">
            <h3>Efficient Order Fulfillment: Elevating Your Delivery Experience</h3>
            <p class="fst-italic">
            Experience flawless parcel deliveries with our cutting-edge courier management system. We prioritize precision, security, and efficiency, ensuring your shipments reach their destination seamlessly. Discover the unmatched convenience of our services for a hassle-free order fulfillment process.<br>
   </p>
   <p>  Our advanced tracking system ensures transparency and peace of mind, while our extensive network guarantees timely and careful parcel deliveries. Choose us for an elevated shipping experience marked by excellence in efficiency and security. </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item siv1" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-4.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7">
          <h3>Ensure Timely and Secure Shipments for Your Orders</h3>
            <p class="fst-italic">
            At our Courier Management System, we prioritize the swift and secure delivery of your orders. Our advanced tracking system allows you to monitor your shipments in real-time. Experience peace of mind with our reliable shipping services, ensuring your packages reach their destination on time, every time.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Stay informed with live updates on your shipment's location and delivery status.</li>
              <li><i class="bi bi-check"></i> We prioritize the safety of your packages, ensuring they reach their destination in pristine condition.</li>
              <li><i class="bi bi-check"></i>Our efficient logistics network guarantees on-time delivery, providing a seamless experience for both senders and recipients.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

      </div>
    </section><!-- End Features Section -->

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
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Frequently Asked Questions</span>
          <h2 class="mm">Frequently Asked Questions</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    How do you manage a courier?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Route planning and optimization: Courier managers need to plan the most efficient routes for delivery. This helps save time, gas, and money. Parcel tracking and tracing: A delivery business needs systems that will track and monitor the progress of each parcel through the whole delivery process.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    What are the services of a courier?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  A courier service is a service that allows someone to send a parcel or consignment from one location to another. They can be booked and paid for online. Senders have the option to have their parcels collected by a courier or drop their parcel off at a nearby location to be picked up later by the courier.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    What are the stages of parcel delivery?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                  Step 1: Packing the goods. The packaging of the goods you send is entirely your business, ie. ...<br>
Step 2: Waiting for the means of transport (delivery of the goods for transport)delivery. ...<br>
Step 3: Tracking parcels. ...<br>
Step 4: Receiving the package.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    How does parcel tracking work?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    1: Bar Code Generation.<br>
                    2:Scan Bar Code Details.<br>
3:Storing the Scanned Data.<br>
4:Receiving the Product.<br>
5:Re-scanning the Bar Code.<br>
6:Out for Delivery.<br>
7:Product Delivery.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Can the order be cancelled?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    No ! your order cannot be cancelled once its place to our website but you can cancle your order from the respective company from which your order has been placed in the given time period which your company provide you.
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- End Footer -->
