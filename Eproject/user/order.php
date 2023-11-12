<?php
include('connection.php');

if(isset($_POST['btnsubmit'])){
    $order_weight = $_POST['order_weight'];
    $unit = $_POST['unit'];
    $co_name = $_POST['co_name'];
    $qqq = "select * from tbl_company WHERE co_id=$co_name";
    $results = mysqli_query($conn, $qqq);
    $rows1 = mysqli_fetch_array($results);
    $perkg = $rows1['per_kg'];
    $pergrams = $rows1['per_gram'];
    
    if($unit == "kg") {
        $price = $order_weight * $perkg;
        echo "<script>alert('Total Price: '+$price);</script>";

    } elseif($unit == "gm") {
        if($order_weight >= 1000) {
          echo "<script>alert('Enter weight in kgs');</script>";
        } else {
            $price = $order_weight * $pergrams;
            echo "<script>alert('Total Price: '+$price);</script>";}

        }
    
// Insert Data

if(isset($price) && $price > 0) {
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
$co_name = $_POST['co_name'];
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
 `receiver_address`, `receiver_phoneno`, `order_weight`, `order_distance`,`locationfrom`, `location_to`, `co_id`, `total_charges`) 
 VALUES ('$sender_name ','$sender_email','$sender_address ','$sender_phoneno','$receiver_name','$receiver_email','$receiver_address',
 '$receiver_phoneno','$order_weight','$distance', '$locationfrom','$location_to','$co_name',$price )";

$run = mysqli_query($conn, $insert_q);
if($run){
  echo "<script>alert('Order has been placed, keep track on its status ');</script>";
}
else {
  echo "<script>alert('Error calculating price. Please try again.');</script>";
}
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
              <p> Simplify your order processing with CMS. Our user-friendly platform ensures smooth operations, precise tracking, and punctual deliveries. Enjoy seamless order management, enhancing your business's efficiency and customer service.</p>
            </div>
          </div>
        </div>
      </div>
    
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">
      <form class="php-email-form"action="" method="POST">
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
                  <input type="text" class="form-control" name="order_weight" placeholder="Order Weight In Unit" required>
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
                <div class="col-md-11">
                <label  class="form-label">Company</label>
                   
    <select class="form-control" name="co_name">
        <option selected disabled>Select</option>
   <?php 
   $select_c ='SELECT * FROM `tbl_company`';
   $run_c = mysqli_query($conn, $select_c);
   while ($row3 = mysqli_fetch_array($run_c)) { ?>
      <option value="<?php echo $row3['co_id']; ?>"><?php echo $row3['co_name']; ?></option>

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
                <label  class="form-label">Unit</label>
                <select class="form-control"  name="unit">
        <option selected disabled>Select Unit</option>
            <option  value="kg">Kilograms (kg)</option>
            <option value="gm">Grams (gm)</option>
        </select>
                </div>
                
         
                 
                <div class="col-md-11">
                <label  class="form-label">Location From</label>
                <select class="form-control" name="locationfrom">
        <option selected disabled>Select</option>
   <?php 
   $select_qu ='SELECT * FROM `tbl_city`';
   $run_qu = mysqli_query($conn, $select_qu);
   while ($row2 = mysqli_fetch_array($run_qu)) { ?>
      <option value="<?php echo $row2['ci_id']; ?>"><?php echo $row2['ci_name']; ?></option>

   <?php } ?>
</select>
                </div>
              </div>
              <br><br><button type="submit" class="btn btn-primary" name="btnsubmit">Place Your Order</button>
              <!-- Button trigger modal -->
<!-- Modal -->
<!-- <button type="submit" class="btn btn-primary"  name="calc" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Place Your Order</button>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Confirm Your Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <b>Total Price:</b>  <p id="totalprice"></p>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Confirm Order</button>

      </div> -->
    </div>
  </div>
</div>
             
               

      
          </div><!-- End Quote Form -->

        </div>

      </div> 
     </form>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php');?>
  <!-- End Footer -->
 
