@extends('layouts.app')

@section('content')

<div class="divider"></div>
<div class="divider"></div>

<!-- Contact Wrapper -->
<div class="contact-wrapper">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Contact Form -->
            <div class="col-12 col-lg-6">
                <div class="contact-form">
                    <h1 class="mb-3">Let's talk about <br> all things!</h1>
                    <p class="mb-5">Write to us or give us a call. We will reply to you as soon as possible. But yes, it can take up to 24 hours.</p>
                    <form action="#" method="POST">
                        <div class="row g-4">
                            <div class="col-12">
                                <input class="form-control" id="name" type="text" placeholder="Full Name" value="" name="name" required>
                            </div>
                            <div class="col-12">
                                <input class="form-control" id="email" type="email" placeholder="Email Address" name="email" value="" required>
                            </div>
                            <div class="col-12">
                                <input class="form-control" id="topics" type="text" placeholder="Questions" name="topics" value="">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="message" name="message" placeholder="Write in details"></textarea>
                            </div>
                            <div class="col-12">
                                <center> <button class="btn btn-primary btn-lg rounded-pill" type="submit">Send now</button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Google Maps -->
            <div class="col-md-6" style="text-align-last: center; font-size: 2pc;" >

                <div class="footer-widget-area"><a class="d-block mb-4" href="index.html">
                        <h2>DON'T BE SHY !</h2>
                        <p class="text-center">  Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</h2>
                        </p><br>
                        <p class="mb-0" style="font-size: 25px; color: white; margin-right: 5pc;"><span style="color: #ffc107; font-family: fantasy;">
              <i class="bi bi-telephone"></i></span> &nbsp;+123 456 789 </p>  <br>

                        <p class="mb-0" style=" font-size: 25px;color: white;"> <span style="color: #ffc107;"><i class="bi bi-envelope"></i></span> help@example.com</p>
                        <!-- Social Icon -->
                        <h3 class="mt-4 mb-3" style="color: #ffc107;">Join the community</h3>
                        <div class="footer-social-icon  align-items-center
            flex-wrap">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facbook">
                                <img src="img/core-img/icons8-facebook.svg" alt=""></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">&nbsp;&nbsp;
                                <img src="img/core-img/icons8-twitter.svg" alt=""></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">&nbsp;&nbsp;
                                <img src="img/core-img/icons8-instagram.svg" alt=""></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Slack">&nbsp;&nbsp;
                                <img src="img/core-img/icons8-slack.svg" alt=""></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube">&nbsp;&nbsp;
                                <img src="img/core-img/icons8-player.svg" alt=""></a></div>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="divider"></div>
<!-- Dark Light Wrapper -->
<div class="dark-light-wrapper" data-aos="zoom-in" data-aos-duration="750" data-aos-delay="200">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <h5 class="mb-0 text-white" data-aos="fade-up" data-aos-duration="750" data-aos-delay="500">Light mode is available!</h5>
            <!-- Switch -->

        </div>
    </div>
</div>
@endsection

