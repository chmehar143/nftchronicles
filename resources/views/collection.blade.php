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
              <button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2 active" type="button" data-filter="*"><i class="fz-16 bi bi-collection"></i>All</button>
              <button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" data-filter=".today"><i class="fz-16 bi bi-palette"></i>Today</button>
              <button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" data-filter=".newest"><i class="fz-16 bi bi-card-image"></i>Newest</button>
              <button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" data-filter=".upcoming"><i class="fz-16 bi bi-list-stars"></i>UpComing</button>
              <button class="btn btn-outline-primary rounded-pill border-2 btn-sm mb-3 mx-2" type="button" data-filter=".ongoing"><i class="fz-16 bi bi-image"></i>OnGoing</button>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row g-4 funto-collection-filter-list">
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item newest">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/m5.gif" alt="">
                    
    
                      <div class="badge2 bg-dark position-absolute">
                        <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                      </div> 
                    </div>
                    <!-- Others Info -->
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('newest')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                      
                    
                    
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('newest')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>

                 <!-- Single Card -->
                 <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item  newest">
                  <div class="nft-card card shadow-sm border-0">
                    <div class="card-body">
                      <div class="img-wrap"><img src="img/7.gif" alt="">
                        <!-- Badge -->
                        <!-- <div class="badge bg-dark position-absolute">
                          <img src="img/star.png" alt=""> Today 
                        </div>-->
      
                        <div class="badge2 bg-dark position-absolute">
                          <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                        </div> 
                      </div>
                      <!-- Others Info -->
                      <div class="row gx-2 align-items-center mt-3">
                        <div class="col-8">
                          <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                        </div>
                        <div class="col-4 text-end">
                        <a href="{{route('newest')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
      
                        </div>
                      </div><br>
                      <!-- Meta Info -->
                      <div class="row gx-2 align-items-center mt-2">
                        <h5 class="text-center">What is Lorem Ipsum?  </h5>
                        <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                                             
                      <div class="row gx-2 align-items-center mt-3">
                        <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('newest')}}">More Details</a></div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- Single Card -->


                  <!-- Single Card -->
                  <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item  newest">
                    <div class="nft-card card shadow-sm border-0">
                      <div class="card-body">
                        <div class="img-wrap"><img src="img/new3.gif" alt="">
                          <!-- Badge -->
                          <!-- <div class="badge bg-dark position-absolute">
                            <img src="img/star.png" alt=""> Today 
                          </div>-->
        
                          <div class="badge2 bg-dark position-absolute">
                            <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                          </div> 
                        </div>
                        <!-- Others Info -->
                        <div class="row gx-2 align-items-center mt-3">
                          <div class="col-8">
                            <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                          </div>
                          <div class="col-4 text-end">
                          <a href="{{route('newest')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
        
                          </div>
                        </div><br>
                        <!-- Meta Info -->
                        <div class="row gx-2 align-items-center mt-2">
                          <h5 class="text-center">What is Lorem Ipsum?  </h5>
                          <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                                                 
                        <div class="row gx-2 align-items-center mt-3">
                          <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('newest')}}">More Details</a></div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <!-- Single Card -->


              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item  today ">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/1.gif" alt="">
                      <!-- Badge -->
                      <!-- <div class="badge bg-dark position-absolute">
                        <img src="img/star.png" alt=""> Today 
                      </div>-->
    
                      <div class="badge2 bg-dark position-absolute">
                        <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                      </div> 
                    </div>
                    <!-- Others Info -->
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('today')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                                         
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('today')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item today  ">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/2.webp" alt="">
                      <!-- Badge -->
                      <!-- <div class="badge bg-dark position-absolute">
                        <img src="img/star.png" alt="">Today 
                      </div>-->
    
                      <div class="badge2 bg-dark position-absolute">
                        <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                      </div> 
                    </div>
                    <!-- Others Info -->
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('today')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                   
                    
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('today')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->


                 <!-- Single Card -->
                 <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item today  ">
                  <div class="nft-card card shadow-sm border-0">
                    <div class="card-body">
                      <div class="img-wrap"><img src="img/new4.gif" alt="">
                        <!-- Badge -->
                        <!-- <div class="badge bg-dark position-absolute">
                          <img src="img/star.png" alt="">Today 
                        </div>-->
      
                        <div class="badge2 bg-dark position-absolute">
                          <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                        </div> 
                      </div>
                      <!-- Others Info -->
                      <div class="row gx-2 align-items-center mt-3">
                        <div class="col-8">
                          <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                        </div>
                        <div class="col-4 text-end">
                        <a href="{{route('today')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
      
                        </div>
                      </div><br>
                      <!-- Meta Info -->
                      <div class="row gx-2 align-items-center mt-2">
                        <h5 class="text-center">What is Lorem Ipsum?  </h5>
                        <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                     
                      
                      <div class="row gx-2 align-items-center mt-3">
                        <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('today')}}">More Details</a></div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item  upcoming">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/w1.gif" alt="">
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
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('upcoming')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                     
                      <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                    
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('upcoming')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item ongoing">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/w8.webp" alt="">
                      <!-- Badge -->
                      <!-- <div class="badge bg-dark position-absolute">
                        <img src="img/star.png" alt="">Genreal 
                      </div>-->
    
                      <div class="badge2 bg-dark position-absolute">
                        <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                      </div> 
                    </div>
                    <!-- Others Info -->
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('ongoing')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                    
                    
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('ongoing')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item upcoming">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/new6.gif" alt="">
                      <!-- Badge -->
                      <!-- <div class="badge bg-dark position-absolute">
                        <img src="img/star.png" alt="">Genreal 
                      </div>-->
    
                      <div class="badge2 bg-dark position-absolute">
                        <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                      </div> 
                    </div>
                    <!-- Others Info -->
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('upcoming')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                                      
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('upcoming')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item upcoming">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/new10.jpg" alt="">
                      <!-- Badge -->
                      <!-- <div class="badge bg-dark position-absolute">
                        <img src="img/star.png" alt="">Genreal 
                      </div>-->
    
                      <div class="badge2 bg-dark position-absolute">
                        <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                      </div> 
                    </div>
                    <!-- Others Info -->
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('upcoming')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                     
                    
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('upcoming')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item upcoming">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/new1.gif" alt="">
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
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('upcoming')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                  
                    
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('upcoming')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item ongoing">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/up2.gif" alt="">
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
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('ongoing')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                                        
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('ongoing')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item upcoming">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/up4.webp" alt="">
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
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('upcoming')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                                         
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('upcoming')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item upcoming">
                <div class="nft-card card shadow-sm border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/new7.jpg" alt="">
                      <!-- Badge -->
                      <!-- <div class="badge bg-dark position-absolute">
                        <img src="img/star.png" alt="">Genreal 
                      </div>-->
    
                      <div class="badge2 bg-dark position-absolute">
                        <span class="d-block fz-15" style="color: white;"><i class="bi bi-clock " style="color: white;"></i>&nbsp; 25 MARCH</span>
                      </div> 
                    </div>
                    <!-- Others Info -->
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('upcoming')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                    
                    
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('upcoming')}}">More Details</a></div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
              <!-- Single Card -->
              <div class="col-12 col-sm-6 col-lg-4 col-xl-3 list-item ongoing">
                <div class="nft-card card border-0">
                  <div class="card-body">
                    <div class="img-wrap"><img src="img/new4.gif" alt="">
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
                      <div class="col-8">
                        <span class="d-block fz-15" style="color: white;"> <button class="wishlist-btn " style="margin-left: 1pc;" type="button"><i class="bi"></i></button></span>
                      </div>
                      <div class="col-4 text-end">
                      <a href="{{route('ongoing')}}"> <small style="color: white;"><i class="bi bi-eye" style="color: white;"></i> 1.8K</small></a> 
    
                      </div>
                    </div><br>
                    <!-- Meta Info -->
                    <div class="row gx-2 align-items-center mt-2">
                      <h5 class="text-center">What is Lorem Ipsum?  </h5>
                      <p class="text-center">Various versions have evolved over the years, (injected humour and the like).</p><br>
                
                      <!-- <div class="col-12"><a class="btn btn-primary rounded-pill btn-sm mt-3 w-100" href="item-details.html">Place Bid</a></div> -->
                    
                    <div class="row gx-2 align-items-center mt-3">
                      <div class="col-12"><a class="btn btn-primary btn-sm rounded-pill" style="width: 100%;" href="{{route('ongoing')}}">More Details</a></div>
                      <!-- <div class="col-6 text-end"><a class="btn btn-minimal btn-sm hover-primary" href="activity.html"> <i class="bi bi-activity me-1"></i>Activity</a></div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
