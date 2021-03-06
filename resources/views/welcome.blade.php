@extends('layouts.app')

@section('content')
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.css"></head>
<div class="welcome-area pt-120" style="background:#000">
    <div class="container">
        <div class="row align-items-center" style="background-image:url('img/bgg.png');background-position:center;">
            <!-- Welcome Content -->
            <div class="col-12 col-sm-10 col-md-6">
                <div class="welcome-content mb-5 mb-md-0" data-aos="fade-up" data-aos-duration="800">
                    <h2 style="font-family:bodoni;font-style:italic;" ><span id="nft"> NFT  Can Sell , Buy and Explore And <span style="color:#DC6A2A;">Exceptional </span></h2>
                    <p class="mb-4"  >Projects like Dastardly Ducks prove that the  &amp;  NFT community can come together to support each other in the most challenging  &nbsp; </p>
                    <!-- <div class="hero-btn-group"><a class="btn btn-warning rounded-pill mt-3 me-1" href="{{route('collection')}}">Discover <i class="ms-2 bi bi-arrow-right"></i></a> -->
                    <a href="{{route('collection')}}" class="tf-button-st2 btn-effect" data-toggle="" ><span class="effect">Discover </span></a>
                    <!-- <a class="btn btn-minimal hover-primary mt-3" href="collections.html"><i class="me-2 bi bi-grid-3x3-gap"></i>All Collections</a> -->

                </div>
            </div>
            <!-- Welcome Thumb -->
            <div class="col-12 col-sm-9 col-md-6 newresp" >
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                            @foreach($sponnfts as $key => $nft)
                            <div class="carousel-item {{($key == 0)? 'active' : ''}}">
                        <div class="col-12 col-sm-8 col-lg-8 col-xl-8 aos-init aos-animate " style="float:right;"  data-aos="flip-right" data-aos-duration="800">
                <!-- Featured Card -->
                <div class="nft-card card border-0" style="box-shadow:5px 20px 30px black;">
                    <a href="{{route('item-details',$nft->id)}}"></a><div class="card-body" style="margin-top:-1px;"> <a href="{{route('item-details',$nft->id)}}">
                        <div class="img-wrap"><img src="{{$nft->file_path}}" style="width:99%" class="img-fluid" alt="">

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white; "><i class="bi bi-clock " style="color: white;"></i>&nbsp; {{$nft->pre_sale_date}}</span>
                            </div>
                        </div>
                        <!-- Others Info -->
                        <div class="align-items-center gx-0 row" style="background: #1F1F1F !important;height: 52px;">
                             <div class="col-8"><span class="d-block fz-15" style="color: white; margin-left:1pc;"><img src="img/icon-images/{{$nft->blockchain}}.png" width="14%" class="mb-1 me-1">{{$nft->pre_sale_price}}</span></div>
                            <div class="col-4">
                                <small style="color: white;"><img src="img/diamond (2).png " class="mb-1  " style="width: 22px;"> {{$nft->supply}}K</small>
                           </div>
                        </div><br>
                        <!-- Meta Info -->
                        </a><div class="row gx-2 align-items-center " style="margin-top:14px;">
                            <a href="{{route('item-details',$nft->id)}}">
                                <h5 class="text-center">{{$nft->nft_name}}  </h5>
                                <p class="text-center">{{Str::limit($nft->nft_description, 65, $end='.......')}}</p>
                            </a>
                            <div class="container-fluid" style="    background: #1F1F1F !important; width: 97%;  height: 65px;border-radius:11px;margin-top: 40px;">
                                <div class="row">
                                    <div class="col-4" style="margin-top:21px">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><img src="img/eye.png" class="mb-1"> {{$nft->discord_follower}}k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:21px">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><img src="img/insta.png" class="me-2 mb-1"></i>{{$nft->instagram_follower}}k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:21px">
                                        <div style="text-align-last: center;">


                                            <a href="{{$nft->discord_link}}">  <span class="d-block fz-15" style="color: white;"><img src="img/twitter.png" class="me-2 mb-1">{{$nft->twitter_follower}}k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details">Place Bid</a></div> -->
                        </div>
                    </div>

                </div>
            </div>                        </div>

                        @endforeach
                    </div>
                </div>
              </div>
           </div>
       </div>
   <br><br><br>
</div>


<div class="live-bidding-wrapper bg-gray pt-100 pb-100">
    <div class="container">
    <div class="section-heading d-flex align-items-center"><br><br><br><br><br><br><br><br><br><br>
                    <!-- <div class="spinner-grow text-danger" style="background-color: red;" role="status"><span class="visually-hidden">Loading...</span></div> -->
                    <div class="tf-title st2 m-b60" data-aos="fade-up" data-aos-duration="800">

                        <h2 class="mb-0 ms-2" style="color: #DC6A2A;font-family:bodoni;font-size:38px"  data-aos="flip-left" data-aos-duration="800">Featured & Upcoming NFT's </h2>
                    </div>
                </div>
        <div class="row align-items-center">
            <div class="col-7">
                <!-- <div class="section-heading d-flex align-items-center">
                  <div class="spinner-grow text-danger" style="background-color: red;" role="status"><span class="visually-hidden">Loading...</span></div>
                  <h2 class="mb-0 ms-2">Today </h2>
                </div> -->
            </div>
            <!-- <div class="col-5 text-end"><a class="btn rounded-pill btn-outline-primary btn-sm border-2 mb-5" href="live-bidding.html">View All Auctions</a></div> -->
        </div>
    </div>
    <div class="container">
        <div class="row g-4 justify-content-center">
            @foreach($nfts as $nft)

            <div class="col-12 col-sm-6 col-lg-3 col-xl-3" style="height:631px;width:328px" data-aos="flip-right" data-aos-duration="800" >
                <!-- Featured Card -->
                <div class="nft-card card border-0" style="box-shadow:5px 20px 30px black;">
                    <a href="{{route('item-details',$nft->id)}}">
                    <div class="card-body" style="margin-top:-1px;">
                        <div class="img-wrap"><img src="{{$nft->file_path}}" style="width:99%" class="img-fluid" alt="">
                            <!-- Badge -->
                            @if($nft->show_feature_post ==1)
                            <div class="badge bg-dark position-absolute">
                                <img src="img/star.png" alt="">
                            </div>
                            @endif
                            <div class="badge2 bg-dark position-absolute">
                                @if($nft->tba == 1)
                                <span class="d-block fz-15" style="color: white; "><i class="bi bi-clock " style="color: white;"></i>&nbsp; TBA</span>
                                @else
                                <span class="d-block fz-15" style="color: white; "><i class="bi bi-clock " style="color: white;"></i>&nbsp; {{$nft->pre_sale_date}}</span>
                                @endif
                            </div>
                        </div>
                        <!-- Others Info -->
                        <div class="align-items-center gx-0 row" style="background: #1F1F1F !important;height: 52px;">
                             <div class="col-8"><span class="d-block fz-15" style="color: white; margin-left:1pc;"><img src="img/icon-images/{{$nft->blockchain}}.png" width="14%" class="mb-1 me-1">{{$nft->pre_sale_price}}</span></div>
                            <div class="col-4 ">
                                <small style="color: white;"><img src="img/diamond (2).png " class="mb-1  " style="width: 22px;"> {{$nft->supply}}K</small>
                           </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center " style="margin-top:14px;">
                            <h5 class="text-center">{{$nft->nft_name}}  </h5>
                            <p class="text-center">{{Str::limit($nft->nft_description, 60, $end='.......')}}</p>

                            <div class="container-fluid" style="    background: #1F1F1F !important; width: 97%;  height: 65px;border-radius:11px;margin-top: 40px;">
                                <div class="row">
                                    <div class="col-4" style="margin-top:-34px">
                                        <div style="text-align-last: center;">
                                            <a href="{{$nft->discord_link}}"><span class="d-block fz-15" style="color: white;"><img src="img/eye.png" class="mb-1"> {{$nft->discord_follower}}k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:-6px">
                                        <div style="text-align-last: center;">

                                            <a href="{{$nft->instagram_link}}"><span class="d-block fz-15" style="color: white;"><img src="img/insta.png" class="me-2 mb-1"></i>{{$nft->instagram_follower}}k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:-6px">
                                        <div style="text-align-last: center;">


                                            <a href="{{$nft->twitter_link}}">  <span class="d-block fz-15" style="color: white;"><img src="img/twitter.png" class="me-2 mb-1">{{$nft->twitter_follower}}k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details">Place Bid</a></div> -->
                        </div>
                    </div>
                    </a>
                </div>
            </div>

            @endforeach
        </div>
    </div>
    <br><br>

</div>



<section class="tf-section how-we-work tablet-mb50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="tf-title st2 m-b60" data-aos="fade-up" data-aos-duration="800">

                        <h2 class="mb-0 ms-2" style="color: #DC6A2A;font-family:bodoni;font-size:38px"  data-aos="flip-left" data-aos-duration="800">News &  NFT's </h2>
                    </div>

                </div>
                <div class="col-8 col-sm-8 col-lg-8 col-xxl-12">
                <div class="row">
                     @foreach($snews as $snew)
                    <div class="col-12 col-lg-6 col-xxl-4 mb-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                    <div class="box-text st2 corner-box ">
                        <div class="number">NFT</div>
                        <div class="h7 myclass">{{$snew->heading}}</div>
                        <p>{{Str::limit($snew->description, 123, $end='.......')}}</p>
                            <a href="{{route('blog-details',$snew->id)}}" class="read-more" style = " float: right;color:white;">Read more</a><br>
                                          </div>
                </div>
                    @endforeach
                </div>
              </div>


              </div>

            </div>
        </div>
    </section>





    <section class="tf-section item-post pb-mobie35 st3 bg-st1" style="background:#272727 !important">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title st2 m-b6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                        <!-- <p class="h8 sub-title" style="color:white">BLOGS</p> -->
                        <h4 class="title">Advirtisment & NFT's</h4>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="swiper-container hv2 sl-post3 btn-style swiper-initialized swiper-horizontal swiper-pointer-events aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                        <div class="swiper-wrapper" id="swiper-wrapper-11f9a8aae34f31076" aria-live="polite" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            @foreach($advirtisements as $adv)
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 6" style="width: 330px; margin-right: 30px;">
                                <div class="post-item">
                                    <div class="wrap">
                                        <!-- <div class="tag">nftartwork</div> -->
                                        <div class="image">
                                            <img src="{{$adv->file_path}}" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-11f9a8aae34f31076" aria-disabled="false"></div>
                        <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-11f9a8aae34f31076" aria-disabled="true"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </div>
    </section>



    <section class="tf-section faq style2 bg-st2">
        <div class="container">
            <div class="row">
            <div class="tf-title st2 m-b60" data-aos="fade-up" data-aos-duration="800">

                        <h2 class="mb-0 ms-2" style="color: #DC6A2A;font-family:bodoni;font-size:38px"  data-aos="flip-left" data-aos-duration="800">FAQ's </h2>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="wrap-fx">
                        <div class="image-faq" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1200">
                            <img src="assets/images/common/imgfaq.jpg" alt="">
                        </div>
                        <div class="content-faq" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1200">

                            <div class="flat-accordion aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                                @foreach($faqs as $faq)
                                <div class="flat-toggle box-text1 corner-box1">
                            <div class="h7 toggle-title">{{$faq->question}}</div>
                            <p class="toggle-content" style="display: none;">{{Str::limit($faq->answer, 152, $end='.......')}}</p>
                        </div>
                                @endforeach
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- <div class="container-fluid">
      <img src="img/adv.png" class="img-fluid">
    </div><br><br> -->
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-12">
                @foreach($banners as $banner)
                <Br><br> <br><br><br><Br>   <img src="{{$banner->file_path}}" class="img-fluid"><Br><Br><br><br><br><br>
                @endforeach
            </div>
        </div>
    </div>



</div>
    <footer id="footer"  >
        <div class="footer-main">
            <img src="assets/images/backgroup/bg-ft.png" alt="" class="bg1">
            <img src="assets/images/backgroup/bg-ft2.png" alt="" class="bg2">
            <div class="container">

                <h5 class="heading" style="color: #DC6A2A;font-family:bodoni;font-size:38px;" data-aos="flip-right" data-aos-duration="800">JOIN OUR COMMUNITY</h5>
                <p style="color:black"data-aos="flip-left" data-aos-duration="800">Tired of missing NFT drops and buying on the secondary market ? </p>

                    <form  action="#" id="subscribe-form">
                        @csrf
                    <input type="email" name="email" placeholder="Enter your email address" required="" id="subscribe-email">
                    <button class="tf-button-st2 btn-effect" type="submit" > <span class="effect">Subscribe</span></button>
                </form>
            </div>
        </div>

    </footer>



<script>

    $(document).ready(function(){

        var form = '#subscribe-form';

        $(form).on('submit', function(event){
            event.preventDefault();

            var url = $(this).attr('data-action');

            $.ajax({
                url: "{{route('letter.save')}}",
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(response)
                {
                    $(form).trigger("reset");
                    alert(response.success)
                },
                error: function(response) {
                }
            });
        });

    });

var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }

  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }

  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
  setTimeout(function() {
    cw[i].className = 'letter out';
  }, i*80);
}

function animateLetterIn(nw, i) {
  setTimeout(function() {
    nw[i].className = 'letter in';
  }, 340+(i*80));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }

  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 4000);


function active_course() {
    if ($(".active_course").length) {
      $(".active_course").owlCarousel({
        loop: true,
        margin: 20,
        items: 3,
        nav: true,
        autoplay: 2500,
        smartSpeed: 1500,
        dots: false,
        responsiveClass: true,
        thumbs: true,
        thumbsPrerendered: true,
        navText: ["<img src='https://colorlib.com/preview/theme/edustage/img/prev.png'>", "<img src='https://colorlib.com/preview/theme/edustage/img/next.png'>"],
        responsive: {
          0: {
            items: 1,
            margin: 0
          },
          991: {
            items: 2,
            margin: 30
          },
          1200: {
            items: 3,
            margin: 30
          }
        }
      });
    }
  }
  active_course();
    </script>
@endsection

