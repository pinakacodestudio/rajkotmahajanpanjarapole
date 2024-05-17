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
    <section class="content-inner" style="background-image: url(public/assets/images/background/bg7.jpg); background-size: cover; background-position: top center; background-repeat: no-repeat;">
        <div class="page-wraper" style="margin-top: 70px;height: auto;">

            <div class="col-xl-12 col-lg-12 m-b30 wow fadeInLeft">
                <div class="section-head style-1">
                    <h2 class="title">Login</h2>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4"></div>
                        @if(request()->get('url')!==null)
                        <input type="hidden" name='url' id='url' value="{{ request()->get('url') }}">
                        @endif
                        <input type="hidden" name='url' id='url'>
                        <div class="col-sm-4">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="la la-user"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                        <div class="form-group m-b-15">
                                <div class="g-recaptcha"
                                    data-sitekey="{{ config('app.GOOGLE_RECAPTCHA_KEY') }}">
                                </div>
                        </div>
                        </div>
                           
                        <div class="col-sm-4"></div>
                            <div class="col-sm-12" style="text-align: center;">
                                <a href="{{ url('registerdata'.'?url='.request()->get('url'))}}" class="btn btn-primary" style="margin-right: 150px;">New User</a>
                                <button name="submit" type="submit" value="Submit" class="btn btn-primary">Login<i class="fa fa-angle-right m-l10"></i></button>
                            </div>
                            <div class="col-sm-8" style="text-align: right; margin-top:20px;">
                                <a href="{{ url('password/reset') }}" style="text-align:right;">Forgot Password ! Click Here!</a>
                            </div>
                        </div>
                </form>
            </div>
            @include('frontend/layout/footer')
        </div>
    </section>
    @include('frontend.layout.footerjs')
    
<script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>