
   @extends('layouts.app')

@section('content')
    <div class="divider"></div>
    <div class="divider"></div>

    <!-- Blog Details  -->
    <div class="blog-details-wrap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="text-center">
              <h1 class="display-5 fw-bold mb-4">{{$new->heading}}</h1>
              <div class="post-date border border-2 border-info rounded px-2 py-1 d-inline-block fz-14">{{date('d-M-Y', strtotime($new->created_at))}}</div>
            </div>
            <div class="mb-5"></div>
          </div>
          <div class="col-12"><img class="mb-5" src="{{$new->file_path}}" alt="" data-action="zoom"></div>
          <div class="col-10">
            <p>{{$new->description}}</p>
          </div>
          <div class="col-12">

            <div class="mb-4"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="border-top my-5"></div>
      </div>
      <div class="container" style="display:none;">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-10 col-lg-8">
            <!-- Comments Area-->
            <div class="comment-wrapper">
              <h4 class="mb-5">3 Comments</h4>
              <ol class="ps-0 list-unstyled">
                <!-- Single Comment -->
                <li class="single-comment">
                  <div class="comment-content d-flex">
                    <div class="comment-author"><img src="img/bg-img/u4.jpg" alt="author"></div>
                    <div class="comment-meta">
                      <p>You've saved our business! Thanks guys, keep up the good work! The best on the net!</p><a class="author" href="#">@designing_world</a><a class="reply" href="#reply-form"><i class="bi bi-reply-fill"></i>Reply</a>
                    </div>
                  </div>

                </li>
                <!-- Single Comment -->
                <li class="single-comment">
                  <div class="comment-content d-flex">
                    <div class="comment-author"><img src="img/bg-img/u3.jpg" alt="author"></div>
                    <div class="comment-meta">
                      <p>Absolutely wonderful! I wish I would have thought of it first. I would be lost without agency.</p><a class="author" href="#">@nft_fun</a><a class="reply" href="#reply-form"><i class="bi bi-reply-fill"></i>Reply</a>
                    </div>
                  </div>
                </li>
              </ol>
            </div>
            <div class="mb-5" id="reply-form"></div>
            <div class="contact-area">
              <h4 class="mb-5">Leave A Comment</h4>
              <form class="contact-from" action="#" method="post">
                <div class="row g-4">
                  <div class="col-12 col-lg-6">
                    <input class="form-control" type="text" name="message-name" placeholder="Your Name">
                  </div>
                  <div class="col-12 col-lg-6">
                    <input class="form-control" type="email" name="message-email" placeholder="Your Email">
                  </div>
                  <div class="col-12">
                    <textarea class="form-control" name="message" placeholder="Type your comments..."></textarea>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary rounded-pill" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="divider"></div>
    @endsection
