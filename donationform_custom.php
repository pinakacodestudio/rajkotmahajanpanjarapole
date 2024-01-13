<?php
   // print_r($_POST);
   // print_r($_REQUEST);
   // echo ($_REQUEST['data-donation-name'] == "cattle-adoption-scheme" ? 'selected' : '22');
   // exit;
?>
<!doctype html>
<html>
   <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <title>Donate Us | Rajkot Mahajan Panjarapole</title>
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
      <link href='#' rel='stylesheet'>
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <style>
      ::-webkit-scrollbar {
         width: 8px;
         }
         /* Track */
         ::-webkit-scrollbar-track {
         background: #f1f1f1; 
         }
         /* Handle */
         ::-webkit-scrollbar-thumb {
         background: #888; 
         }
         /* Handle on hover */
         ::-webkit-scrollbar-thumb:hover {
         background: #555; 
         } @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
         /* Reseting */
         * {
         font-family: 'Poppins', sans-serif;
         }
         body{
         background-image: url("images/donateformcover.jpg");
         overflow:hidden;
         min-height: 100vh;
         }
         .wrapper{
         max-width: 850px;
         background-color: #fff;
         border-radius: 10px;
         position: relative;
         display: flex;
         margin: 50px auto;
         box-shadow: 0 8px 20px 0px #f26522;
         overflow: hidden;
         }
         .wrapper .form-left{
         background: #f6976a;
         border-top-left-radius: 10px;
         border-bottom-left-radius: 10px;
         padding: 20px 40px;
         position: relative;
         width: 100%;
         color: #fff;
         }
         .wrapper h3,h2,h4{
         font-weight: 700;
         font-size: 25px;
         padding: 5px 0 0;
         margin-bottom: 34px;
         pointer-events: none;
         }
         .img1{
            border-radius:5px;
            transition: transform .2s; /* Animation */
         }
         .img1:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
        a{
            color:#f26522
        }
         .wrapper .form-left p{
         font-size: 0.9rem;
         font-weight: 300;
         line-height: 1.5;
         pointer-events: none;
         }
         .wrapper .form-left .text{
         margin: 20px 0 25px;
         }
         .wrapper .form-left p span{
         font-weight: 700;
         }
         .wrapper .form-left input{
         padding: 15px;
         background: #fff;
         border-top-left-radius: 5px;
         border-bottom-right-radius: 5px;
         width: 180px;
         border: none;
         margin: 15px 0 50px 0px;
         cursor: pointer;
         color: #f6976a;
         font-weight: 700;
         font-size: 0.9rem;
         appearance: unset;
         outline: none;
         }
         .wrapper .form-left input:hover{
         background-color: #f2f2f2;
         }
         .wrapper .form-right{
         padding: 20px 40px;
         position: relative;
         width: 100%;
         }
         .wrapper .form-right h2,h3,h4,h5,h6{
         color: #f6976a;
         }
         .wrapper .form-right label{
         font-weight: 600;
         font-size: 15px;
         color: #f6976a;
         display: block;
         margin-bottom: 8px;
         }
         .wrapper .form-right .input-field{
         width: 100%;
         padding: 10px 15px;
         border: 1px solid #e5e5e5;
         border-top-left-radius: 5px;
         border-bottom-right-radius: 5px;
         outline: none;
         color: #333;
         }
         .wrapper .form-right .input-field:focus{
         border: 1px solid #f6976a;
         }
         .wrapper .option {
         display: block;
         position: relative;
         padding-left: 30px;
         margin-bottom: 12px;
         font-size: 0.95rem;
         font-weight: 900;
         cursor: pointer;
         user-select: none
         }
         .wrapper .option input {
         position: absolute;
         opacity: 0;
         cursor: pointer;
         height: 0;
         width: 0
         }
         .wrapper .checkmark {
         position: absolute;
         top: 0;
         left: 0;
         height: 18px;
         width: 18px;
         background-color: #fff;
         border: 2px solid #ddd;
         border-radius: 2px
         }
         .wrapper .option:hover input~.checkmark {
         background-color: #f1f1f1
         }
         .wrapper .option input:checked~.checkmark {
         border: 2px solid #e5e5e5;
         background-color: #fff;
         transition: 300ms ease-in-out all
         }
         .wrapper .checkmark:after {
         content: "\2713";
         position: absolute;
         display: none;
         color: #f6976a;
         font-size: 1rem;
         }
         .wrapper .option input:checked~.checkmark:after {
         display: block
         }
         .wrapper .option .checkmark:after {
         left: 2px;
         top: -4px;
         width: 5px;
         height: 10px
         }
         .wrapper .register{
         padding: 12px;
         background: #f6976a;
         border-top-left-radius: 5px;
         border-bottom-right-radius: 5px;
         width: 130px;
         border: none;
         margin: 6px 0 50px 0px;
         cursor: pointer;
         color: #fff;
         font-weight: 700;
         font-size: 15px;
         }
         .wrapper .register:hover{
         background-color: #f6976a;
         }
         .wrapper a{
         text-decoration: none;
         }
         @media (max-width: 860.5px) {
         .wrapper{
         margin: 50px 5px;
         }
         }
         @media (max-width: 767.5px){
         .wrapper{
         flex-direction: column;
         margin: 30px 20px;
         }
         body {
        overflow: auto; /* Enable overflow for screens smaller than 767.5px */
    }
         .wrapper .form-left{
         border-bottom-left-radius: 0px;
         }
         }
         @media (max-width: 575px) {
         .wrapper{
         margin: 30px 15px;
         }
         .wrapper .form-left{
         padding: 25px;
         }
         .wrapper .form-right{
         padding: 25px;
         }
         }
      </style>
      
   </head>
   <body>
      <div class="wrapper">
         <div class="form-left">
            <h2 class="text-uppercase">Dear Donner,</h2>
            <p>
Give, so others can live. Be part of a change in the world. Help today because tomorrow you may be the one who needs helping! Your change can change lives.            </p>
            <img src="images/donateform.jpg" class="img-fluid img1" alt="">
            <p class="text">
               <span>AVAIL 80G BENEFITS ON ALL THE DONATIONS MADE TO RAJKOT MAHAJAN PANJARAPOL​E:</span>
Exemption Certificate Ref. No.: आ. नि. (छू.) मु. न./80-जी/1667/2007/2008-2009
Validity extended perpetually vide CBDT Circular No. 7/2010 dated 27/10/2010
            </p>
        
         </div>
         <form class="form-right" method="post">
            <h6 class="text-uppercase">Paying to <b>Mahajan Panjrapole.</b></h6>
            <div class="row">
               <div class="col-sm-6 mb-3">
                  <label>Name</label>
                  <input type="text" name="first_name" id="first_name" value="demo" class="input-field">
               </div>
               <div class="col-sm-6 mb-3">
                  <label>Phone Number</label>
                  <input type="text" name="last_name" id="last_name" value="demo" class="input-field">
               </div>
            </div>
            <div class="mb-3">
               <label>Your Email</label>
               <input type="email" class="input-field" value="demo@gmail.com" name="email_id" id="email_id" required>
            </div>
            <div class="mb-3">
               <label>Donation For</label>
               <select id="donationFor" class="input-field" name="donationFor" required>
            <option value="" disabled selected>Select an option</option>
            <option <?= $_REQUEST['data-donation-name'] == "cattle-adoption-scheme" ? 'selected' : ' ' ?> value="Feed Cows (My COW My SUPPORT)">Feed Cows (My COW My SUPPORT)</option>
            <option <?= $_REQUEST['data-donation-name'] == "milk-feeding-scheme" ? 'selected' : ' ' ?> value="Daily Food and Water to Other Animals">Daily Food and Water to Other Animals</option>
            <option <?= $_REQUEST['data-donation-name'] == "protein-food-scheme" ? 'selected' : ' ' ?> value="Medical Care for Animals">Medical Care for Animals</option>
            <option <?= $_REQUEST['data-donation-name'] == "shelter-fund-scheme" ? 'selected' : ' ' ?> value="Shelter Maintenance & Construction">Shelter Maintenance & Construction</option>
            <option <?= $_REQUEST['data-donation-name'] == "medicine-treatment-scheme" ? 'selected' : ' ' ?> value="For Any Specific Rituals">For Any Specific Rituals</option>
            <option <?= $_REQUEST['data-donation-name'] == "one-day-fodder-fund" ? 'selected' : ' ' ?> value="For Birthday & Anniversary">For Birthday & Anniversary</option>
            <option <?= $_REQUEST['data-donation-name'] == "bird-food-fund" ? 'selected' : ' ' ?> value="Other">Other</option>
        </select>
            </div>
            	<div class="row">
                  <div class="mb-3">
                        <label>Donation Amount</label>
                        <div class="input-group">
                           <span class="input-group-btn">
                                 <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                 -
                                 </button>
                           </span>
                           <input readonly type="text" id="quantity" name="quantity" class="form-control input-number" value="<?= $_REQUEST["data-amount"]; ?>" min="500" max="1000000" readonly>
                           <span class="input-group-btn">
                                 <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                    +
                                 </button>
                           </span>
                        </div>
                     </div>
                  </div>
            <!-- <div class="row">
               <div class="col-sm-6 mb-3">
                  <label>Password</label>
                  <input type="password" name="pwd" id="pwd" class="input-field">
               </div>
               <div class="col-sm-6 mb-3">
                  <label>Current Password</label>
                  <input type="password" name="cpwd" id="cpwd" class="input-field">
               </div>
            </div> -->
            <div class="mb-3">
               <label class="option">I agree to the <a href="#">Terms and Conditions</a>
               <input type="checkbox" checked>
               <span class="checkmark"></span>
               </label>
            </div>
            <input type="hidden" id="donate_id" value="<?= $_REQUEST["data-donation-id"]; ?>" />
            <div class="form-field">
               <input type="button" value="Donate Now" class="register donatenow" name="register">
            </div>
            <div class="form-field d-flex align-items-center justify-content-center">
               <p>Powered By</p>
            </div>
            <div class="form-field d-flex align-items-center justify-content-center">
               <img src="images/cashfreelogo.svg" alt="">
            </div>
         </form>
         
      </div>
      <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
      <!-- <script type='text/javascript' src='#'></script>
      <script type='text/javascript' src='#'></script>
      <script type='text/javascript' src='#'></script> -->
      <!-- <script type='text/javascript'>#</script> -->
      <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
         myLink.addEventListener('click', function(e) {
           e.preventDefault();
         });
         $(document).ready(function(){
$(document).ready(function () {

    $('.quantity-right-plus').click(function (e) {
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
        $('#quantity').val(Math.max(quantity + 1000, 500));
    });

    $('.quantity-left-minus').click(function (e) {
        e.preventDefault();
        var quantity = parseInt($('#quantity').val());
        if (quantity > 500) {
            $('#quantity').val(quantity - 1000);
        }
    });

});
    
});
      </script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

$(".donatenow").click(function()
{
   var first_name=$('#first_name').val();
   var last_name=$('#last_name').val();
   var email_id=$('#email_id').val();
   // var productid=parseInt($('#donate_id').val());
   var productname=$('#donationFor').val();
   var amount=parseInt($('#quantity').val());
	
  var options = {
    "key": "rzp_test_rtjvb6iwpCxWKK", // Enter the Key ID generated from the Dashboard
    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "name": "Rajkot Mahajan Panjarapole",
    "description": productname,
    "image": "iso.png",
    "handler": function (response){
        var paymentid=response.razorpay_payment_id;
        $.ajax({
          url:"payment-process.php",
          type:"POST",
          data:{product_name:productname, payment_id:paymentid, product_amount:amount, first_name:first_name, last_name:last_name, email_id:email_id},
          success:function(finalresponse){
            if(finalresponse=='done'){
               // alert("done");
              window.location.href="success.php";
            }else{
              alert('Please check console.log to find error');
              console.log(finalresponse);
            }
          }
        })
      },
      "theme": {
          "color": "#3399cc"
      }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
  });
</script>
<script src="js/custom.js"></script>
<script>
  function redirectToDonationForm(btn) {
      // Retrieve data from the clicked div
      var titlee = btn.parentElement.getAttribute("data-titlee");
      var amount = btn.parentElement.getAttribute("data-amount");

      // Redirect to the donation form page with pre-filled values
      var urll = 'donationform.php?titlee=' + encodeURIComponent(titlee) + '&amount=' + encodeURIComponent(amount);
      window.open(urll, '_blank');
    }
</script>
   </body>
</html>