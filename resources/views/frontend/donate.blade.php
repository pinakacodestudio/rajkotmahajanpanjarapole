@extends('frontend.layout.app')
@section('title','Donate Us ')
@section('internalcssjs')
<style>
.icon-box {
  margin-bottom: 30px;
  width: auto;
  height: 252px;
  box-sizing: border-box;
}
h3{
  margin-top: 0px;
  margin-bottom: 0px;
}
p{
  margin: 0px;
}
.donation-box{
    margin-bottom:70px;
}
.donation-box p{
    text-align:center;
    line-height: 1.2em; /* Adjust line height as needed */
    min-height: calc(1.2em * 3); /* Height for three lines */
}
</style>
@endsection
@section('content')
   <!-- Section: inner-header -->
  <!-- <div class="container-fluid"> -->
  <img src="{{ url('public/assets/images/donation-main-banner.jpg') }}" alt="Donation">
  <!-- </div> -->
    

<section>
  <div class="container">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-12">
        <h3 class="text-uppercase text-center font-28">
          The Historic Glory of <span class="text-theme-colored">Donation</span>
          </h3>
            <p class="lead text-center">
            In every religion nonviolence is given a prime place. It is the holy duty of human being to keep sympathy towards miserable persons and animals.
            </p>
            <p class="lead text-center">
            Each and every houses, holy & sacred good, beneficious deeds are being done on every month on Ekadashi, Punam, Days of Shraddha, Amas, besides Paryushan Mahaparva, holy days in the month of Shravan, Navratri (nine days of Ashvin Month) Dashera, Diwali etc. in holydays & festivals; it is best thinking to help unprotected and dumb animals.
            </p>
            <p class="lead text-center">
            Besides on birth day of family members, marriage anniversary, holy events and other events to cool down the heart of dumb animals, we should stream up the donation.
            </p>
        </div>
      </div>
    </div>
    <div class="section-content text-center">
      <div class="row">
        @php
            foreach($donationlist as $post){
        @endphp
        <div class="col-xs-12 col-sm-12 col-md-4 donation-box">
          <div class="icon-box iconbox-theme-colored pl-0 pr-0" data-titlee="Feed 100 cows" data-amount="2500">
            <a href="{{ url('donatenow/'.$post->urlpath) }}" class="">
              <img src="{{ url('public/assets/images/flaticon-png/small/cow3.png') }}" width="90" alt="">
            </a>
            <h3 class="mt-10 mb-05 font-weight-600">
              <a href="{{ url('donatenow/'.$post->urlpath) }}">
                <span class="text-theme-colored">{{ $post->title }}</span>
              </a>
            </h3>
            <p>
            {{ $post->description }}
            </p><br>
            <h3 class="text-gray">Rs. <span class="text-theme-colored">{{ $post->amount }}</span></h3>
            <a class="btn btn-default btn-theme-colored btn-sm mt-10" target="_blank" href="{{ url('donatenow/'.$post->urlpath) }}">Donate Now</a>
          </div>
        </div>
        
        @php
            }
        @endphp
       
    </div>
  </div>
</section> 

@endsection
@section('internaljs')

@endsection