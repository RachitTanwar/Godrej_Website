<?php
if(isset($_REQUEST['send']))
{
         extract($_POST);
         $to = "mandeephttps@gmail.com";
         $subject = "Website Lead | Contact Details ! from GODREJ Sector 33 Sohna Gurugram";

         $message= "<b>Name: </b>".$name.'<br>';
         $message.= "<b>Mobile: </b>".$mobile.'<br>';
         $message.= "<b>User Email: </b>".$email.'<br>'; 
         $message.= "<b>Date : </b>".date('m-d-Y');

         $header = "From:rajeshkm@hotmail.com \r\n";       
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $retval = mail ($to,$subject,$message,$header);

         if( $retval == true )
         {
            echo '<script> alert("Message sent successfully..."); </script>';
         }
         else
         {
             echo '<script> alert("Coud Not Send sent Message..."); </script>';
         }
}
?>
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="assets/img/comman/favicon.ico" sizes="16x16">
<title>Booking Open #Serenity At Godrej Nature+ At Sector 33, Sohna, Gurugram</title>
<style>
:root {
--colorPrimary:#73B944;
--colorSecondary:#00865D;
--colorBtn:#ffffff
}
.main-slider-img {
	width:100%;
}
#loader {
	width:100vw;
	height:100vh;
	background-color:rgba(255, 255, 255, 1);
	position:fixed;
	top:0;
	left:0;
	z-index:1040
}
.loader-text {
	display:block;
	text-align:center;
	color:#d7d7d7;
	font-family:Arial, sans-serif;
	position:absolute;
	top:50%;
	left:50%;
	-webkit-transform:translate(-50%, -50%);
	-moz-transform:translate(-50%, -50%);
	-ms-transform:translate(-50%, -50%);
	-o-transform:translate(-50%, -50%);
	transform:translate(-50%, -50%)
}
.loading {
	height:0;
	width:0;
	padding:4vw;
border:.8vw solid #ccc;
	border-right-color:#888;
	border-radius:6vw;
	-webkit-animation:rotate 1s infinite linear
}
@keyframes loader {
0% {
filter:grayscale(0)
}
50% {
filter:grayscale(100%)
}
100% {
filter:grayscale(0)
}
}
.loader-logo {
	width:300px;
	-webkit-animation:loader 1.3s infinite linear;
	-moz-animation:loader 1.3s infinite linear;
	-ms-animation:loader 1.3s infinite linear;
	-o-animation:loader 1.3s infinite linear;
	animation:loader 1.3s infinite linear
}
.pload {
}
 @media only screen and (max-width: 492px) {
.main-slider-img {
width:100%;
height:250px;
}
}
</style>
<link rel="preload" href="assets/css/style.css" as="style">
<link rel="preload" href="assets/js/app.js" as="script">
<link rel="preload" href="assets/fonts/roboto-bold-webfont.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/roboto-regular-webfont.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/muli-variablefont_wght-webfont.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/micon.woff2" as="font" type="font/woff2" crossorigin>
<link rel="dns-prefetch" href="http://google-analytics.com/" crossorigin>
<link rel="dns-prefetch" href="http://googletagmanager.com/" crossorigin>
<link rel="dns-prefetch" href="http://www.googleadservices.com/" crossorigin>
<link rel="dns-prefetch" href="http://googleads.g.doubleclick.net/" crossorigin>
<link rel="dns-prefetch" href="http://zopim.com/" crossorigin>
<link rel="dns-prefetch" href="http://ipinfo.io/" crossorigin>
<link rel="dns-prefetch" href="http://cdn.jsdelivr.net/" crossorigin>
<link rel="stylesheet" href="assets/css/style.css">
<script src="assets/js/app.js" defer></script>
</head>
<body data-spy="scroll" data-target="#navbarNav">
<style> 
.more-cont{ display: none; } .more{ display: inline-block; color: #000; text-decoration: underline; } .bounceIn { -webkit-animation-duration: 0.75s; animation-duration: 0.75s; -webkit-animation-name: bounceIn; animation-name: bounceIn; } @media only screen and (min-width: 992px){ .info-box{ width: 24vw; top: 8px; left: 10px; background-color: #fff; color: #000; text-align: center; border-radius: 8px; padding: 0 10px; font-weight: 400; } .pro-status{ display: block; text-shadow: none; color: var(--colorPrimary); background-color: transparent; padding: .6vw 2.5vw .3vw 2vw; font-weight: 700; } .pro-title, .pro-add, .pro-dev, ul.pro-spec, .info-box span.heading, .pro-tag-line, .pro-price, .pro-rera{ text-shadow: none; color: #000; font-weight: 400; } .pro-title{ padding: .5vw .8vw .3vw; } .pro-title, .pro-add, .pro-price{ font-weight: 700; } ul.pro-spec{ background-color: transparent; margin-bottom: 0; } .info-box span.list-icon{ display: none; } .pro-rera{ font-size: .8vw; } } .offer{ display: block; padding: 8px; font-size: 13px; font-weight: 700; } .offer-top{ background: #76BC4E; border-radius: 8px 8px 0px 0px; } .offer-bottom{ background: #D6EBCA; border-radius: 0px 0px 8px 8px; } .offer-bg-animation{ color: #ffffff; display: block; background: linear-gradient(-45deg, #73B944, #00865D ,#73B944,#00865D); background-size: 400% 400%; -webkit-animation: Gradient 3s ease infinite; -moz-animation: Gradient 3s ease infinite; animation: Gradient 3s ease infinite; } 
</style>
<header class="micro-nav fixed-top pload">
  <nav class="navbar navbar-expand-lg navbar-light bg-white micro-navbar"> <a class="navbar-brand" href="#" onClick="return false"><img src="assets/img/comman/logo.png" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nav-fill">
        <li class="nav-item"><a class="nav-link" href="#home"><i class="mi mi-home nav-icon"></i><span class="d-sm-inline d-md-none"> Home</span></a></li>
        <li class="nav-item"><a class="nav-link" href="#pricing"><i class="mi mi-price nav-icon"></i> Price</a></li>
        <li class="nav-item"><a class="nav-link" href="#sitefloorplan"><i class="mi mi-siteplan nav-icon"></i> Site &amp; Floor Plan</a></li>
        <li class="nav-item"><a class="nav-link" href="#amenities"><i class="mi mi-ami nav-icon"></i> Amenities</a></li>
        <li class="nav-item"><a class="nav-link" href="#gallery"><i class="mi mi-gallery nav-icon"></i> Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#location"><i class="mi mi-location nav-icon"></i> Location</a></li>
        <li class="nav-item"><a class="nav-link" href="#sitevisit"><i class="mi mi-sitevisit nav-icon"></i> Virtual Site Tour</a></li>
        <li class="nav-item overflow-hidden"><a class="nav-link enqModal" href="#" data-form="md" data-title="Download brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="brochure" data-redirect-file="brochure.pdf" data-toggle="modal" data-target="#enqModal"><i class="mi mi-download nav-icon d-inline-block animated slideInDown infinite"></i> Brochure</a></li>
      </ul>
    </div>
  </nav>
</header>
<main class="pload">
<img src="assets/img/webp/b1-1400w.webp" class="main-slider-img home" data-title="home">
<div class="info-box overflow-hidden"> <span class="pro-status">Booking Open</span> <span class="pro-title">#Serenity At Godrej Nature+</span> <span class="pro-add">At Sector 33, Sohna, Gurugram</span> <span class="pro-dev">by Godrej Properties</span> <span class="d-block mt-1 text-capitalize bold mb-1" style="background: var(--colorPrimary);padding: 5px; font-weight: bold;">
  <center>
    <span class=" d-block text-center" style="animation-duration: 3s; color:#fff;border:dashed;"> 1% Corporate Discount<br>
    Instant Cashback Upto ₹ 7.5 Lacs*<br>
    ₹ 1 Lac Instant Payment Discount<br>
    10% Booking Amount<br>
    EMI ₹ 7999 Per Month<br>
    King Size Bedrooms</span>
  </center>
  </span> <span class="pro-tag-line">Premium 2, 3 & 3 BHK+Utility Starts</span> <span class="pro-price"><i class="mi mi-rs-light info-icon"></i>93 Lacs* <small>Onwards</small></span>
  <button class="btn btn-info micro-form-btn enqModal effetMoveGradient effectScale" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">Enquire Now</button>
  <span class="pro-rera"><span class="heading">RERA No</span> : RC/REP/HARERA/GGM/2018/18</span> </div>

<div class="mob-form d-sm-block d-md-none d-lg-none"> <span class="d-block form-heading font-weight-bold">Pre-Register here for Best Offers</span>
  <form name="callback" method="post" action="">
    <div class="form-section3 left"> <i class="icon-user"></i>
      <input name="name" type="text" placeholder="Your Name" class="inputxt" required>
    </div>
    <div class="form-section3 left"><i class="icon-call"></i>
      <input name="mobile" type="tel"  placeholder="Mobile No" class="inputxt" required>
    </div>
    <div class="form-section3 left"><i class="icon-atherate"></i>
      <input name="email" type="email" class="inputxt" placeholder="Email ID" required>
      <input name="project" id="project" type="hidden" value="Godrej Nature+ At Sector 33, Sohna, Gurugram">
    </div>
    <div class="form-section3 left">
      <input type="submit" value="Submit" name="send" class="btn-submit">
    </div>
  </form>
  <h6 class="animated bounceIn infinite mt-2" style="animation-duration: 3s;"><span class="form-last-heading lazyloaded" style="padding: 10px;background: #e8e8e8;" data-expand="-1"><img class=" lazyloaded" data-src="assets/img/extra/ola.png" style="width: 50px;" src="assets/img/extra/ola.png"> Free cab facility for site visit</span></h6>
</div>
<div class="body-content">  
<section class="section shadow-sm lazyload" id="overview"> <span class="head text-capitalize d-none d-md-block">Overview</span> <span class="d-block section-heading color-primary text-capitalize">#Serenity At Godrej Nature+</span> <span class="d-block section-heading-sub color-primary text-capitalize">At Sector 33, Sohna, Gurugram</span>
  <p>Presenting a one-of-its-kind home that takes care of you. A home that has been thoughtfully planned keeping in mind the all-round wellbeing of your family. A habitat where you can live carefree, as - right from your everyday needs, to your fitness goals - everything is taken care of. An environment that gives you more avenues to live a happier, healthier life. A space where your health and wellbeing comes first. A home where you come first. Welcome to the health landmark that is Nature Plus.</p>
  <button class="btn btn-sm btn-outline-info sectio-bro-btn overflow-hidden enqModal" data-form="md" data-title="Download brochure" data-btn="Download now" data-enquiry="Ebook Download" data-redirect="brochure" data-redirect-file="brochure.pdf" data-toggle="modal" data-target="#enqModal"><span class="d-inline-block mi mi-download mr-1 animated slideInDown infinite"></span> Download Brochure</button>
  <style>
.fsmall{font-size: 11px !important; font-weight: bold;} .feature-row{ display: grid; grid-template-columns: repeat(5, 1fr); grid-row-gap: 10px; grid-column-gap: 10px; } .feature-row img{ width: auto; height: auto; display: inline-block; margin: 15px auto; } .feature-row div{ border-radius: 3px; overflow: hidden; background-color: #003A2C; color: #ffffff; font-weight: bold; } .feature-row span{ display: block; text-align: center; font-size: 14px; } @media only screen and (max-width: 992px){ .feature-row{ grid-template-columns: repeat(2, 1fr); grid-row-gap: 2px; grid-column-gap: 2px; } .feature-row .m-spl{ grid-row: 2/ 2; grid-column: 1 / -1; } } 
</style>
  <h3 class="text-uppercase font-weight-bold d-block text-center color-primary mt-4">Highlight</h3>
  <div class="feature-row">
    <div class="m-spl lazyloaded" data-expand="-1"> <img data-src="assets/img/extra/a1.jpg" class="d-block ls-is-cached lazyloaded" src="assets/img/extra/a1.jpg"> <span class="text-uppercase py-1 fsmall">approx. 800 + trees*</span> </div>
    <div data-expand="-1" class=" lazyloaded"> <img data-src="assets/img/extra/a2.jpg" class="d-block lazyloaded" src="assets/img/extra/a2.jpg"> <span class="text-uppercase py-1 fsmall">CTMA3 Technology*</span> </div>
    <div data-expand="-1" class=" lazyloaded"> <img data-src="assets/img/extra/a3.jpg" class="d-block lazyloaded" src="assets/img/extra/a3.jpg"> <span class="text-uppercase py-1 fsmall">Over 2 hectares of Central Health Park</span> </div>
    <div data-expand="-1" class=" lazyloaded"> <img data-src="assets/img/extra/a4.jpg" class="d-block lazyloaded" src="assets/img/extra/a4.jpg"> <span class="text-uppercase py-1 fsmall">40+ Wellness Activities</span> </div>
    <div data-expand="-1" class=" lazyloaded"> <img data-src="assets/img/extra/a5.jpg" class="d-block lazyloaded" src="assets/img/extra/a5.jpg"> <span class="text-uppercase py-1 fsmall">State-of-the art Clubhouse</span> </div>
  </div>
</section>

<section class="section shadow-sm lazyload price"> <span class="section-link" id="pricing"></span> <span class="head text-capitalize">Price</span>
  <div class="row">
    <div class="col-md-8">
      <table class="table table-striped table-borderless border micro-price-table table-pricing">
        <thead>
          <tr>
            <th scope="col" class="border border-bottom-0 mb-w">Type</th>
            <th scope="col" class="border border-bottom-0 mb-w">Carpet Area</th>
            <th scope="col" class="border border-bottom-0 border-right-0">Price</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-left-0 border-top-0 border-bottom-0 price-type">2 BHK</td>
            <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">770 - 810 Sq. Ft <small class="d-inline-block d-md-none">(Carpet Area)</small></td>
            <td class="price-amt"><i class="mi mi-rs-light"></i> 93 Lacs* <small>Onwards</small></td>
            <td><button class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="lg" data-title="Send me costing details" data-btn="Send now" data-enquiry="Request Price" data-redirect="floorplan" data-toggle="modal" data-target="#enqModal">Price Breakup</button></td>
          </tr>
          <tr>
            <td class="border border-left-0 border-top-0 border-bottom-0 price-type">3 BHK</td>
            <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">947 - 968 Sq. Ft <small class="d-inline-block d-md-none">(Carpet Area)</small></td>
            <td class="price-amt"><i class="mi mi-rs-light"></i> 1.19 Cr* Onwards</td>
            <td><button class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="lg" data-title="Send me costing details" data-btn="Send now" data-enquiry="Request Price" data-redirect="floorplan" data-toggle="modal" data-target="#enqModal">Price Breakup</button></td>
          </tr>
          <tr>
            <td class="border border-left-0 border-top-0 border-bottom-0 price-type">3 BHK + Utility</td>
            <td class="border border-left-0 border-top-0 border-bottom-0 price-carpet">1162 Sq. Ft <small class="d-inline-block d-md-none">(Carpet Area)</small></td>
            <td class="price-amt"><i class="mi mi-rs-light"></i> 1.48 Cr* Onwards</td>
            <td><button class="btn btn-sm btn-info effetGradient effectScale enqModal" data-form="lg" data-title="Send me costing details" data-btn="Send now" data-enquiry="Request Price" data-redirect="floorplan" data-toggle="modal" data-target="#enqModal">Price Breakup</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-4"> <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me costing details" data-btn="Send now" data-enquiry="Costing Details" data-toggle="modal" data-target="#enqModal">
      <div class="at-property-item shadow-sm border border-grey mt-1">
        <div class="at-property-img">
          <picture>
            <source class="lazyload w-100" data-srcset="assets/img/comman/sample/costing-details-320w.webp" type="image/webp">
            <img data-sizes="auto" class="lazyload w-100" data-srcset="assets/img/comman/sample/costing-details-320w.jpg"> </picture>
          <div class="at-property-overlayer"></div>
          <span class="btn btn-default at-property-btn">Enquire Now</span> </div>
        <div class="at-property-dis effetGradient">
          <h5>Complete Costing Details</h5>
        </div>
      </div>
      </a> </div>
  </div>
</section>
<section class="section shadow-sm lazyload master-plan1" data-script="./assets/plugins/fancybox/jquery.fancybox.min.js" data-link="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"> <span class="section-link" id="sitefloorplan"></span> <span class="head text-capitalize">Site &amp; Floor Plan</span> <span class="d-block section-heading-sub text-capitalize">Master Plan</span> <a data-fancybox="masterplan" href="assets/img/mp.jpg" data-srcset="assets/img/mp-768w.jpg?1652709052 800w,assets/img/mp-1400w.jpg?1652709052">
  <div class="at-property-item mt-1">
    <div class="at-property-img master-plan text-center">
      <picture>
        <source class="lazyload shadow-sm border border-grey" data-srcset="assets/img/webp/mp-320w.webp" type="image/webp">
        <img data-sizes="auto" class="lazyload shadow-sm border border-grey" data-srcset="assets/img/mp-320w.jpg"> </picture>
      <div class="at-property-overlayer"></div>
      <span class="at-property-btn">View Master Plan</span> </div>
  </div>
  </a> <span class="d-block section-heading-sub text-capitalize ">Floor Plan</span>
  <div class="row row-cols-1 row-cols-md-3">
    <div class="col"> <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
      <div class="at-property-item shadow-sm border border-grey mt-1">
        <div class="at-property-img">
          <picture>
            <source class="lazyload floor-plan-img blur" data-srcset="assets/img/webp/2bhk-320w.webp" type="image/webp">
            <img data-sizes="auto" class="lazyload floor-plan-img blur" data-srcset="assets/img/2bhk-320w.jpg"> </picture>
          <div class="at-property-overlayer"></div>
          <span class="btn btn-default at-property-btn" role="button">Enquire Now</span> </div>
        <div class="at-property-dis effetGradient">
          <h5>2 BHK</h5>
        </div>
      </div>
      </a> </div>
    <div class="col"> <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
      <div class="at-property-item shadow-sm border border-grey mt-1">
        <div class="at-property-img">
          <picture>
            <source class="lazyload floor-plan-img blur" data-srcset="assets/img/webp/3bhk-320w.webp" type="image/webp">
            <img data-sizes="auto" class="lazyload floor-plan-img blur" data-srcset="assets/img/3bhk-320w.jpg"> </picture>
          <div class="at-property-overlayer"></div>
          <span class="btn btn-default at-property-btn" role="button">Enquire Now</span> </div>
        <div class="at-property-dis effetGradient">
          <h5>3 BHK</h5>
        </div>
      </div>
      </a> </div>
    <div class="col"> <a href="#" class="text-decoration-none enqModal" data-form="lg" data-title="Send me plan details" data-btn="Send now" data-enquiry="Floor Plan" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal">
      <div class="at-property-item shadow-sm border border-grey mt-1">
        <div class="at-property-img">
          <picture>
            <source class="lazyload floor-plan-img blur" data-srcset="assets/img/webp/3bhk-320w.webp" type="image/webp">
            <img data-sizes="auto" class="lazyload floor-plan-img blur" data-srcset="assets/img/3bhk-320w.jpg"> </picture>
          <div class="at-property-overlayer"></div>
          <span class="btn btn-default at-property-btn" role="button">Enquire Now</span> </div>
        <div class="at-property-dis effetGradient">
          <h5>3 BHK + Utility</h5>
        </div>
      </div>
      </a> </div>
  </div>
</section>
<section class="section shadow-sm lazyload amenities-container"> <span class="section-link" id="amenities"></span> <span class="head text-capitalize">Amenities</span>
  <div id="ami-3" class="ami-3 owl-carousel owl-theme">
    <div class="item-wrp">
      <div> <img data-src="./assets/img/amenities/landscape.svg?1652709052" class="lazyload">
        <p>Herbs Garden</p>
      </div>
      <div> <img data-src="./assets/img/amenities/nature.svg?1652709052" class="lazyload">
        <p>Fragrance Garden</p>
      </div>
      <div> <img data-src="./assets/img/amenities/chess.svg?1652709052" class="lazyload">
        <p>Live Chess</p>
      </div>
    </div>
    <div class="item-wrp">
      <div> <img data-src="./assets/img/amenities/chess.svg?1652709052" class="lazyload">
        <p>Jogging</p>
      </div>
      <div> <img data-src="./assets/img/amenities/basketball-court.svg?1652709052" class="lazyload">
        <p>10+ Sports Arenas</p>
      </div>
      <div> <img data-src="./assets/img/amenities/track-bicycle.svg?1652709052" class="lazyload">
        <p>Cycling Track</p>
      </div>
    </div>
    <div class="item-wrp">
      <div> <img data-src="./assets/img/amenities/party-deck.svg?1652709052" class="lazyload">
        <p>Celebration Lawn</p>
      </div>
      <div> <img data-src="./assets/img/amenities/amp.svg?1652709052" class="lazyload">
        <p>Amphitheatre</p>
      </div>
    </div>
  </div>
</section>
<section class="section shadow-sm lazyload gallery"> <span class="section-link" id="gallery"></span> <span class="head text-capitalize">Gallery</span>
  <ul class="nav nav-pills mb-3" id="pills-tabgal" role="tablist">
    <li class="nav-item"> <a class="nav-link text-uppercase ami-tab" id="pills-gal-0" data-toggle="pill" href="#gal-0" role="tab" aria-controls="gal-0" aria-selected="true">External </a> </li>
    <li class="nav-item"> <a class="nav-link text-uppercase ami-tab" id="pills-gal-1" data-toggle="pill" href="#gal-1" role="tab" aria-controls="gal-1" aria-selected="true">Internal </a> </li>
  </ul>
  <div class="tab-content" id="pills-tabgalContent">
    <div class="tab-pane fade" id="gal-0" role="tabpanel" aria-labelledby="pills-gal-0">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2"> <a data-fancybox="gallery-0" href="assets/img/E1.jpg"> <img data-src="./assets/img/E1-320w.jpg" class="lazyload gallery-thumb"> </a> </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2"> <a data-fancybox="gallery-0" href="assets/img/E2.jpg"> <img data-src="./assets/img/E2-320w.jpg" class="lazyload gallery-thumb"> </a> </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2"> <a data-fancybox="gallery-0" href="assets/img/E3.jpg"> <img data-src="./assets/img/E3-320w.jpg" class="lazyload gallery-thumb"> </a> </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2"> <a data-fancybox="gallery-0" href="assets/img/E4.jpg"> <img data-src="./assets/img/E4-320w.jpg" class="lazyload gallery-thumb"> </a> </div>
      </div>
    </div>
    <div class="tab-pane fade" id="gal-1" role="tabpanel" aria-labelledby="pills-gal-1">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2"> <a data-fancybox="gallery-1" href="assets/img/I1.jpg"> <img data-src="./assets/img/I1-320w.jpg" class="lazyload gallery-thumb"> </a> </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2"> <a data-fancybox="gallery-1" href="assets/img/I2.jpg"> <img data-src="./assets/img/I2-320w.jpg" class="lazyload gallery-thumb"> </a> </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2"> <a data-fancybox="gallery-1" href="assets/img/I3.jpg"> <img data-src="./assets/img/I3-320w.jpg" class="lazyload gallery-thumb"> </a> </div>
      </div>
    </div>
  </div>
</section>
<section class="section shadow-sm lazyload location-container" data-script="./assets/plugins/fancybox/jquery.fancybox.min.js" data-link="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
<span class="section-link" id="location"></span> <span class="head text-capitalize">Location</span>
<div class="row mb-3">
  <div class="col-md-7 col-sm-12"> <span class="d-block section-heading-sub text-capitalize">Map View</span>
    <iframe frameborder="0" class="lazyload lmap mb-2" allowfullscreen="" sandbox="allow-scripts allow-same-origin" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3513.6264410589833!2d77.0651275150747!3d28.279341882558498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d228dfcd71783%3A0xd578d07570be159f!2sGodrej%20Nature%20Plus%2C%20Gurgaon!5e0!3m2!1sen!2sin!4v1650603164736!5m2!1sen!2sin" style=""></iframe>
  </div>
  <div class="col-md-5 col-sm-12 lmap-div text-center"> <span class="d-block section-heading-sub text-capitalize text-center">Location Map</span> <a data-fancybox="location-map" href="assets/img/lp.jpg" data-srcset="assets/img/lp-768w.jpg?1652709052 800w,assets/img/lp-1400w.jpg?1652709052">
    <div class="at-property-item mb-2">
      <div class="at-property-img master-plan">
        <picture>
          <source class="lazyload shadow-sm border border-grey" data-srcset="assets/img/webp/lp-320w.webp" style=" " type="image/webp">
          <img data-sizes="auto" class="lazyload shadow-sm border border-grey" data-srcset="assets/img/lp-320w.jpg" style=" "> </picture>
        <div class="at-property-overlayer"></div>
        <span class="at-property-btn">View Location Map</span> </div>
    </div>
    </a> </div>
</div>
<p></p>
<ul class="nav nav-pills mt-4 mb-3" id="pills-tabconn" role="tablist">
  <li class="nav-item loc-tab-link"> <a class="nav-link text-uppercase ami-tab" id="pills-loc-0" data-toggle="pill" href="#loc-0" role="tab" aria-controls="loc-0" aria-selected="true">Schools and Colleges</a> </li>
  <li class="nav-item loc-tab-link"> <a class="nav-link text-uppercase ami-tab" id="pills-loc-1" data-toggle="pill" href="#loc-1" role="tab" aria-controls="loc-1" aria-selected="true">HEALTHCARE INFRASTRUCTRE</a> </li>
  <li class="nav-item loc-tab-link"> <a class="nav-link text-uppercase ami-tab" id="pills-loc-2" data-toggle="pill" href="#loc-2" role="tab" aria-controls="loc-2" aria-selected="true">Hotels</a> </li>
  <li class="nav-item loc-tab-link"> <a class="nav-link text-uppercase ami-tab" id="pills-loc-3" data-toggle="pill" href="#loc-3" role="tab" aria-controls="loc-3" aria-selected="true">Banks</a> </li>
  <li class="nav-item loc-tab-link"> <a class="nav-link text-uppercase ami-tab" id="pills-loc-4" data-toggle="pill" href="#loc-4" role="tab" aria-controls="loc-4" aria-selected="true">Malls</a> </li>
  <li class="nav-item loc-tab-link"> <a class="nav-link text-uppercase ami-tab" id="pills-loc-5" data-toggle="pill" href="#loc-5" role="tab" aria-controls="loc-5" aria-selected="true">Corporate Parks</a> </li>
</ul>
<div class="tab-content" id="pills-tabconnContent">
<div class="tab-pane fade" id="loc-0" role="tabpanel" aria-labelledby="pills-loc-0">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> GD Goenka World School, Sohna</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Pathways World School</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Ryan International School, Sohna Road</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> DPS Maruti Kunj, Gurgaon</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> KIIT College of Engineering, Bhondsi, Gurugram</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> KR Mangalam University</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> MDI Gurgaon, Sector 17 , Gurugram</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Ansal University, Sector 55 , Gurugram</div>
  </div>
</div>
<div class="tab-pane fade" id="loc-1" role="tabpanel" aria-labelledby="pills-loc-1">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Medanta Medicity</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Artemis Hospital</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Max Hospital</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Fortis Hospital</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Park Hospital</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Sanjeevani Hospital</div>
  </div>
</div>
<div class="tab-pane fade" id="loc-2" role="tabpanel" aria-labelledby="pills-loc-2">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Lemon Tree</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Taj Gateway</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Country Inn</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Fortune Select Excalibur</div>
  </div>
</div>
<div class="tab-pane fade" id="loc-3" role="tabpanel" aria-labelledby="pills-loc-3">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> ICICI Bank</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Union Bank</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> State Bank of India</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Allahabad Bank</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> HDFC Bank</div>
  </div>
</div>
<div class="tab-pane fade" id="loc-4" role="tabpanel" aria-labelledby="pills-loc-4">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Omaxe Mall, Sector 48, Gurugram</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Raheja Mall, Sector 47 , Gurugram</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Airia Mall, Secor 68, Gurugram</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> WorldMark Mall, Sector 65 , Gurugam</div>
  </div>
</div>
<div class="tab-pane fade" id="loc-5" role="tabpanel" aria-labelledby="pills-loc-5">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Sohna Road Commercial Belt</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> IMT Sohna</div>
    <div class="col my-2"><i class="mi mi-loc-list-2 color-primary loc-icon"></i> Unitech Business Park, Sector 41 , Gurugram</div>
  </div>
</div>
</section>
<section class="section shadow-sm lazyload"> <span class="section-link" id="sitevisit"></span> <span class="head text-capitalize">Virtual Site Tour</span> <a href="#" class="enqModal" data-form="lg" data-title="Virtual Site Visit" data-btn="Start Tour" data-enquiry="Virtual Site Tour" data-redirect="virtualtour" data-toggle="modal" data-target="#enqModal">
  <div class="at-property-item my-2 pt-md-0">
    <div class="at-property-img vsv-img">
      <picture>
        <source class="lazyload w-100" media="(max-width: 750px)" data-srcset="assets/img/webp/b1-768w.webp" type="image/webp">
        <source class="lazyload w-100" media="(min-width: 751px)" data-srcset="assets/img/webp/b1-1400w.webp" type="image/webp">
        <img data-sizes="auto" class="lazyload w-100" data-srcset="assets/img/b1-768w.jpg 750w,assets/img/b1-1400w.jpg"> </picture>
      <div class="vsv-text-bk">
        <div class="vsv-text-bg">
          <div class="vsv-icon lazyload"></div>
          <span class="text-uppercase h1 font-weight-bold mb-0 d-none d-lg-block">Virtual Tour</span> <span class="text-capitalize text-center d-none d-lg-block">#Serenity At Godrej Nature+ At Sector 33, Sohna, Gurugram</span> </div>
      </div>
    </div>
    <span class="d-block text-capitalize text-center d-sm-block d-md-none pt-2">#Serenity At Godrej Nature+ At Sector 33, Sohna, Gurugram</span> </div>
  </a> </section>
<section class="section shadow-sm lazyload" id="developer">
  <div class="d-block pt-2 pb-1 text-center"> </div>
  <span class="d-block section-heading-sub text-capitalize">About Godrej Properties</span>
  <p>The Godrej Group comprises a varied business portfolio that includes real estate development, fast moving consumer goods, advanced engineering, home appliances, furniture, security, and agri-care. While a large number of our businesses are privately held, the combined market cap of our publicly listed entities is in excess of USD 15 billion. Ranked as the 2nd most trusted Indian brand, with an annual revenue of USD 5 billion, and an estimated 1.1 billion customers across the world that use one or another Godrej product every day, the Godrej Group is amongst India's most diversified and trusted conglomerates.</p>
</section>
</div>
<ul class="mob-action nav nav-fill d-sm-block d-lg-none">
  <li class="nav-item" onClick="javascript:location.href='tel:+91-9711333388'"><span class="mi mi-call action-icon"></span> Call</li>
  <li class="nav-item enqModal" data-form="lg" data-title="Mail me pricing details" data-btn="Send now" data-enquiry="Enquire Now" data-redirect="enquiry" data-toggle="modal" data-target="#enqModal"><span class="mi mi-enquire action-icon"></span> Enquire</li>
  <li class="nav-item" onClick="window.open('https://api.whatsapp.com/send?phone=+91-9711333388&text=Hi!%20I\'m%20Interested%20In%20#Serenity%20At%20Godrej%20%20Nature+%20At%20Sector%2033,%20Sohna,%20Gurugram.%20Please%20Share%20Details.', '_blank');"><span class="mi mi-whatsapp action-icon"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span> WhatsApp</li>
</ul>
<div class="modal fade" id="enqModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered enq-modal" role="document">
    <div class="modal-content">
      <div class="modal-body text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <div class="modal-head d-none"><span class="modal-title">Title</span></div>
        <div class="d-flex">
          <div class="flex-fill align-self-center flex-shrink-1 modal-highlight-bg d-none d-lg-block"> <span class="modal-highlight-title">We Promise</span>
            <ul class="modal-highlight">
              <li><i class="mi mi-support-call"></i><span>Instant Call Back</span></li>
              <li><i class="mi mi-support-visit"></i><span>Free Site Visit</span></li>
              <li><i class="mi mi-support-price"></i><span>Unmatched Price</span></li>
            </ul>
          </div>
          <div class="flex-fill align-self-center"> <img src="assets/img/comman/logo.png" class="modal-logo"> <span class="modal-title-secondary">Register here and Avail the <span class="text-danger">Best Offers!!</span></span>
            <form name="callback" method="post" action="">
              <div class="form-group">
                <input type="text" name="name" pattern="[a-zA-Z ]+" class="form-control rounded-0 micro-form-field" required placeholder="Name">
              </div>
              <div class="form-group">
                 
                <input type="tel" id="intTelInput-popup" pattern="[0-9]+" name="mobile" class="intTelInput form-control rounded-0 micro-form-field" required placeholder="Mobile No">
              </div>
              <div class="form-group form-md">
                <input type="email" name="email" class="form-control rounded-0 micro-form-field" required placeholder="E-Mail Address">
              </div>
              <div class="form-group form-lg d-none">
                <textarea name="comment" col="5" class="form-control rounded-0 micro-form-field" placeholder="Comment"></textarea>
              </div>
               <input type="submit" value="Get Instant Call Back" name="send" class="btn btn-info micro-form-btn effetGradient effectScale">
              
            </form>
          </div>
        </div>
        <a href="tel:+91-9711333388" class="modal-call-btn"><i class="mi mi-call"></i> +91-9711333388</a> </div>
    </div>
  </div>
</div>
</main>
<footer class="disclaimer pload"><b>Disclaimer :</b> The website belongs to authorized channel partner Godrej Properties - <b><a href='#' data-toggle='tooltip' title='RERA: RC/REA/HARERA/GGM/2018/397'>PRPL</a></b>. The content is for information purposes only and does not constitute an offer to avail of any service. Prices mentioned are subject to change without notice and properties mentioned are subject to availability. Images for representation purposes only. All Rights Reserved.</footer>
<script>document.addEventListener("DOMContentLoaded", function(event){document.getElementById("loader").remove();document.querySelector('header').classList.remove('pload');document.querySelector('main').classList.remove('pload');document.querySelector('footer').classList.remove('pload')});var sitePrimaryColor='#73B944';</script>
</body>
</html>