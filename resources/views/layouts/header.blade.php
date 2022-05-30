<header class="header-area">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Navbar Brand --><a class="navbar-brand" href="#"><img class="light-logo" src="{{asset('img/logo.jpeg')}}" style="width: 70%;" alt=""><img class="dark-logo" src="{{asset('img/logo.jpeg')}}"  style="width: 70%;"alt=""></a>
            <!-- Navbar Toggler -->
            <button class="navbar-toggler myheader" type="button" data-bs-toggle="collapse" data-bs-target="#funtoNav" aria-controls="funtoNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-grid"></i></button>
            <!-- Navbar -->
            <div class="collapse navbar-collapse" id="funtoNav" style="justify-content: right; margin-right: -133px;">
                <ul class="navbar-nav navbar-nav-scroll" >
                    <li class="">
                        <a class="nav-link me-4 d-md-block active" href="{{route('index')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Home" aria-label="Home"><img src="img/home.png"></a>
                    </li>

                    <li >
                        <a class="nav-link me-4 d-md-block mt-2" href="{{route('collection')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Discover" aria-label="Discover"><img src="img/discover.png"></a>
                    </li>



                    <li >
                        <a class="nav-link me-4 d-md-block " href="{{route('blog')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="News" aria-label="News"><img src="img/news.png"></a>
                        <!-- <a class="nav-link " href="blog.html"> </a> -->
                    </li>
                    <li >
                        <a class="nav-link me-4  d-md-block " href="{{route('help-questions')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Faqs" aria-label="Faqs"><img src="img/faqs.png"></a>
                        <!-- <a class="nav-link " href="help-center.html"><i class=" me-1 bi bi-patch-question" style="font-size: 30px;"></i> </a> -->
                    </li>

                    <li >
                        <a class="nav-link   d-md-block " href="{{route('contact')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Contact Us" aria-label="Contact Us"> <img src="img/communicate 1.png"></a>
                        <!-- <a class="nav-link " href="help-center.html"><i class="me-1 bi bi-person-lines-fill" style="font-size: 30px;"></i> </a> -->
                    </li>

                </ul>
                <!-- Header Meta -->
                <!-- Trigger the modal with a button -->
                <!-- <div id="myOverlay" class="overlay newoverlay">
                    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                    <div class="overlay-content">
                        <form action="/action_page.php">
                            <input type="text" class="neww" placeholder="Search Here.." name="search">
                            <div class="newwbtn">

                            <button type="submit" class="" style="background-color: #ffc107;    font-size: 17px; color: white; width:26%; font-weight: bold;">SEARCH</button>
                            </div>
                      
                        </form>
                    </div>
                </div>
            <div class="closee">
                <i class="fa fa-search openBtn" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Search " aria-label="Search " style="    font-size: 22px;
            color: #c2d4f8;
            background-color: transparent;
            margin-top: -7px;"  onclick="openSearch()"></i>
            </div> -->
                <!-- User Dropdown -->
                <div class="user-dropdown dropdown mx-3">

                </div>
                <!-- Create New Button --><a class="btn btn-warning btn-sm rounded-pill" style="background-color:#DC6A2A;border:#DC6A2A;" href="{{route('create')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Create " aria-label="Create "><i class="bi bi-plus-circle" style="font-size: 18px; color: white;"></i></a>

            </div>
        </div>

    </nav>
</header>


