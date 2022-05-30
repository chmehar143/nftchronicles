
@extends('layouts.app')

@section('content')


    <div class="help-center-wrapper" style="background: #1F1F1F !important;"><br><br><br><br><br><br><br>
          <div class="container" data-aos="flip-left" data-aos-duration="800">
        <div class="row g-5">
          <div class="col-12 col-lg-8">
            <h2 class="mb-4 fw-bold display-6">{{$faq->question}}</h2>
            <p>{{$faq->answer}}</p>
            <img class="my-3 rounded" src="{{$faq->file_path}}" alt="" data-action="zoom">

          </div>
          <div class="col-12 col-lg-4">
            <div class="  border-0 mt-2">
              <div class="card-body p-4">
                <h4 class="mb-3">Related Questions</h4>
                <div class="border-top mb-3"></div>
                  @foreach($faqs as $faq)
                  <a class="d-block fz-16 hover-primary mt-3" href="{{route('question-details',$faq->id)}}">{{$faq->question}}</a>
                  @endforeach
              </div>
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
          </div>
        </div>
      </div>
    </div>
@endsection
