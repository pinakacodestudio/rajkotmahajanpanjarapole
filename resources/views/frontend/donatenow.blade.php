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
         background-image: url("{{ url('public/assets/images/donateformcover.jpg') }}");
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

         
  .error-message {
    color: red;
    font-size:0.8rem;
  }
  .valid-message {
    color: green;
  }
  .input-error {
    border: 2px solid red;
  }
  .input-valid {
    border: 2px solid green;
  }
      </style>
      
   </head>
   <body>
      <div class="wrapper">
         <div class="form-left">
            <h2 class="text-uppercase text-justify">Dear Donor,</h2>
            <p class="text text-justify">
<span>Give, so others can live. Be part of a change in the world. Help today because tomorrow you may be the one who needs helping! Your change can change lives.            </span></p>
            <!-- <img src="images/donateform.jpg" class="img-fluid img1" alt=""> -->
            <p class="text text-justify">
               <span>Donations are exempted u/s 80G of the l.T. Act 1961 vide Approval No. AAATR2554AF20217 dated 19.10.2021. PAN Number of the Donor is required to claim deduction u/s 80G.</span>
            </p>
        
            <p class="text text-justify">
               <span>We also accept donations under CSR Scheme(corporate social responsibility). Our CSR Registration number is CSR00020480</span>
            </p>
            
            <p class="text text-justify text-uppercase">
               <span style="font-size:1.1rem; text-shadow: 1px 1px 4px white; color:red;">Pan number is compulsory to avail exemption under section 80G of Income Tax act</span>
            </p>
        
         </div>
         <form class="form-right" id="donate-form" method="post" action="{{ url('ccavRequestHandler') }}">
         @csrf
         <input type="hidden" name="language" value="EN"/>
         <input type="hidden" name="currency" value="INR"/>
         <input type="hidden" name="productid" value="{{ $id }}"/>
         <input type="hidden" name="redirect_url" value="{{ url('ccavResponseHandler') }}"/>
         <input type="hidden" name="cancel_url" value="{{ url('ccavResponseHandler') }}"/>
         <input type="hidden" name="merchant_id" value="{{ $merchantId }}"/>
         
         <h6 class="text-uppercase">Paying to </br><b>Rajkot Mahajan Panjrapole.</b></h6>
            <div class="row">
               <div class="col-sm-6 mb-3">
                  <label>Name</label>
                  <input type="text" name="billing_name" id="name" value="" placeholder="Enter Full Name" class="input-field">
                  <span class="error-message" id="nameError"></span>
               </div>
               <div class="col-sm-6 mb-3">
                  <label>Phone Number</label>
                  <input type="tel" name="billing_tel" id="phone" value="" placeholder="Enter a Phone No."  pattern="[0-9]{10}" required title="Please enter a 10-digit phone number" class="input-field">
                  <span class="error-message" id="phoneError"></span>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-6 mb-3">
                  <label>Your Email</label>
                  <input type="email" class="input-field" value="" placeholder="Enter Email Id" name="billing_email" id="email" required>
                  <span class="error-message" id="emailError"></span>
               </div>
               <div class="col-sm-6 mb-3">
                  <label>Pancard</label>
                  <input type="text" name="pancard_no" id="pancard" value="" placeholder="Enter Pancard No."  title="Please enter a Pancard number" class="input-field">
                  <span class="error-message" id="pancardError"></span>
               </div>
            </div>
            <div class="mb-3">
               <label>Donation For</label>
               <input type="readonly" disabled name="donationname" id="donationname" value="{{ $donation->optionvalue}}" placeholder="" class="input-field">
            </div>
            	<div class="row">
                  <div class="mb-3">
                        <label>Donation Amount</label>
                           <input <?php echo ($donation->amounttype == 0)? 'readonly' : '' ?> type="number" id="amount" name="amount" class="form-control input-number" value="{{ $donation->amount}}" min="250">
                           <span class="error-message" id="amountError"></span>
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
               <label class="option">I agree to the <a href="../policy">Terms and Conditions</a>
               <input type="checkbox" checked>
               <span class="checkmark"></span>
               </label>
               <span class="error-message" id="checkboxError"></span>
            </div>
            <input type="hidden" id="donate_id" value="{{ $donation->id }}" />
            <div class="form-field">
               <input type="submit" value="Donate Now" class="register" name="register">
            </div>
            <!-- <div class="form-field d-flex align-items-center justify-content-center">
               <p>Powered By</p>
            </div>
            <div class="form-field d-flex align-items-center justify-content-center">
               <img src="{{ url('public/assets/images/cashfreelogo.svg')" alt="">
            </div> -->
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

   //  $('.quantity-right-plus').click(function (e) {
   //      e.preventDefault();
   //      var quantity = parseInt($('#quantity').val());
   //      $('#quantity').val(Math.max(quantity + 1000, 500));
   //  });

   //  $('.quantity-left-minus').click(function (e) {
   //      e.preventDefault();
   //      var quantity = parseInt($('#quantity').val());
   //      if (quantity > 500) {
   //          $('#quantity').val(quantity - 1000);
   //      }
   //  });

});
    
});
      </script>

<script src="js/custom.js"></script>

<script>
$(document).ready(function() {
  // Function to validate name
  $('#name').on('keyup', function() {
    if ($(this).val().trim() === '') {
      $(this).addClass('input-error').removeClass('input-valid');
      $('#nameError').text('Name is required');
    } else {
      $(this).addClass('input-valid').removeClass('input-error');
      $('#nameError').text('');
    }
  });

  // Function to validate phone
  $('#phone').on('keyup', function() {
    const phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test($(this).val().trim())) {
      $(this).addClass('input-error').removeClass('input-valid');
      $('#phoneError').text('Invalid phone number');
    } else {
      $(this).addClass('input-valid').removeClass('input-error');
      $('#phoneError').text('');
    }
  });

  // Function to validate email
  $('#email').on('keyup', function() {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test($(this).val().trim())) {
      $(this).addClass('input-error').removeClass('input-valid');
      $('#emailError').text('Invalid email address');
    } else {
      $(this).addClass('input-valid').removeClass('input-error');
      $('#emailError').text('');
    }
  });

  // Function to validate email or Indian PAN card number
$('#pancard').on('keyup', function() {
  const value = $(this).val().trim();
  
  // If the value is blank, clear any existing error message and return
  if (value === '') {
    $(this).removeClass('input-error').removeClass('input-valid');
    $('#pancardError').text('');
    return;
  }

  // Regular expression for Indian PAN card number
  const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]$/;

  if (!panRegex.test(value)) {
    $(this).addClass('input-error').removeClass('input-valid');
    $('#pancardError').text('Invalid PAN card number');
  } else {
    $(this).addClass('input-valid').removeClass('input-error');
    $('#pancardError').text('');
  }
});

$('#amount').on('keyup', function() {
  const amount = parseFloat($(this).val().trim()); // Parse to a number

  if (isNaN(amount) || amount < 250) {
    $(this).addClass('input-error').removeClass('input-valid');
    $('#amountError').text('Invalid amount: Please enter a number greater than 250');
  } else {
    $(this).addClass('input-valid').removeClass('input-error');
    $('#amountError').text('');
  }
});

  // Form submission
  $('#donate-form').on('submit', function(event) {
    // Prevent form submission if any field is invalid
    if ($('.input-error').length > 0) {
      event.preventDefault();
      alert('Please fill all required fields correctly.');
    }
  });
});
</script>
   </body>
</html>