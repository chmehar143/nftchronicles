@extends('layouts.app')

@section('content')
<div class="welcome-area pt-120">
    <div class="container">
        <div class="row align-items-center">
            <!-- Welcome Content -->
            <div class="col-12 col-sm-10 col-md-6">
                <div class="welcome-content mb-5 mb-md-0">
                    <h2><span style="color: #ffc107;"> Explore,</span> buy, and  sell exceptional NFTs.</h2>
                    <p class="mb-4"  >Projects like Dastardly Ducks prove that the  &amp;  NFT community can come together to support each other in the most challenging circumstances.</p>
                    <div class="hero-btn-group"><a class="btn btn-warning rounded-pill mt-3 me-1" href="{{route('collection')}}">Discover <i class="ms-2 bi bi-arrow-right"></i></a>
                    <!-- <a class="btn btn-minimal hover-primary mt-3" href="collections.html"><i class="me-2 bi bi-grid-3x3-gap"></i>All Collections</a> -->
                </div>
                </div>
            </div>
            <!-- Welcome Thumb -->
            <div class="col-12 col-sm-9 col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      @foreach($advirtisements as $key => $advirtisement)
                        <div class="carousel-item {{($key == 0)? 'active' : ''}}">
                            <img src="{{$advirtisement->file_path}}" class="img-fluid" class="d-block w-100" alt="...">
                        </div>
                        @endforeach
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"> -->
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button> -->
                    <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"> -->
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button> -->
                </div>          </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<hr>


<div class="live-bidding-wrapper bg-gray pt-100 pb-100">
    <div class="container">
    <div class="section-heading d-flex align-items-center">
                    <div class="spinner-grow text-danger" style="background-color: red;" role="status"><span class="visually-hidden">Loading...</span></div>
                    <h2 class="mb-0 ms-2">Featured &amp; Upcoming NFT's </h2>
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
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <!-- Featured Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/1.gif" class="img-fluid" alt="">
                            <!-- Badge -->
                            <div class="badge bg-dark position-absolute">
                                <img src="img/star.png" alt="">
                            </div>

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                            </div>

                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>
                            <div class="col-4 text-end">
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1 " style="width: 18px;"> 1.8K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                            <h5 class="text-center">What is Lorem Ipsum?  </h5>
                            <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">


                                            <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <!-- Featured Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/7.gif" class="img-fluid" alt="">
                            <!-- Badge -->
                            <!-- <div class="badge bg-dark position-absolute">
                              <img src="img/star.png" alt="">Genreal
                            </div> -->

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                            </div>

                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/sol.png" width="16%" class="mb-1">0.05</span></div>
                            <div class="col-4 text-end">
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1 " style="width: 18px;"> 1.8K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                            <h5 class="text-center">What is Lorem Ipsum?  </h5>
                            <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">


                                            <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <!-- Featured Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/m5.gif" class="img-fluid" alt="">
                            <!-- Badge -->
                            <!-- <div class="badge bg-dark position-absolute">
                              <img src="img/star.png" alt="">Genreal
                            </div> -->

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                            </div>
                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1"> 0.5EH </span></div>
                            <div class="col-4 text-end">
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1 " style="width: 18px;"> 1.8K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                            <h5 class="text-center">What is Lorem Ipsum?  </h5>
                            <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">


                                            <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <!-- Featured Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/m6.gif" class="img-fluid" alt="">
                            <!-- Badge -->
                            <div class="badge bg-dark position-absolute">
                                <img src="img/star.png" alt="">
                            </div>

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                            </div>

                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/sol.png" width="16%" class="mb-1"> 0.05 ETH</span></div>
                            <div class="col-4 text-end">
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                            <h5 class="text-center">What is Lorem Ipsum?  </h5>
                            <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">


                                            <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
 
    <br><Br>
    
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <!-- Featured Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/1.gif" class="img-fluid" alt="">
                            <!-- Badge -->
                            <div class="badge bg-dark position-absolute">
                                <img src="img/star.png" alt="">
                            </div>

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                            </div>

                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1">0.05</span></div>
                            <div class="col-4 text-end">
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1 " style="width: 18px;"> 1.8K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                            <h5 class="text-center">What is Lorem Ipsum?  </h5>
                            <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br><br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">


                                            <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <!-- Featured Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/7.gif" class="img-fluid" alt="">
                            <!-- Badge -->
                            <!-- <div class="badge bg-dark position-absolute">
                              <img src="img/star.png" alt="">Genreal
                            </div> -->

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                            </div>

                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/sol.png" width="16%" class="mb-1">0.05</span></div>
                            <div class="col-4 text-end">
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1 " style="width: 18px;"> 1.8K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                            <h5 class="text-center">What is Lorem Ipsum?  </h5>
                            <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">


                                            <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <!-- Featured Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/m5.gif" class="img-fluid" alt="">
                            <!-- Badge -->
                            <!-- <div class="badge bg-dark position-absolute">
                              <img src="img/star.png" alt="">Genreal
                            </div> -->

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                            </div>
                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/bew.png" width="16%" class="mb-1"> 0.5EH </span></div>
                            <div class="col-4 text-end">
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1 " style="width: 18px;"> 1.8K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                            <h5 class="text-center">What is Lorem Ipsum?  </h5>
                            <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">


                                            <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <!-- Featured Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/m6.gif" class="img-fluid" alt="">
                            <!-- Badge -->
                            <div class="badge bg-dark position-absolute">
                                <img src="img/star.png" alt="">
                            </div>

                            <div class="badge2 bg-dark position-absolute">
                                <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                            </div>

                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                            <div class="col-8"><span class="d-block fz-15" style="color: white;"><img src="img/sol.png" width="16%" class="mb-1"> 0.05 ETH</span></div>
                            <div class="col-4 text-end">
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>

                            </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                            <h5 class="text-center">What is Lorem Ipsum?  </h5>
                            <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                            <hr>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div style="text-align-last: center;">
                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-discord me-2" style="color: #5865F2;"></i>8.8k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">

                                            <a href="#"><span class="d-block fz-15" style="color: white;"><i class="bi bi-instagram me-2" style="color:#00acee;"></i>5k</span></a>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div style="text-align-last: center;">


                                            <a href="#">  <span class="d-block fz-15" style="color: white;"><i class="bi bi-twitter me-2" style="color: #00acee;"></i>20k</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>

</div>
<hr>
<div class="blog-wrap">
    <div class="container">
        <div class="row g-5">
            <div class="section-heading d-flex align-items-center">

                <div class="spinner-grow text-danger" style="background-color: red;" role="status"><span class="visually-hidden">Loading...</span></div>
                <h2 class="mb-0 ms-2"> News NFT </h2>
            </div>

            <div class="col-12 col-sm-7 col-lg-8 col-xxl-9">
                <div class="row g-4">

                    <!-- Blog Card -->
                    @foreach($news as $new)
                    <div class="col-12 col-lg-6 col-xxl-6">
                        <div class="card blog-card border-0 bg-transparent">
                            <div class="img-wrap"><a href="{{route('blog-details')}}">
                                    <img src="{{$new->file_path}}" class="img-fluid" alt=""></a></div>
                            <div class="card-body p-3">
                                <a class="post-title mb-2 hover-primary" href="{{route('blog-details')}}">{{$new->heading}}</a>
                                <p style="margin-top: 1pc;">{{Str::limit($new->description, 60, $end='.......')}}</p><a class="btn btn-warning btn-sm rounded-pill" href="{{route('blog-details')}}">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <!-- Blog Card -->
                </div>

            </div>
            <div class="col-12 col-sm-5 col-lg-4 col-xxl-3">
                <h4 class="mb-2">Advirtisment Posts</h4>
                <div class="border-top mb-4"></div>
                <br>
                @foreach ($advirtisements as $key => $advirtisement)
                <div class="popular-blog">
                    <img src="{{$advirtisement->file_path}}" class="img-fluid ">
                </div>
                <br>
                    @endforeach

            </div>
        </div><br><Br><br>
        <div class="hero-btn-group" ><a class="btn btn-warning rounded-pill mt-3 me-1" href="blog.html"> Click Here To More  News<i class="ms-2 bi bi-arrow-right"></i></a>

        </div><br><Br>
    </div>
    <hr>
</div>
</div>

<div class="blog-wrap">
    <div class="container">
        <div class="row g-5">
            <div class="section-heading d-flex align-items-center">

                <div class="spinner-grow text-danger" style="background-color: red;" role="status"><span class="visually-hidden">Loading...</span></div>
                <h2 class="mb-0 ms-2"> Frequently Asked Question </h2>
            </div>

            <div class="col-12 col-sm-7 col-lg-8 col-xxl-12">
                <div class="row g-4">

                    <!-- Blog Card -->
                    <!-- Blog Card -->
                    @foreach($faqs as $faq)
                    <div class="col-12 col-lg-6 col-xxl-3">
                        <div class="card blog-card border-0 bg-transparent">
                            <div class="img-wrap"><a href="{{route('question-details')}}"><img src="{{$faq->file_path}}" class="img-fluid" alt=""></a></div>
                            <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="{{route('question-details')}}">{{$faq->question}}</a>
                                <p style="margin-top: 1pc;">{{Str::limit($faq->answer, 60, $end='.......')}}</p><a class="btn btn-warning btn-sm rounded-pill" href="{{route('question-details')}}">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <!-- Blog Card -->

                </div>

            </div>

        </div><br><Br><br>
        <div class="hero-btn-group" ><a class="btn btn-warning rounded-pill mt-3 me-1" href="help-questions.html"> Click Here For More <i class="ms-2 bi bi-arrow-right"></i></a>

        </div><br><Br>
    </div>
    <hr>
    <div class="divider"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach ($banners as $key => $banner)
                <center>   <img src="{{$banner->file_path}}" class="img-fluid"></center>
                @endforeach
            </div>
        </div>
    </div>
    <br><br><br>
    <hr>

    <div class="container-fluid" style="background-image:url('img/community.jpg'); width: 100%; height: 30pc ">
        <div class="row">
            <div class="col-md-12"><br><br><br><br><br><br>
                <h1 class="text-center" style="color: white;">JOIN OUR COMMUNITY</h1><br>
                <h4 class="text-center" style="color: white;">Tired of missing NFT drops and buying on the secondary market ?</h4>
                <BR>
                <center> <a href="#" class="btn btn-lg" style="background-color: #ffc107;"><span class="text-span"><i class="bi bi-twitter me-2" style="color: white;"></i> </span>JOIN US&nbsp;ON TWITTER</a></center>
            </div>
        </div>
    </div>
    <hr>
@endsection

