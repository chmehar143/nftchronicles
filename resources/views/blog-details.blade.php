
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
              <h1 class="display-5 fw-bold mb-4">The beginner’s guide to creating &amp; selling digital art NFTs.</h1>
              <div class="post-date border border-2 border-info rounded px-2 py-1 d-inline-block fz-14">Oct 19, 2022</div>
            </div>
            <div class="mb-5"></div>
          </div>
          <div class="col-12"><img class="mb-5" src="img/bg-img/44.jpg" alt="" data-action="zoom"></div>
          <div class="col-10">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, animi, numquam. Nam suscipit iste enim deleniti vitae facere earum doloribus, tempora alias quas voluptatibus aut, voluptates qui nihil, quisquam quos.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quibusdam, nam porro cupiditate itaque doloribus commodi aut mollitia repellendus. Cum consequuntur nihil, itaque numquam aspernatur nisi quo soluta tempora rem?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet tempore officia, ab, pariatur harum quae cupiditate quia nisi atque qui tempora quis neque, molestiae doloribus repudiandae excepturi cum vero similique, aliquid laboriosam. Tempore vitae, quod rem architecto eum a dolores eveniet dolor aperiam hic alias suscipit, animi.</p>
            <h2 class="mb-3">10 tips for avoiding scams and staying safe.</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente enim eligendi natus ratione, quia, illo reiciendis voluptas nostrum expedita eum libero. Officiis sapiente non, totam numquam dolor. Dolores qui impedit voluptatem accusamus odio modi mollitia reiciendis quod tenetur accusantium optio soluta excepturi adipisci quidem nobis, totam reprehenderit consectetur omnis, nemo ea voluptatum.</p>
          </div>
          <div class="col-12">
           
            <div class="mb-4"></div>
          </div>
          <div class="col-10">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur aliquam mollitia accusantium debitis dolore soluta temporibus, laborum, fuga tempora adipisci molestias. Nobis similique nulla eveniet incidunt reprehenderit nam, accusantium asperiores iure. Quas voluptatem, facere facilis repellat!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis asperiores, quo suscipit quaerat deserunt ullam et ab, dolor, architecto totam culpa temporibus. Quo, quidem. Molestiae, deserunt impedit neque.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, sed explicabo! Debitis harum ut dolore cupiditate quidem tempore eos aut beatae sint quis nostrum, quas necessitatibus fugiat suscipit a veritatis laudantium?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel ea eveniet impedit eius facere eos distinctio temporibus sit.</p>
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
