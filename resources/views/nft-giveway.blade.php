@extends('layouts.app')

@section('content')

			<style>
			.card {
				border: none;
				box-shadow: 5px 20px 30px black;
			}
		</style>
        <div class="blog-wrap" style="background-color:#272727 !important"><br><br><Br><Br>
<h1 class="text-center" style="color:#DC6A2A">NFT Giveways</h1>
<p class="text-center ">Check out the most popular NFT Giveways on <b style="color:#DC6A2A">NFT  Chronicles..</b><Br>
Get priceless insights about the NFT market and opportunities.

</p>
<br><br><br>


        <div class="container">
        <div class="row g-4 justify-content-center">
            @foreach($giveaways as $giveaway)
        <div class="col-12 col-sm-6 col-lg-4 col-xl-4 aos-init aos-animate"  data-aos="flip-right" data-aos-duration="800">

                <!-- Featured Card -->
                <div class="nft-card card border-0" style="box-shadow:5px 20px 30px black;">
                    <a href="#">
                    </a><div class="card-body" style="margin-top:-1px;"><a href="#">
                        <div class="img-wrap"><img src="{{$giveaway->file_path}}" style="width:99%" class="img-fluid" alt="">


                        </div>
                        <!-- Others Info -->

                        <!-- Meta Info -->
                        </a><div class="row gx-2 align-items-center " style="margin-top:14px;"><a href="http://127.0.0.1:8000/item-details/35">
                            <h5 class="text-center">{{$giveaway->title}}</h5>
                        <p class="text-center">@<a href="{{$giveaway->twitter_link}}">{{$giveaway->title }}</a> is giving away<br>{{$giveaway->details}}</p>
                        <h5 class="text-center">To Enter  </h5>
                        <span class="d-block fz-15" style="color: white;  text-align-last: center;"><i class="bi bi-check mb-1" style="font-size:19px;color:#DC6A2A;"></i><span style="font-size:15px" class="me-1">Follow
                         <a href="{{$giveaway->twitter_link}}">@DominationArena</a><span></span></span></span>

                         <span class="d-block fz-15" style="color: white;  text-align-last: center;"><i class="bi bi-check mb-1" style="font-size:19px;color:#DC6A2A;"></i><span style="font-size:15px" class="me-1">Tag 3 Nft Friends<span></span></span></span>
                         <span class="d-block fz-15" style="color: white;  text-align-last: center;"><i class="bi bi-check mb-1" style="font-size:19px;color:#DC6A2A;"></i><span style="font-size:15px" class="me-1"> Join
                         <a href="{{$giveaway->discord_link}}">@Discord</a><span></span></span></span><br>
                         <span class="d-block fz-15" style="color: white;  text-align-last: center;"><i class="bi bi-calendar mb-1" style="font-size:19px;color:#DC6A2A;"></i><span style="font-size:15px" class="me-1"> Like & RT
                         <a href="#">{{$giveaway->start_date}}</a><span></span></span></span>
                         <span class="d-block fz-15" style="color: white;  text-align-last: center;"><i class="bi bi-calendar mb-1" style="font-size:19px;color:#DC6A2A;"></i><span style="font-size:15px" class="me-1"> Like & RT
                         <a href="#">{{$giveaway->end_date}}</a><span></span></span></span>
                            </a>

                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details">Place Bid</a></div> -->
                        </div>
                    </div>

                </div>
        </div>
            @endforeach
                <div class="funto-pagination mt-70">
                    {{$giveaways->links('pagination')}}
                </div>
        </div>
        </div>
        <br><br><br>



        @endsection
