
    @extends('layouts.app')

@section('content')



    <div class="help-center-wrapper"style="background: #1F1F1F !important;"><br><br><br><br><br><br><br>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-lg-6">
            <div class="help-form text-center">
              <h2 class="display-6 fw-bold mb-4" data-aos="fade-up" data-aos-duration="800">How can I help you?</h2>
              <!-- Form -->
              <form action="#">
                <input class="form-control" type="search" placeholder="Write your question">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
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
              <div class="card-body p-4">
                <h4 class="mb-3" data-aos="slide-right" data-aos-duration="800">Popular Questions</h4>
                <div class="border-top mb-3"></div><a class="d-block fz-16 hover-primary mt-3" href="{{route('question-details',$faq->id)}}"style="color: white;">How do I create an account?</a><a class="d-block fz-16 hover-primary mt-3" href="question-details.html" style="color: white;">How do I sell an NFT?</a><a class="d-block fz-16 hover-primary mt-3" href="question-details.html" style="color: white;">How do I create an NFT?</a><a class="d-block fz-16 hover-primary mt-3" href="question-details.html" style="color: white;">Where can I find NFT sales?</a><a class="d-block fz-16 hover-primary mt-3" href="question-details.html" style="color: white;">How can I stay safe and protect my NFTs?</a>
              </div>
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
