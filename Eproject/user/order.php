
<?php
include('connection.php');

if(isset($_POST['btnsubmit'])){



  $sender_name = $_POST['sender_name'];
$sender_email = $_POST['sender_email'];
$sender_address = $_POST['sender_address'];
$sender_phoneno = $_POST['sender_phoneno'];
$receiver_name = $_POST['receiver_name'];
$receiver_email = $_POST['receiver_email'];
$receiver_address = $_POST['receiver_address'];
$receiver_phoneno = $_POST['receiver_phoneno'];
$order_weight = $_POST['order_weight'];

$locationfrom = $_POST['locationfrom'];
$location_to = $_POST['location_to'];
$loc="select * from tbl_city where ci_id='$locationfrom'";
 $locs=mysqli_query($conn,$loc); 
 $locss=mysqli_fetch_assoc($locs);
 $loc_f=$locss['ci_name'];
 $loc2="select * from tbl_city where ci_id='$location_to'";
 $locs2=mysqli_query($conn,$loc2); 
 $locss2=mysqli_fetch_assoc($locs2);
 $loc_t=$locss2['ci_name'];
  $api_key = 'AIzaSyAOfoQEnSeEMhNmp8NI6ZZGulHloVCIZUA';
  $origin = $loc_f.',Pakistan'; // Replace with the first city and country
  $destination = $loc_t.',Pakistan'; // Replace with the second city and country
  
  // Create the API request URL
  $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=" . urlencode($origin) . "&destinations=" . urlencode($destination) . "&key=AIzaSyAOfoQEnSeEMhNmp8NI6ZZGulHloVCIZUA";
  
  // Initialize cURL session
  $ch = curl_init($url);
  
  // Set cURL options
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  // Execute cURL session and get the API response
  $response = curl_exec($ch);
  
  // Close cURL session
  curl_close($ch);
  $distance = ''; // Define $distance variable before the if block

if ($response) {
    $data = json_decode($response, true);

    if (isset($data['rows'][0]['elements'][0]['distance']['text'])) {
        $distance = $data['rows'][0]['elements'][0]['distance']['text'];
        echo "<script>alert('Distance: $distance')</script>";

    } else {
        echo "Distance information not found in the API response.";
    }
} else {
    echo "Error fetching data from the API.";
}

$insert_q ="INSERT INTO `tbl_order`(`sender_name`, `sender_email`,`sender_address`, `sender_phoneno`, `receiver_name`, `receiver_email`,
 `receiver_address`, `receiver_phoneno`, `order_weight`, `order_distance`,`locationfrom`, `location_to`) 
 VALUES ('$sender_name ','$sender_email','$sender_address ','$sender_phoneno','$receiver_name','$receiver_email','$receiver_address',
 '$receiver_phoneno','$order_weight','$distance', '$locationfrom','$location_to')";

$run = mysqli_query($conn, $insert_q);
if($run){
  echo "<script>alert('Order has been placed, keep track on its status');</script>";
}


}
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
              <h2>Order</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
    
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">
      <form class="php-email-form" method="POST">
        <div class="row g-0">
        <h2>Place A Parcel Order</h2>
              <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
            
        <div class="col-lg-6">
            
               <div class="row gy-4">

               <div class="col-md-11">
                <label  class="form-label">Sender Name</label>
                  <input type="text" name="sender_name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-11 ">
                <label  class="form-label">Sender Phoneno</label>
                  <input type="text" class="form-control" name="sender_phoneno" placeholder="Your Phone" required>
                </div>

                <div class="col-md-11">
                <label  class="form-label">Receiver Name</label>
                  <input type="text" class="form-control" name="receiver_name" placeholder="Reciever Name" required>
                </div>

                <div class="col-md-11">
                <label  class="form-label">Receiver Phoneno</label>
                  <input type="text" class="form-control" name="receiver_phoneno" placeholder="Receiver Phone" required>
                </div>
                

                <div class="col-md-11">
                <label  class="form-label">Order Weight</label>
                  <input type="text" class="form-control" name="order_weight" placeholder="Order Weight" required>
                </div>

               
                <div class="col-md-11">
                <label  class="form-label">Location To</label>
                   
    <select class="form-control" name="location_to">
        <option selected disabled>Select</option>
   <?php 
   $select_q ='SELECT * FROM `tbl_city`';
   $run_q = mysqli_query($conn, $select_q);
   while ($row = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $row['ci_id']; ?>"><?php echo $row['ci_name']; ?></option>

   <?php } ?>
</select>
                 
                </div>
     
              </div>
           
          </div>

          <div class="col-lg-6">
          
                <div class="row gy-4">

                <div class="col-md-11">
                <label  class="form-label">Sender Email</label>
                  <input type="email" name="sender_email" class="form-control" placeholder="Your Email" required>
                </div>

                <div class="col-md-11">
                <label  class="form-label">Sender Address</label>
                  <input type="text" name="sender_address" class="form-control" placeholder="Your Address" required>
                </div>
               

                <div class="col-md-11">
                <label  class="form-label">Receiver Email</label>
                  <input type="email" class="form-control" name="receiver_email" placeholder="Receiver Email" required>
                </div>

                <div class="col-md-11">
                <label  class="form-label">Receiver Address</label>
                  <input type="phone" class="form-control" name="receiver_address" placeholder="Receiver Address" required>
                </div>

                

                 
                <div class="col-md-11">
                <label  class="form-label">Location From</label>
                <select class="form-control" name="locationfrom">
        <option selected disabled>Select</option>
   <?php 
   $select_qu ='SELECT * FROM `tbl_city`';
   $run_qu = mysqli_query($conn, $select_qu);
   while ($row1 = mysqli_fetch_array($run_qu)) { ?>
      <option value="<?php echo $row1['ci_id']; ?>"><?php echo $row1['ci_name']; ?></option>

   <?php } ?>
</select>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-primary" name="btnsubmit">Place Your Order</button>
               
          
          </div><!-- End Quote Form -->

        </div>

      </div> 
     </form>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- End Footer -->
