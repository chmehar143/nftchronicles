@extends('layouts.app')

@section('content')
<style>
  @media (min-width: 1400px){
.container, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    max-width: 1312px !important;
}
  }

  @media(max-width: 480px){
.newcard {
  width: 296px;
    margin-left: -10px;
}
  }

  </style>
    <!-- <div class="divider" ></div> -->
    <div class="discover-nft-wrapper"  style="background: #1F1F1F !important;"><br><br><br><br><br>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-4">
            <div class="section-heading">
              <h2 class="mb-0" style="font-family:bodoni;color:#DC6A2A;">Discover</h2>
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="filters-button-group d-flex justify-content-md-end flex-wrap">
                <a href="{{route('collection')}}"><button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2 " type="button" ><i class="fz-16 bi bi-collection"></i>All</button></a>
                <a href="{{route('today')}}"><button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" ><i class="fz-16 bi bi-palette"></i>Today</button></a>
                <a href="{{route('newest')}}"><button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" ><i class="fz-16 bi bi-card-image"></i>Newest</button></a>
                <a href="{{route('upcoming')}}"><button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2 active" type="button" ><i class="fz-16 bi bi-list-stars"></i>UpComing</button></a>
                <a href="{{route('ongoing')}}"><button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" ><i class="fz-16 bi bi-image"></i>OnGoing</button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row g-4 funto-collection-filter-list">
              <!-- Single Card -->
                @foreach($nfts as $nft)
              <div class="col-12 col-sm-6 col-lg-3 col-xl-3 list-item ">
              <div class="nft-card card border-0 newcard" style="box-shadow:5px 20px 30px black;">
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
                <br><br><br><Br>

                </div>
                @endforeach

              <div class="funto-pagination mt-70">
                  {{$nfts->links('pagination')}}
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      </div>

    </div>

    @endsection
