
    @extends('layouts.app')

@section('content')

<div class="blog-wrap" style="background: #272727!important"><br><br><Br><Br>
<h1 class="text-center" > NFT Guide</h1>
<p class="text-center ">Stay in tune with the latest NFT Guide to make meaningful choices and insightful decisions.<Br>
Join our community and get the latest news on NFTs , <b style="color:#DC6A2A">Digital Art</b>, Gaming and Metaverse!</p>
<br><br><br>


    <div class="container">
        <div class="row g-5">
            <div class="col-12 col-sm-7 col-lg-12 col-xxl-12">
                <div class="row g-4">





                    <!-- Blog Card -->
                    @foreach($articles as $article)
                    <div class="col-12 col-lg-3  mt-5  col-xxl-3">
                        <div class="card blog-card border-0 bg-transparent">
                            <div class="img-wrap"><a href="{{route('question-details',$article->id)}}">
                              <img src="{{$article->file_path}}" alt=""></a></div>
                            <div class="card-body p-0"><a class="post-title mb-2 hover-primary mt-2 " href="{{route('question-details',$article->id)}}">{{$article->question}}</a>

                                <p style="margin-top: 1pc;">{{Str::limit($article->answer, 90, $end='.......')}}</p>

                                <i class="bi bi-calendar " style="color: #DC6A2A;"></i>&nbsp; <small class="me-5">{{date('d-m-Y', strtotime($article->created_at))}}</small>
                                <i class="bi bi-clock " style="color: #DC6A2A;"></i>&nbsp; <small>{{$article->created_at->diffForHumans()}}</small>

                            </div>
                        </div>
                    </div>
                    <!-- Blog Card -->
                    <!-- Blog Card -->
                    @endforeach

                </div>
                <!-- Pagination -->
                <div class="funto-pagination mt-70">
                    {{$articles->links('pagination')}}
                </div>
            </div>

        </div>
    </div>
</div>

    <div class="help-center-wrapper"style="background: #1F1F1F !important;"><br><br><br><br><br><br><br>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-lg-6">
            <div class="help-form text-center">
              <!-- <h2 class="display-6 fw-bold mb-4" data-aos="fade-up" data-aos-duration="800">How can I help you?</h2> -->
              <!-- Form -->
                <!-- <form method="post" action="{{route('search')}}"  class="form">
                    @csrf
                <input class="form-control" type="search" name="search" placeholder="Write your question">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form> -->
            </div>
          </div>
        </div>
      </div>
      <div class="divider"></div>
      <div class="container">
        <div class="row g-5">
          <div class="col-12 col-lg-8">
            <h4 class="mb-4" data-aos="slide-left" data-aos-duration="800">All Questions</h4>
            @foreach($faqs as $faq)
            <div class="card shadow-sm mt-3" style="height: 51px;">
              <div class="card-body px-4" data-aos="fade-up" data-aos-duration="800"><a class="d-block fz-18 hover-primary" href="{{route('question-details',$faq->id)}}" style="color: white;margin-top: 8px;">{{$faq->question}}</a></div>
            </div>
              @endforeach
          </div>
          <div class="col-12 col-lg-4">
            <div class="  border-0 mt-2">
              <h4 class="mb-2" data-aos="flip-left" data-aos-duration="800">Advirtisment Posts</h4>
              <div class="border-top mb-4"></div>
               <br>
                @foreach ($advirtisements as $key => $advirtisement)
                    <div class="popular-blog">
                        <img src="{{$advirtisement->file_path}}" class="img-fluid ">
                    </div>
                    <br>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
