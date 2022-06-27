@extends('layouts.app')

@section('content')



<!-- Contact Wrapper -->
<div class="contact-wrapper"style="background: #1F1F1F !important;"><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Contact Form -->
            <div class="col-lg-2"></div>
            <div class="col-12 col-lg-8" data-aos="flip-left" data-aos-duration="800">
                <div class="contact-form">
                    <h1 class="mb-3">Let's talk about <br> all things!</h1>
                    <p class="mb-5">Write to us or give us a call. We will reply to you as soon as possible. But yes, it can take up to 24 hours.</p>
                    <form method="post" action="{{route('contact.save')}}" >
                        @csrf
                        <div class="row g-4">
                            <div class="col-12">
                                <input class="form-control @error('full_name') is-invalid @enderror" id="name" type="text" placeholder="Full Name" value="" name="full_name" required>
                                @error('full_name')
                                <div class="validation">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email Address" name="email" value="" required>
                                @error('email')
                                <div class="validation">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <input class="form-control @error('question') is-invalid @enderror" id="topics" type="text" placeholder="Questions" name="question" value="">
                                @error('question')
                                <div class="validation">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <textarea class="form-control @error('description') is-invalid @enderror" id="message" name="description" placeholder="Write in details"></textarea>
                                @error('description')
                                <div class="validation">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <center> <button class="btn btn-lg rounded-pill" style="background-color:#DC6A2A;" type="submit">Send now</button></center>
                            </div>
                        </div>
                    </form><br><br><Br>
                </div>
            </div>
            <!-- Google Maps -->
            <!-- <div class="col-md-6" style="text-align-last: center; font-size: 2pc;" >

                <div class="footer-widget-area"><a class="d-block mb-4" href="index.html">
                        <h2>DON'T BE SHY !</h2>
                        <p class="text-center" data-aos="slide-up" data-aos-duration="800">  Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</h2>
                        </p><br>
                        <p class="mb-0" data-aos="flip-left" data-aos-duration="800" style="font-size: 25px; color: white; margin-right: 5pc;"><span style="color: #DC6A2A; font-family: fantasy;">
              <i class="bi bi-telephone"></i></span> &nbsp;+123 456 789 </p>  <br>

                        <p class="mb-0" style=" font-size: 25px;color: white;"> <span style="color: #DC6A2A;"><i class="bi bi-envelope"></i></span> help@example.com</p>
                        <h3 class="mt-4 mb-3" style="color: #DC6A2A;" data-aos="flip-left" data-aos-duration="800">Join the community</h3>
                        <div class="footer-social-icon  align-items-center flex-wrap">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facbook" data-aos="flip-left" data-aos-duration="800">
                                <img src="img/core-img/icons8-facebook.svg" alt=""></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">&nbsp;&nbsp;
                                <img src="img/core-img/icons8-twitter.svg" alt=""></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">&nbsp;&nbsp;
                                <img src="img/core-img/icons8-instagram.svg" alt=""></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Slack">&nbsp;&nbsp;
                                <img src="img/core-img/icons8-slack.svg" alt=""></a><a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Youtube">&nbsp;&nbsp;
                                <img src="img/core-img/icons8-player.svg" alt=""></a></div>
                </div>

            </div>  -->

        </div>
    </div>
</div>
<!-- Dark Light Wrapper -->

@endsection

