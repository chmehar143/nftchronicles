@extends('layouts.app')

@section('content')

			<style>
			.card {
				border: none;
				box-shadow: 5px 20px 30px black;
			}
		</style>
        <div class="blog-wrap" style="background-color:#272727 !important"><br><br><Br><Br>
<h1 class="text-center" style="color:#DC6A2A">NFT MARKETPLACES</h1>
<p class="text-center ">Check out the most popular NFT Marketplaces on <b style="color:#DC6A2A">NFT  Chronicles..</b><Br>
Get priceless insights about the NFT market and opportunities.

</p>
<br><br><br>


        <div class="container">
        <div class="row g-4 justify-content-center">

            @foreach($marketplace as $market)
        <div class="col-12 col-sm-6 col-lg-4 col-xl-4 aos-init aos-animate"  data-aos="flip-right" data-aos-duration="800">

                <!-- Featured Card -->
                <div class="nft-card card border-0" style="box-shadow:5px 20px 30px black;">
                    <a href="#">
                    </a><div class="card-body" style="margin-top:-1px;"><a href="#">
                        <div class="img-wrap"><img src="{{$market->file_path}}" style="width:99%" class="img-fluid" alt="">


                        </div>
                        <!-- Others Info -->

                        <!-- Meta Info -->
                        </a>
                        <div class="row gx-2 align-items-center " style="margin-top:14px;"><a href="#">
                            <h5 class="text-center">{{$market->title}}  </h5>
                            <p class="text-center">{{Str::limit($market->description, 120, $end='.......')}}</p>

                            </a><div class="hr container-fluid" style=" width: 97%;  height: 65px;border-top:1px solid white;margin-top: 40px;"><a href="#">
                                </a><div class="row"><a href="#">
                                    </a><div class="col-4" style="margin-top:-34px"><a href="#">
                                        </a><div style="text-align-last: center;"><a href="#">
                                            </a><a href="{{$market->website_link}}"><span class="d-block fz-15" style="color: white;"><i class="bi bi-image mb-1" style="font-size:19px;color:#DC6A2A;"></i><span style="font-size:15px" class="me-1">Website<span></span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:-6px">
                                        <div style="text-align-last: center;">

                                            <a href="{{$market->instagram_link}}"><span class="d-block fz-15" style="color: white;"><img src="img/insta.png" class="me-2 mb-1">{{$market->instagram_follower}}k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4" style="margin-top:-6px">
                                        <div style="text-align-last: center;">


                                            <a href="{{$market->twitter_link}}">  <span class="d-block fz-15" style="color: white;"><img src="img/twitter.png" class="me-2 mb-1">{{$market->twitter_follower}}k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details">Place Bid</a></div> -->
                        </div>
                    </div>

                </div>
        </div>
            @endforeach

        </div>

        </div>
        <br><br><br>

        </div>

@endsection
