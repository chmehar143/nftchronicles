@extends('layouts.app')

@section('content')
    <div class="divider"></div>
    <div class="discover-nft-wrapper">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-4">
            <div class="section-heading">
              <h2 class="mb-0">Discover</h2>
            </div>
          </div>
          <div class="col-12 col-md-8">
            <div class="filters-button-group d-flex justify-content-md-end flex-wrap">
                <a href="{{route('collection')}}"><button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2 active" type="button" ><i class="fz-16 bi bi-collection"></i>All</button></a>
                <a href="{{route('today')}}"><button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" ><i class="fz-16 bi bi-palette"></i>Today</button></a>
                <a href="{{route('newest')}}"><button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" ><i class="fz-16 bi bi-card-image"></i>Newest</button></a>
                <a href="{{route('upcoming')}}"><button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" ><i class="fz-16 bi bi-list-stars"></i>UpComing</button></a>
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
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="{{$nft->file_path}}" alt="">


                      <div class="badge2 bg-dark position-absolute">
                        <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; {{$nft->pre_sale_date}}</span>
                      </div>
                    </div>
                    <!-- Others Info -->
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.92</span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="#"> <small style="color: white;"><img src="img/diamond.png" class="mb-1"  style="color: white; width:18px"></i> {{$nft->supply}}K</small></a>

                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">{{$nft->name}} </h5>
                      <p class="text-center">{{Str::limit($nft->nft_description, 60, $end='.......')}}</p><br>
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('item-details',$nft->id)}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
                @endforeach
                </div>
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
    <div class="divider"></div>
    @endsection
