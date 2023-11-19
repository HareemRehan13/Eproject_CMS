<?php
$currentPage = 'services';

include('connection.php');
$fetch_q = "SELECT * FROM `tbl_company`";
$run_q = mysqli_query($conn, $fetch_q);
?>
 <!-- ======= Header ======= -->
  <?php include('navbar.php');?>
  <!-- End Header -->
<style>
   .headings{
    color: #01155e;
   }
   .btnlink a{
  color:white;
   }
  .btnlink{
    background-color: #0e1d34;
    padding: 8px;
    margin-left: 80px;
    margin-right: 80px;
    border-radius: 70px;
  
  }
 
</style>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Services</h2>
              <p>
CMS revolutionizes deliveries with cutting-edge technology and dedicated experts. We guarantee swift, secure, and reliable services. Choose us for unparalleled precision and customer satisfaction. Experience excellence in every delivery.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li>Services</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Featured Services Section ======= -->
   <br>
   
    <section id="team" class="team pt-0">
   
      <div class="container" data-aos="fade-up">

        <div class="section-header">
         
        <span> Companies</span>
          <h2> Companies</h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
   <?php while($row = mysqli_fetch_array($run_q)){ ?>
      

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <br><br>
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
    <!-- End Featured Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Our Services</span>
          <h2>Our Services</h2>

        </div>

        <div class="row gy-4">

          
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/logistics-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Logistics</a></h3>
              <p>Our precision-focused logistics optimize your supply chain, reducing costs and enhancing efficiency. We manage transportation intricacies, inventory, and route planning with expertise. Real-time tracking and a dedicated team ensure seamless cargo movement. Elevate your business with us.
</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/cargo-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Cargo</a></h3>
              <p>Experience seamless domestic and international shipments. We handle all logistics intricacies—from paperwork to customs clearance—ensuring your cargo arrives safely and on time. Trust us for effortless and reliable cargo services.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/trucking-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Trucking</a></h3>
              <p>Count on us for punctual deliveries on any terrain. Our well-maintained fleet and skilled professionals guarantee safe and timely arrivals. Whether urban deliveries or large shipments, we have the perfect vehicle. Safety and efficiency are our focus, ensuring your cargo arrives securely and on schedule. Trust us for worry-free journeys.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/packaging-service.jpg" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Packaging</a></h3>
              <p>Let us handle the intricacies of packing. Our meticulous team ensures every item, from delicate valuables to substantial furniture, is securely wrapped. Using top-tier materials, we guarantee safe transit. Focus on your journey's excitement while we take care of the packing details, ensuring a stress-free move.</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

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

        <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
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


   <!-- ======= Frequently Asked Questions Section ======= -->
   <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Frequently Asked Questions</span>
          <h2>Frequently Asked Questions</h2>

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

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- End Footer -->
