<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layout.head')
    <style>
        .pricingtable-wrapper.style-1 {
            padding: 35px 14px;
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<?= $page = "" ?>

<body id="bg">
    <div id="loading-area" class="loading-03"></div>
    @include('frontend/layout/header')
    <section class="content-inner" style="background-image: url(public/assets/images/background/bg7.jpg); background-size: cover; background-position: top center; background-repeat: no-repeat; padding-top:10px;">
        <div class="page-wraper" style="margin-top: 75px;height: auto;text-align: center;">
            <div class="col-xl-12 col-lg-12 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInLeft;">
                <div class="section-head style-1">
                    <h2 class="title">Register</h2>
                </div>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <input type="hidden" name='url' id='url' value="{{ request()->get('url') }}">
                        <div class="col-sm-6 col-md-6">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-building"></i></span>
                                </div>
                                {{-- <input name="text" type="text"  class="form-control" placeholder="Company Name *"> --}}
                                <input id="name" type="text" placeholder="Company Name *" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required oninvalid="this.setCustomValidity('Enter Your Company Name')" oninput="this.setCustomValidity('')" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>

                                <input id="email" type="email" placeholder="Email *" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required oninvalid="this.setCustomValidity('Enter Your Email Here')" oninput="this.setCustomValidity('')" >

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock "></i></span>
                                </div>
                                <input id="password" type="password" placeholder="Password *" class="form-control @error('password') is-invalid @enderror" name="password" required pattern="^\S{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 8 characters' : ''); if(this.checkValidity()) form.password-confirm.pattern = this.value;"  >

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock "></i></span>
                                </div>
                                <input id="password-confirm" type="password" placeholder="Confirm Password *" class="form-control" name="password_confirmation" required pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password' : '');">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6" style="text-align: left;">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-globe"></i></span>
                                </div>
                                <select class="form-control select2-single" name="countryid" id="country" style="width:100%;" required >
                                    <option value="">&emsp;&emsp;&emsp;&ensp;Select Country *</option>
                                    @foreach ($countries as $row)
                                    <option value="{{ $row->id }}">&emsp;&emsp;&emsp;&ensp;{{ $row->cname }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                </div>
                                <input name="contacts" type="tel" class="form-control" placeholder="Contacts">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-link"></i></span>
                                </div>
                                <input name="website" type="text" class="form-control" placeholder="Website">
                            </div>
                        </div>
                       
                        <div class="col-sm-6 col-md-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                                </div>
                                <input name="address" type="text" class="form-control" placeholder="Address" required>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="form-group m-b-15" style="text-align:justify;">
                                <input name="optin" type="checkbox" style="float:left; margin-top:5px; margin-right:10px;" required> By Using Caprus Digital, you are "Opting-In" to and give Consent to Receiving calls and messages, SMS Messages from Caprus Digital". 
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group m-b-15">
                                <div class="g-recaptcha" data-sitekey="{{ config('app.GOOGLE_RECAPTCHA_KEY') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" value="submit" class="btn btn-primary">Register<i class="fa fa-angle-right m-l10"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            @include('frontend/layout/footer')
        </div>
        <section>
            @include('frontend.layout.footerjs')
            
<script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>