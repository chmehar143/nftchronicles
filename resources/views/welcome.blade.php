<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Funto - HTML NFT Marketplace">
    <!-- Title-->
    <title>Home -  NFT Marketplace</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/core-img/favicon.ico')}}" type="image/x-icon">
    <!-- All CSS Stylesheet-->
    <link rel="stylesheet" href="{{asset('css/all-css-libraries.css')}}">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <style>
        .openBtn {
            background: #f1f1f1;
            border: none;
            padding: 10px 15px;
            font-size: 20px;
            cursor: pointer;
        }

        .openBtn:hover {
            background: #bbb;
        }

        .overlay {
            height: 100%;
            width: 100%;
            display: none;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0, 0.9);
        }

        .overlay-content {
            position: relative;
            top: 46%;
            width: 80%;
            text-align: center;
            /* margin-top: 30px; */
            margin: auto;
            margin-right: -59px;
        }

        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
            cursor: pointer;
            color: white;
        }

        .overlay .closebtn:hover {
            color: #ccc;
        }
        @media  (max-width:375px) {
            .overlay-content{
                width: 100%;
            }
        }

        .overlay input[type=text] {
            padding: 15px;
            font-size: 17px;
            border: none;
            float: left;
            width: 50%;
            background: white;
        }

        .overlay input[type=text]:hover {
            background: #f1f1f1;
        }

        .overlay button {
            float: left;
            width: 12%;
            padding: 15px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;
        }

        .overlay button:hover {
            background: #bbb;
        }

    </style>
</head>
<body>
<!-- Preloader-->
<div class="preloader" id="preloader">
    <div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
</div>
<!-- Header Area-->
<header class="header-area">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Navbar Brand --><a class="navbar-brand" href="home-1.html"><img class="light-logo" src="img/core-img/logowhite.png" style="width: 70%;" alt=""><img class="dark-logo" src="img/core-img/logowhite.png"  style="width: 70%;"alt=""></a>
            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#funtoNav" aria-controls="funtoNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-grid"></i></button>
            <!-- Navbar -->
            <div class="collapse navbar-collapse" id="funtoNav" style="    justify-content: right; margin-right: -133px;">
                <ul class="navbar-nav navbar-nav-scroll" >
                    <li class="">
                        <a class="nav-link d-md-block active" href="home-1.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Home" aria-label="Home"><i class=" me-1 bi bi-house-door" style="font-size: 30px;"></i></a>
                        <!-- <a class="nav-link " href="home-1.html"><i class=" me-1 bi bi-house-door" style="font-size: 30px;"></i> </a> -->
                    </li>

                    <li >
                        <a class="nav-link me-1  d-md-block " href="collections.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Discover" aria-label="Discover"><i class="me-1 bi bi-grid-3x3-gap"style="font-size: 30px;"></i></a>
                        <!-- <a class="nav-link " href="collections.html"><i class="me-1 bi bi-grid-3x3-gap"style="font-size: 30px;"></i> </a> -->
                    </li>



                    <li >
                        <a class="nav-link me-1 d-md-block " href="blog.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="News" aria-label="News"><i class="me-1 bi bi-newspaper" style="font-size: 30px;"></i></a>
                        <!-- <a class="nav-link " href="blog.html"> </a> -->
                    </li>
                    <li >
                        <a class="nav-link me-1  d-md-block " href="help-questions.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Faqs" aria-label="Faqs"><i class="me-1 bi bi-patch-question" style="font-size: 30px;"></i></a>
                        <!-- <a class="nav-link " href="help-center.html"><i class=" me-1 bi bi-patch-question" style="font-size: 30px;"></i> </a> -->
                    </li>

                    <li >
                        <a class="nav-link me-1  d-md-block " href="contact.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Contact Us" aria-label="Contact Us"> <i class=" bi bi-person-lines-fill" style="font-size: 30px;"></i></a>
                        <!-- <a class="nav-link " href="help-center.html"><i class="me-1 bi bi-person-lines-fill" style="font-size: 30px;"></i> </a> -->
                    </li>

                </ul>
                <!-- Header Meta -->
                <!-- Trigger the modal with a button -->
                <div id="myOverlay" class="overlay">
                    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                    <div class="overlay-content">
                        <form action="/action_page.php">
                            <input type="text" placeholder="Search Here.." name="search">
                            <button type="submit" style="background-color: #ffc107;    font-size: 17px; color: white; width:26%; font-weight: bold;">SEARCH</button>
                        </form>
                    </div>
                </div>

                <i class="fa fa-search openBtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Search " aria-label="Search " style="    font-size: 22px;
            color: #c2d4f8;
            background-color: transparent;
            margin-top: -7px;"  onclick="openSearch()"></i>
                <!-- User Dropdown -->
                <div class="user-dropdown dropdown mx-3">

                </div>
                <!-- Create New Button --><a class="btn btn-warning btn-sm rounded-pill" href="create-new.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Create " aria-label="Create "><i class="bi bi-plus-circle" style="font-size: 18px; color: white;"></i></a>

            </div>
        </div>
        </div>
    </nav>
</header>
<!-- Welcome Wrapper  -->
<div class="welcome-area pt-120">
    <div class="container">
        <div class="row align-items-center">
            <!-- Welcome Content -->
            <div class="col-12 col-sm-10 col-md-6">
                <div class="welcome-content mb-5 mb-md-0">
                    <h2><span style="color: #ffc107;"> Explore,</span> buy, and  sell exceptional NFTs.</h2>
                    <p class="mb-4"  >Projects like Dastardly Ducks prove that the  &amp;  NFT community can come together to support each other in the most challenging circumstances.</p>
                    <div class="hero-btn-group"><a class="btn btn-warning rounded-pill mt-3 me-1" href="blog.html">Explore Now<i class="ms-2 bi bi-arrow-right"></i></a><a class="btn btn-minimal hover-primary mt-3" href="collections.html"><i class="me-2 bi bi-grid-3x3-gap"></i>All Collections</a></div>
                </div>
            </div>
            <!-- Welcome Thumb -->
            <div class="col-12 col-sm-9 col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/1.gif" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/7.gif" class="d-block w-100" alt="...">
                        </div>
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
<!-- <div class="divider"></div> -->

<div class="live-bidding-wrapper bg-gray pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-7">
                <div class="section-heading d-flex align-items-center">
                    <div class="spinner-grow text-danger" style="background-color: red;" role="status"><span class="visually-hidden">Loading...</span></div>
                    <h2 class="mb-0 ms-2">Featured & Upcoming NFT's </h2>
                </div>
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
                        <div class="img-wrap"><img src="img/1.gif" alt="">
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
                                <a href="item-details.html"> <small style="color: white;"><img src="img/diamond.png " class="mb-1" style="width: 18px;"> 1.8K</small></a>

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
                        <div class="img-wrap"><img src="img/7.gif" alt="">
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
                        <div class="img-wrap"><img src="img/m5.gif" alt="">
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
                        <div class="img-wrap"><img src="img/m6.gif" alt="">
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
        </div>
    </div>
    <br><br>

</div>

<!-- <div class="divider"></div> -->

<div class="live-bidding-wrapper bg-gray pt-100 pb-100">
    <div class="container">
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
                        <div class="img-wrap"><img src="img/1.gif" alt="">
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
                        <div class="img-wrap"><img src="img/7.gif" alt="">
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
                        <div class="img-wrap"><img src="img/m5.gif" alt="">
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
                        <div class="img-wrap"><img src="img/m6.gif" alt="">
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
    <br><Br>
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <!-- Featured Card -->
                <div class="nft-card card border-0">
                    <div class="card-body">
                        <div class="img-wrap"><img src="img/1.gif" alt="">
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
                        <div class="img-wrap"><img src="img/7.gif" alt="">
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
                        <div class="img-wrap"><img src="img/m5.gif" alt="">
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
                        <div class="img-wrap"><img src="img/m6.gif" alt="">
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
                    <!-- Blog Card -->
                    <div class="col-12 col-lg-6 col-xxl-6">
                        <div class="card blog-card border-0 bg-transparent">
                            <div class="img-wrap"><a href="blog-details.html"><img src="img/22.jpg" alt=""></a></div>
                            <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="blog-details.html">The beginner’s guide to creating &amp; selling digital art NFTs.</a>
                                <!-- <ul class="entry-meta">
                                  <div class="flex flex-wrap items-center pt-0 pb-0 md:pb-2" style="--tw-text-opacity: 1;
                                  color: rgb(132 204 22/var(--tw-text-opacity));">
                                    <span class="d-block fz-12" style="color: white;"><i class="bi bi-bag me-1 text-warning" style="
                                      FONT-SIZE: 1PC;"></i>11 stock available</span>

                                      </div>
                              </ul> -->
                                <p style="margin-top: 1pc;">It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-warning btn-sm rounded-pill" href="blog-details.html">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card -->


                    <!-- Blog Card -->
                    <div class="col-12 col-lg-6 col-xxl-6">
                        <div class="card blog-card border-0 bg-transparent">
                            <div class="img-wrap"><a href="blog-details.html"><img src="img/22.jpg" alt=""></a></div>
                            <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="blog-details.html">The beginner’s guide to creating &amp; selling digital art NFTs.</a>
                                <!-- <ul class="entry-meta">
                                  <div class="flex flex-wrap items-center pt-0 pb-0 md:pb-2" style="--tw-text-opacity: 1;
                                  color: rgb(132 204 22/var(--tw-text-opacity));">
                                    <span class="d-block fz-12" style="color: white;"><i class="bi bi-bag me-1 text-warning" style="
                                      FONT-SIZE: 1PC;"></i>11 stock available</span>

                                      </div>
                              </ul> -->
                                <p style="margin-top: 1pc;">It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-warning btn-sm rounded-pill" href="blog-details.html">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card -->

                    <!-- Blog Card -->
                    <div class="col-12 col-lg-6 col-xxl-6">
                        <div class="card blog-card border-0 bg-transparent">
                            <div class="img-wrap"><a href="blog-details.html"><img src="img/22.jpg" alt=""></a></div>
                            <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="blog-details.html">The beginner’s guide to creating &amp; selling digital art NFTs.</a>
                                <!-- <ul class="entry-meta">
                                  <div class="flex flex-wrap items-center pt-0 pb-0 md:pb-2" style="--tw-text-opacity: 1;
                                  color: rgb(132 204 22/var(--tw-text-opacity));">
                                    <span class="d-block fz-12" style="color: white;"><i class="bi bi-bag me-1 text-warning" style="
                                      FONT-SIZE: 1PC;"></i>11 stock available</span>

                                      </div>
                              </ul> -->
                                <p style="margin-top: 1pc;">It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-warning btn-sm rounded-pill" href="blog-details.html">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card -->


                    <!-- Blog Card -->
                    <div class="col-12 col-lg-6 col-xxl-6">
                        <div class="card blog-card border-0 bg-transparent">
                            <div class="img-wrap"><a href="blog-details.html"><img src="img/22.jpg" alt=""></a></div>
                            <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="blog-details.html">The beginner’s guide to creating &amp; selling digital art NFTs.</a>
                                <!-- <ul class="entry-meta">
                                  <div class="flex flex-wrap items-center pt-0 pb-0 md:pb-2" style="--tw-text-opacity: 1;
                                  color: rgb(132 204 22/var(--tw-text-opacity));">
                                    <span class="d-block fz-12" style="color: white;"><i class="bi bi-bag me-1 text-warning" style="
                                      FONT-SIZE: 1PC;"></i>11 stock available</span>

                                      </div>
                              </ul> -->
                                <p style="margin-top: 1pc;">It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-warning btn-sm rounded-pill" href="blog-details.html">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Card -->





                </div>

            </div>
            <div class="col-12 col-sm-5 col-lg-4 col-xxl-3">
                <h4 class="mb-2">Advirtisment Posts</h4>
                <div class="border-top mb-4"></div>
                <br>
                <div class="popular-blog">
                    <img src="img/1.gif" class="img-fluid ">
                </div><br>

                <div class="popular-blog">
                    <img src="img/7.gif" class="img-fluid ">
                </div>


                <br>
                <div class="popular-blog">
                    <img src="img/w1.gif" class="img-fluid ">
                </div>

            </div>
        </div><br><Br><br>
        <div class="hero-btn-group" ><a class="btn btn-warning rounded-pill mt-3 me-1" href="blog.html"> Click Here To More  News<i class="ms-2 bi bi-arrow-right"></i></a>

        </div><br><Br>
    </div>
    <hr>

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
                        <div class="col-12 col-lg-6 col-xxl-3">
                            <div class="card blog-card border-0 bg-transparent">
                                <div class="img-wrap"><a href="question-details.html"><img src="img/22.jpg" alt=""></a></div>
                                <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="question-details.html">The beginner’s guide to creating &amp; selling digital art NFTs.</a>
                                    <p style="margin-top: 1pc;">It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-warning btn-sm rounded-pill" href="blog-details.html">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card -->


                        <!-- Blog Card -->
                        <div class="col-12 col-lg-6 col-xxl-3">
                            <div class="card blog-card border-0 bg-transparent">
                                <div class="img-wrap"><a href="question-details.html"><img src="img/22.jpg" alt=""></a></div>
                                <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="question-details.html">The beginner’s guide to creating &amp; selling digital art NFTs.</a>
                                    <p style="margin-top: 1pc;">It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-warning btn-sm rounded-pill" href="blog-details.html">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card -->

                        <!-- Blog Card -->
                        <div class="col-12 col-lg-6 col-xxl-3">
                            <div class="card blog-card border-0 bg-transparent">
                                <div class="img-wrap"><a href="question-details.html"><img src="img/22.jpg" alt=""></a></div>
                                <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="question-details.html">The beginner’s guide to creating &amp; selling digital art NFTs.</a>
                                    <p style="margin-top: 1pc;">It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-warning btn-sm rounded-pill" href="question-details.html">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card -->


                        <!-- Blog Card -->
                        <div class="col-12 col-lg-6 col-xxl-3">
                            <div class="card blog-card border-0 bg-transparent">
                                <div class="img-wrap"><a href="question-details.html"><img src="img/22.jpg" alt=""></a></div>
                                <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="question-details.html">The beginner’s guide to creating &amp; selling digital art NFTs.</a>
                                    <p style="margin-top: 1pc;">It's crafted with the latest trend of design with all modern approaches.</p><a class="btn btn-warning btn-sm rounded-pill" href="question-details.html">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
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
                    <center>   <img src="img/advirtisment.gif" class="img-fluid"></center>
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



