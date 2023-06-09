@extends('layouts.app')

@section('content')
<body>

 <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>

<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/gym-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">
            <h6> Track More, Achieve Financial Security</h6>
            <h2>easy with our <em>MoneyFit</em></h2>
            <div class="main-button scroll-to-section">
                <a href="{{ route('bills.create') }}">Manage Now </a>
            </div>
        </div>
    </div>
</div>

@include('division.about')
@include('division.section')
@include('division.classes')


<section class="section" id="developer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h1>Our<em> Developers</em></h1>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>Students from Naga City, Camarines Sur</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="assets/images/janra.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <span></span>
                        <h4>Jan Raphael Peoro</h4>
                        <p>BS-Information Technology </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="assets/images/toby.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <span></span>
                        <h4>Thomas Brandon Velarde</h4>
                        <p>BS-Information Technology 

                        </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                       
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="assets/images/missing.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <span></span>
                        <h4>Google</h4>
                        <p>BS-Information Technology </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
   
</footer>


<script src="assets/js/jquery-2.1.0.min.js"></script>


<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/mixitup.js"></script> 
<script src="assets/js/accordions.js"></script>


<script src="assets/js/custom.js"></script>

</body>
</body>

@endsection
