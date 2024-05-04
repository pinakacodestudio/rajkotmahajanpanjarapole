<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include('frontend/layout/head')
    @yield('internalcssjs')
</head>

<body id="bg">
<div id="wrapper" class="clearfix">
    @include('frontend/layout/header')
    <!-- Start main-content -->
    <div class="main-content">
        @yield('content')
        @include('frontend/layout/footer')
    </div>
</div>
@include('frontend/layout/footerjs')
@yield('internaljs')
</body>
</html>

