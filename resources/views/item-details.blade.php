
  @extends('layouts.app')

@section('content')
    <div class="divider"></div>
    <div class="divider"></div>
    <!-- Share Modal -->
    <div class="share-modal modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body p-4 text-center">
            <h4 class="mb-4" id="shareModalLabel">Share this item</h4>
            <div class="d-flex align-items-center justify-content-center"><a class="mx-2" href="#"><img src="img/core-img/icons8-facebook.svg" alt=""></a><a class="mx-2" href="#"><img src="img/core-img/icons8-twitter.svg" alt=""></a><a class="mx-2" href="#"><img src="img/core-img/icons8-instagram.svg" alt=""></a><a class="mx-2" href="#"><img src="img/core-img/icons8-slack.svg" alt=""></a><a class="mx-2" href="#"><img src="img/core-img/icons8-player.svg" alt=""></a></div>
            <button class="btn btn-danger btn-sm rounded-pill mt-4" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="me-1 bi bi-x-lg"></i>Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Copy Link Modal -->
    <div class="share-modal modal fade" id="copylinkModal" tabindex="-1" aria-labelledby="copylinkLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body p-4 text-center">
            <h4 class="mb-4" id="copylinkLabel">Copy item link</h4>
            <p class="user-select-all mb-0 border border-2 p-3 rounded">https://themeforest.net/item/affan-pwa-mobile-html-template/29715548</p>
            <button class="btn btn-danger btn-sm rounded-pill mt-4" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="me-1 bi bi-x-lg"></i>Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Report Modal -->
    <div class="share-modal modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body p-4 text-center">
            <h4 class="mb-4" id="reportModalLabel">Why are you reporting?</h4>
            <form action="#">
              <textarea class="form-control mb-3" id="reportText" name="reportMessage" placeholder="Write your complaint..."></textarea>
              <div class="d-flex align-items-center justify-content-between">
                <button class="btn btn-danger btn-sm rounded-pill" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="me-1 bi bi-x-lg"></i>Close</button>
                <button class="btn btn-primary btn-sm rounded-pill" type="submit">Report</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Item Details -->
    <div class="item-details-wrap">
      <div class="container">
        <div class="row g-4 g-lg-5 justify-content-center">
          <div class="col-12 col-md-12 col-lg-6">
            <div class="item-big-thumb"><img src="{{$nft->file_path}}" style="margin-top: 2pc;" alt="" data-action="zoom"></div>
          </div>
          <!-- Item Details Content -->
          <div class="col-12 col-md-9 col-lg-6">
            <div class="item-details-content mt-5 mt-lg-0">

              <div class="d-flex flex-wrap align-items-center">
                <!-- Wishlist -->
                <!-- <button class="btn btn-dark btn-sm rounded-pill px-3 wishlist-btn" type="button"><i class="bi"></i><span class="ms-1">98</span></button> -->
                <!-- Badge-->
              </div>
              <h2 class="my-3">{{$nft->nft_name}}</h2>
              <div class="d-flex align-items-center mb-2">
                <div class="short-description">
                </div>
              </div>

               <div class="row align-items-end respon ">
                <!-- <h3 style="color: white;"> PROJECT DETAILS:  </h3> -->
                <div class="col-6 col-sm-1 me-3 mb-1">
                  <a href="{{$nft->discord_link}}" target="_blank" style="color: white;"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Discord " aria-label="  Discord "><span class="d-block fz-15   d-inline-block rounded text-primary w-100" style="color: white;"><i class="bi bi-discord me-1" style="color: #5865F2; font-size: 32px;"></i>8.8k</span></a>
                  <!-- <span style="color: #ffc107;"> April 20,2022&nbsp;</span></span></a>  -->

                </div>
                <div class="col-6 col-sm-1 me-3 mb-1">
                  <a href="#" style="color: white;"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Twitter " aria-label="  Twitter ">  <span class="d-block fz-15  d-inline-block rounded mt-2 text-primary w-100" style="color: white;"><i class="bi bi-twitter me-1  " style="color:  #00acee;font-size: 28px;"></i>5.5k</span></a>
                </div>
                <div class="col-6 col-sm-1 me-3 mb-1">
                  <a href="#" style="color: white;"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Instagram " aria-label=" Instagram ">  <span class="d-block fz-15  d-inline-block rounded text-primary mt-2 w-100" style="color: white;"><i class="bi bi-instagram me-1 " style="color: #00acee; font-size: 28px;"></i>2.5k</span></a>

                </div>
                <div class="col-6 col-sm-1 me-3 mb-4">
                  <a href="#" style="color: white;font-size: 28px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Website " aria-label=" Website ">  <span class="d-block fz-15  d-inline-block rounded text-primary mt-4 w-100" style="color: white;"><i class="bi bi-globe2 " style="color: #00acee;"></i></span></a>

                </div>

                <div class="col-6 col-sm-1 me-3 mb-4">
                  <a href="#" style="color: white;font-size: 28px;"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Marketplace " aria-label="Marketplace ">  <span class="d-block fz-15  d-inline-block rounded text-primary w-100" style="color: white;"><i class="bi bi-basket3-fill " style="color: #00acee;"></i></span></a>

                </div>

                <div class="col-6 col-sm-1 me-3 mb-4">
                  <a href="#" style="color: white;font-size: 28px;"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Announcement " aria-label="Announcement ">  <span class="d-block fz-15  d-inline-block rounded text-primary w-100" style="color: white;"><i class="bi bi-megaphone" style="color: #00acee;"></i></span></a>

                </div>

                <div class="col-6 col-sm-1 me-3 mb-4">
                  <a href="#" style="color: white;font-size: 28px;"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Contract " aria-label="Contract ">  <span class="d-block fz-15  d-inline-block rounded text-primary w-100" style="color: white;"><i class="bi bi-file-earmark-code-fill" style="color: #00acee;"></i></span></a>

                </div>

              </div>
  <!-- <br> -->
          <div class="border-top w-75 my-4"></div>
          <div class="row">
            <div class="col-md-6 col-sm-3">
              <p class="mb-2" style="color: white;">BlockChain</p>
              <h5 class="text-center mb-0 border border-2 px-3 py-2 border-primary d-inline-block rounded btn-lg"  style="width: 60%; background-color: darkgray;color: white;">{{$nft->blockchain}} </h5>
            </div>
               @if(!empty($nft->marketplace))
            <div class="col-md-6 col-sm-3">
              <p class="mb-2" style="color: white;">Marketplace</p>
              <h5 class="text-center mb-0 border border-2 px-3 py-2 border-primary d-inline-block rounded btn-lg"  style="width: 60%; background-color:darkgray;color: white;">{{$nft->marketplace}}</h5>
            </div>
              @endif
          </div>
          <div class="border-top w-75 my-4"></div>



              <div class="">
                <div class="row">
                  <div class="col-6 col-sm-6">

                    <a href="#" style="color: white;"><span class="d-block fz-15   d-inline-block rounded text-primary w-100" style="color: white;"><b>Pre sale Date:</b>&nbsp;
                      <span style="color: #ffc107;">{{$nft->pre_sale_date}}</span></span></a>




                 <br>
                    <a href="#" style="color: white;"><span class="d-block fz-15   d-inline-block rounded text-primary w-100" style="color: white;"><b>Collection Count:</b>&nbsp;
                      <span style="color: #ffc107;">  {{$nft->supply}}&nbsp;</span></span></a>

                      <br>
                      <a href="#" style="color: white;"><span class="d-block fz-15   d-inline-block rounded text-primary w-100" style="color: white;"><b>Traits Count:</b>&nbsp;
                        <span style="color: #ffc107;">{{$nft->traits_count}}</span></span></a>
                        <br>



                    </div>

                    <div class="col-6 col-sm-6">
                      <a href="#" style="color: white;"><span class="d-block fz-15   d-inline-block rounded text-primary w-100" style="color: white;"><b>Pre-Sale Price:</b>&nbsp;
                      <span style="color: #ffc107;">{{$nft->pre_sale_price}}</span> </span></a>


                   <br>
                      <a href="#" style="color: white;"><span class="d-block fz-15   d-inline-block rounded text-primary w-100" style="color: white;"><b>Category:</b>&nbsp;
                        <span style="color: #ffc107;">{{$nft->category}}</span></span></a>

                        <br>





                      </div>

                      <div class="row">
                        <div class="col-sm-6">
                          <br>
                          <p class="mb-2" style="color: white;"><i class="bi bi-calendar me-1"></i>&nbsp;Public-Sale Date</p>
                          <h5 class="text-center mb-0 border border-2 px-3 py-2 border-primary d-inline-block rounded btn-lg"  style="width: 60%; background-color: #ffc107;color: white;">{{$nft->public_sale_date}} </h5>
                        </div>

                        <div class="col-sm-6">
                          <br>
                          <p class="mb-2" style="color: white;"><i class="bi bi-cash-coin me-1"></i>&nbsp;Public-Sale Price</p>
                          <h5 class="text-center mb-0 border border-2 px-3 py-2 border-primary d-inline-block rounded btn-lg"  style="width: 60%; background-color: #ffc107;color: white;"> {{$nft->public_sale_price}} </h5>
                        </div>

                      </div>


            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-block w-100 mb-70"></div>
    <div class="funto-tab-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="tab--area bg-gray ">
              <ul class="nav nav-tabs" id="funtoTab" role="tablist">
                <li class="nav-item"><a class="nav-link rounded-pill bg-gradient active" id="tab--1" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true" style="background-color: #ffc107;">Description</a></li>
                <!-- <li class="nav-item"><a class="nav-link rounded-pill bg-gradient" id="tab--2" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Activity</a></li> -->
              </ul>
              <div class="tab-content">
                <!-- Tab Pane-->
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                  <div class="card border-0">
                    <div class="card-body p-4">
                      <p>{{$nft->nft_description}}</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
{{--    <div class="divider"></div>--}}
    <!-- Related Project  -->
{{--    <div class="related-project-area">--}}
{{--      <div class="container">--}}
{{--        <div class="section-heading">--}}
{{--          <h2 class="mb-0">Recent Projects</h2>--}}
{{--        </div>--}}
{{--        <!-- Slide -->--}}
{{--        <div class="related-project-slide">--}}
{{--          <div>--}}
{{--            <!-- Featured Card -->--}}
{{--            <div class="nft-card card border-0">--}}
{{--              <div class="nft-card card border-0">--}}
{{--                <div class="card-body">--}}
{{--                  <div class="img-wrap"><img src="img/1.gif" alt="">--}}
{{--                    <!-- Badge -->--}}
{{--                    <div class="badge bg-dark position-absolute">--}}
{{--                      <img src="img/star.png" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="badge2 bg-dark position-absolute">--}}
{{--                      <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                  <!-- Others Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-3">--}}
{{--                    <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>--}}
{{--                    <div class="col-4 text-end">--}}
{{--                    <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>--}}

{{--                    </div>--}}
{{--                  </div><br>--}}
{{--                  <!-- Meta Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-2">--}}
{{--                    <h5 class="text-center">What is Lorem Ipsum?  </h5>--}}
{{--                    <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>--}}
{{--                    <hr>--}}
{{--                    <div class="container-fluid">--}}
{{--                      <div class="row">--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}
{{--                         <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}

{{--                        <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}


{{--                          <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>--}}
{{--                     </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      </div>--}}
{{--                    <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div>--}}
{{--            <div class="nft-card card border-0">--}}
{{--              <div class="nft-card card border-0">--}}
{{--                <div class="card-body">--}}
{{--                  <div class="img-wrap"><img src="img/1.gif" alt="">--}}
{{--                    <!-- Badge -->--}}
{{--                    <div class="badge bg-dark position-absolute">--}}
{{--                      <img src="img/star.png" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="badge2 bg-dark position-absolute">--}}
{{--                      <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                  <!-- Others Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-3">--}}
{{--                    <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>--}}
{{--                    <div class="col-4 text-end">--}}
{{--                    <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>--}}

{{--                    </div>--}}
{{--                  </div><br>--}}
{{--                  <!-- Meta Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-2">--}}
{{--                    <h5 class="text-center">What is Lorem Ipsum?  </h5>--}}
{{--                    <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>--}}
{{--                    <hr>--}}
{{--                    <div class="container-fluid">--}}
{{--                      <div class="row">--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}
{{--                         <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}

{{--                        <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}


{{--                          <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>--}}
{{--                     </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      </div>--}}
{{--                    <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div>--}}
{{--            <!-- Featured Card -->--}}
{{--            <div class="nft-card card border-0">--}}
{{--              <div class="nft-card card border-0">--}}
{{--                <div class="card-body">--}}
{{--                  <div class="img-wrap"><img src="img/1.gif" alt="">--}}
{{--                    <!-- Badge -->--}}
{{--                    <div class="badge bg-dark position-absolute">--}}
{{--                      <img src="img/star.png" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="badge2 bg-dark position-absolute">--}}
{{--                      <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                  <!-- Others Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-3">--}}
{{--                    <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>--}}
{{--                    <div class="col-4 text-end">--}}
{{--                    <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>--}}

{{--                    </div>--}}
{{--                  </div><br>--}}
{{--                  <!-- Meta Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-2">--}}
{{--                    <h5 class="text-center">What is Lorem Ipsum?  </h5>--}}
{{--                    <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>--}}
{{--                    <hr>--}}
{{--                    <div class="container-fluid">--}}
{{--                      <div class="row">--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}
{{--                         <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}

{{--                        <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}


{{--                          <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>--}}
{{--                     </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      </div>--}}
{{--                    <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div>--}}
{{--            <!-- Featured Card -->--}}
{{--            <div class="nft-card card border-0">--}}
{{--              <div class="nft-card card border-0">--}}
{{--                <div class="card-body">--}}
{{--                  <div class="img-wrap"><img src="img/1.gif" alt="">--}}
{{--                    <!-- Badge -->--}}
{{--                    <div class="badge bg-dark position-absolute">--}}
{{--                      <img src="img/star.png" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="badge2 bg-dark position-absolute">--}}
{{--                      <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                  <!-- Others Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-3">--}}
{{--                    <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>--}}
{{--                    <div class="col-4 text-end">--}}
{{--                    <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>--}}

{{--                    </div>--}}
{{--                  </div><br>--}}
{{--                  <!-- Meta Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-2">--}}
{{--                    <h5 class="text-center">What is Lorem Ipsum?  </h5>--}}
{{--                    <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>--}}
{{--                    <hr>--}}
{{--                    <div class="container-fluid">--}}
{{--                      <div class="row">--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}
{{--                         <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}

{{--                        <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}


{{--                          <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>--}}
{{--                     </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      </div>--}}
{{--                    <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div>--}}
{{--            <div class="nft-card card border-0">--}}
{{--              <div class="nft-card card border-0">--}}
{{--                <div class="card-body">--}}
{{--                  <div class="img-wrap"><img src="img/1.gif" alt="">--}}
{{--                    <!-- Badge -->--}}
{{--                    <div class="badge bg-dark position-absolute">--}}
{{--                      <img src="img/star.png" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="badge2 bg-dark position-absolute">--}}
{{--                      <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                  <!-- Others Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-3">--}}
{{--                    <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>--}}
{{--                    <div class="col-4 text-end">--}}
{{--                    <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>--}}

{{--                    </div>--}}
{{--                  </div><br>--}}
{{--                  <!-- Meta Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-2">--}}
{{--                    <h5 class="text-center">What is Lorem Ipsum?  </h5>--}}
{{--                    <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>--}}
{{--                    <hr>--}}
{{--                    <div class="container-fluid">--}}
{{--                      <div class="row">--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}
{{--                         <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}

{{--                        <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}


{{--                          <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>--}}
{{--                     </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      </div>--}}
{{--                    <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div>--}}
{{--            <div class="nft-card card border-0">--}}
{{--              <div class="nft-card card border-0">--}}
{{--                <div class="card-body">--}}
{{--                  <div class="img-wrap"><img src="img/1.gif" alt="">--}}
{{--                    <!-- Badge -->--}}
{{--                    <div class="badge bg-dark position-absolute">--}}
{{--                      <img src="img/star.png" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="badge2 bg-dark position-absolute">--}}
{{--                      <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                  <!-- Others Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-3">--}}
{{--                    <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>--}}
{{--                    <div class="col-4 text-end">--}}
{{--                    <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>--}}

{{--                    </div>--}}
{{--                  </div><br>--}}
{{--                  <!-- Meta Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-2">--}}
{{--                    <h5 class="text-center">What is Lorem Ipsum?  </h5>--}}
{{--                    <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>--}}
{{--                    <hr>--}}
{{--                    <div class="container-fluid">--}}
{{--                      <div class="row">--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}
{{--                         <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}

{{--                        <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}


{{--                          <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>--}}
{{--                     </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      </div>--}}
{{--                    <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div>--}}
{{--            <!-- Featured Card -->--}}
{{--            <div class="nft-card card border-0">--}}
{{--              <div class="nft-card card border-0">--}}
{{--                <div class="card-body">--}}
{{--                  <div class="img-wrap"><img src="img/1.gif" alt="">--}}
{{--                    <!-- Badge -->--}}
{{--                    <div class="badge bg-dark position-absolute">--}}
{{--                      <img src="img/star.png" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="badge2 bg-dark position-absolute">--}}
{{--                      <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                  <!-- Others Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-3">--}}
{{--                    <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>--}}
{{--                    <div class="col-4 text-end">--}}
{{--                    <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>--}}

{{--                    </div>--}}
{{--                  </div><br>--}}
{{--                  <!-- Meta Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-2">--}}
{{--                    <h5 class="text-center">What is Lorem Ipsum?  </h5>--}}
{{--                    <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>--}}
{{--                    <hr>--}}
{{--                    <div class="container-fluid">--}}
{{--                      <div class="row">--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}
{{--                         <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}

{{--                        <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}


{{--                          <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>--}}
{{--                     </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      </div>--}}
{{--                    <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--          <div>--}}
{{--            <!-- Featured Card -->--}}
{{--            <div class="nft-card card border-0">--}}
{{--              <div class="nft-card card border-0">--}}
{{--                <div class="card-body">--}}
{{--                  <div class="img-wrap"><img src="img/1.gif" alt="">--}}
{{--                    <!-- Badge -->--}}
{{--                    <div class="badge bg-dark position-absolute">--}}
{{--                      <img src="img/star.png" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="badge2 bg-dark position-absolute">--}}
{{--                      <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>--}}
{{--                    </div>--}}

{{--                  </div>--}}
{{--                  <!-- Others Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-3">--}}
{{--                    <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>--}}
{{--                    <div class="col-4 text-end">--}}
{{--                    <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>--}}

{{--                    </div>--}}
{{--                  </div><br>--}}
{{--                  <!-- Meta Info -->--}}
{{--                  <div class="row gx-2 align-items-center mt-2">--}}
{{--                    <h5 class="text-center">What is Lorem Ipsum?  </h5>--}}
{{--                    <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>--}}
{{--                    <hr>--}}
{{--                    <div class="container-fluid">--}}
{{--                      <div class="row">--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}
{{--                         <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}

{{--                        <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-4">--}}
{{--                        <div style="text-align-last: center;">--}}


{{--                          <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>--}}
{{--                     </div>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      </div>--}}
{{--                    <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="divider"></div>--}}
    <!-- CTA Wrapper -->
{{--    <div class="container">--}}
{{--      <div class="cta-text bg-gradient p-4 p-sm-5 bg-primary" data-aos="zoom-in" data-aos-duration="750" data-aos-delay="300">--}}
{{--        <div class="row align-items-center">--}}
{{--          <div class="col-12 col-md-8 col-lg-9">--}}
{{--            <h2 class="mb-3 mb-md-0" data-aos="fade-up" data-aos-duration="750" data-aos-delay="600">Resources for getting started Nft .</h2>--}}
{{--          </div>--}}
{{--          <div class="col-12 col-md-4 col-lg-3">--}}
{{--            <div class="text-md-end"><a class="btn btn-warning rounded-pill" href="help-center.html" data-aos="zoom-in" data-aos-duration="750" data-aos-delay="900">Get Started</a></div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="divider"></div>--}}
</div>
@endsection
