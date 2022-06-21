
@extends('layouts.app')

@section('content')
<div class="blog-wrap" style="background-color:#272727 !important"><br><br><Br><Br>
<h1 class="text-center" style="color:#DC6A2A">LATEST NFT NEWS</h1>
<p class="text-center ">Stay in tune with the latest NFT news to make meaningful choices and insightful decisions.<Br>
Join our community and get the latest news on NFTs , <b style="color:#DC6A2A">Digital Art</b>, Gaming and Metaverse!</p>
<br><br><br>
<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-2"></div>
          <div class="col-12 col-sm-9 col-lg-6">
            <div class="help-form text-center">
              <!-- Form -->
                <form method="post" action="{{route('new-search')}}" class="form">
                    @csrf
                              <input class="form-control" type="search" name="search" placeholder="Search">

                      
              </form>
            </div>
          </div>
          <div class="col-md-3 sea">
          <a href="" class="tf-button-st2 btn-effect" data-toggle=""><span class="effect">Search </span></a>
          </div>

        </div>
      </div><br><br><br>

    <div class="container">
        <div class="row g-5">
            <div class="col-12 col-sm-7 col-lg-12 col-xxl-12">
                <div class="row g-4">

                    <!-- Blog Card -->
                    <div class="container">
                        <div class="row">


                            <div class="col-12 col-lg-6  mt-5  col-xxl-6">
                                <div class="card blog-card border-0 bg-transparent">
                                    <div class="img-wrap">
                                        <a href="{{route('blog-details',$newFirst->id)}}">
                                            <div class="badge2 bg-dark position-absolute" >

                                            </div><img src="{{$newFirst->file_path}}" alt=""></a>
                                    </div>
                                    <div class="card-body p-0"><a class="post-title mb-2 hover-primary mt-2 " href="{{route('blog-details',$newFirst->id)}}" style="font-size:2pc">{{$newFirst->heading}}</a>

                                        <p style="margin-top: 1pc;">{{Str::limit($newFirst->description, 500, $end='.......')}}</p>

                                        <!-- <i class="bi bi-calendar " style="color: #DC6A2A;"></i>&nbsp; <small class="me-5">2022-05-13</small>
                                         <i class="bi bi-clock " style="color: #DC6A2A;"></i>&nbsp; <small>3min</small> -->

                                    </div>
                                </div>
                            </div>



                            <!-- Blog Card -->
                            <div class="col-md-6">
                                <div class="row">



                                     @foreach($newFour as $newF)
                                    <div class="col-12 col-lg-6  mt-5  col-xxl-6">
                                        <div class="card blog-card border-0 bg-transparent">
                                            <div class="img-wrap"><a href="{{route('blog-details',$newF->id)}}">
                                                    <div class="badge2 bg-dark position-absolute" >
                                                        &nbsp;
                                                    </div><img src="{{$newF->file_path}}" alt=""></a></div>
                                            <div class="card-body p-0"><a class="post-title mb-2 hover-primary mt-2 " href="{{route('blog-details',$newF->id)}}">{{$newF->heading}}</a>

                                                <p style="margin-top: 1pc;">{{Str::limit($newFirst->description, 120, $end='.......')}}</p>

                                                <i class="bi bi-calendar " style="color: #DC6A2A;"></i>&nbsp; <small class="me-5">{{date('d-m-Y', strtotime($newFirst->created_at))}}</small>
                                                <i class="bi bi-clock " style="color: #DC6A2A;"></i>&nbsp; <small>{{$newFirst->created_at->diffForHumans()}}</small>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>











                    @foreach($news as $new)
                    <!-- Blog Card -->

                    <div class="col-12 col-lg-3  mt-5  col-xxl-3">
                        <div class="card blog-card border-0 bg-transparent">
                            <div class="img-wrap"><a href="{{route('blog-details',$new->id)}}">
                                    <div class="badge2 bg-dark position-absolute" >
                                    </div><img src="{{$new->file_path}}" alt=""></a></div>
                            <div class="card-body p-0"><a class="post-title mb-2 hover-primary mt-2 " href="{{route('blog-details',$new->id)}}">{{$new->heading}}</a>

                                <p style="margin-top: 1pc;">{{Str::limit($new->description, 120, $end='.......')}}</p>

                                <i class="bi bi-calendar " style="color: #DC6A2A;"></i>&nbsp; <small class="me-5">{{date('d-m-Y', strtotime($new->created_at))}}</small>
                                <i class="bi bi-clock " style="color: #DC6A2A;"></i>&nbsp; <small>{{$new->created_at->diffForHumans()}}</small>

                            </div>
                        </div>
                    </div>
                    <!-- Blog Card -->
                    <!-- Blog Card -->
                        @endforeach


                </div>
                <!-- Pagination -->
                <div class="funto-pagination mt-70">
                    {{$news->links('pagination')}}
                </div>
            </div>

        </div>
    </div>
</div>

    <section class="tf-section item-post pb-mobie35 st3 bg-st1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title st2 m-b6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                        <p class="h8 sub-title" style="color:white">BLOGS</p>
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
    @endsection
