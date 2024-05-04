@extends('frontend.layout.app')
@section('title','Contact Us ')
@section('internalcssjs')
<style>
  .icon-box {
    /* margin-bottom: 30px; */
    width: 402px;
    height: 140px;
    box-sizing: border-box;
  }

  .error-message {
    color: red;
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
@endsection
@section('content')
<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ url('public/assets/images/bg/bg1.jpg') }}">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Contact Us</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3 class="line-bottom mt-0 mb-30">Please contact us for more information?</h3>
            <!-- Contact Form -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form id="contact_form" name="contact_form" class="" action="{{ url('savecontact') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <sup style="color:red">*</sup></label>
                    <input id="name" name="form_name" class="form-control" type="text" value="" placeholder="Enter Name" required>
                    <span class="error-message" id="nameError"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone <sup style="color:red">*</sup></label>
                    <input id="phone" name="form_phone" class="form-control" type="tel" value="" maxlength="10" pattern="[0-9]{10}" placeholder="Enter Phone" required="">
                    <span class="error-message" id="phoneError"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                 <div class="form-group">
                    <label>Email <sup style="color:red">*</sup></label>
                    <input id="email" name="form_email" class="form-control required email" value="" required type="email" placeholder="Enter Email">
                    <span class="error-message" id="emailError"></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea id="message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                <span class="error-message" id="messageError"></span>
              </div>
              <!-- <div class="form-group">
                <div class="col-lg-12 col-md-12 form-field">
                    <div class="g-recaptcha"
                    data-sitekey="6Lfran0nAAAAAKDyb5MXqVPhQAoThfe8bpGPDjtW">
                </div>
              </div> -->
              <div class="form-group">
                <!-- <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" name="send">Send your message</button> -->
                <input type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" value="Submit" name="submit">
                <!-- <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button> -->
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <div class="row">
              <h3 class="line-bottom mt-20 mb-20 ml-15">Our Location</h3>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box media bg-deep p-20 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Our Office Location</h5>
                    <p><b>Rajkot Mahajan Panjrapole</b><br>
                    <a href="https://maps.app.goo.gl/myGAK7QZaPiJkAQ18"> Bhavnagar Road, Nr. Aaji River Bank, Rajkot - 360003, Gujarat, India. </a></p>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="icon-box media bg-deep p-15 mb-20"> <a class="media-left pull-left flip" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                  <div class="media-body">
                    <h5 class="mt-0">Email Address</h5>
                    <p>
                      <a href="mailto:info@rajkotmahajanpanjarapole.org">info@rajkotmahajanpanjarapole.org
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d24444.547539406012!2d70.801705940023!3d22.300698344871897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b5ff3775048d%3A0xf0b80c5256ae6cad!2sRajkot%20Mahajan%20Panjrapole!5e0!3m2!1sen!2sin!4v1710183069485!5m2!1sen!2sin" width="auto" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
@endsection
@section('internaljs')
<script src="https://www.google.com/recaptcha/api.js" ></script>
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

  // Function to validate message
  $('#message').on('keyup', function() {
    if ($(this).val().trim() === '') {
      $(this).addClass('input-error').removeClass('input-valid');
      $('#messageError').text('Message is required');
    } else {
      $(this).addClass('input-valid').removeClass('input-error');
      $('#messageError').text('');
    }
  });

  // Form submission
  $('#contact_form').on('submit', function(event) {
    // Prevent form submission if any field is invalid
    if ($('.input-error').length > 0) {
      event.preventDefault();
      alert('Please fill all required fields correctly.');
    }
  });
});
</script>
@endsection