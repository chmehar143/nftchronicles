
@extends('layouts.app')

@section('content')

    <div class="divider"></div>
    <div class="divider"></div>

    <!-- Blog -->
    <div class="blog-wrap">
      <div class="container">
        <div class="row g-5">
          <div class="col-12 col-sm-7 col-lg-8 col-xxl-8">
            <div class="row g-4">
                @foreach($news as $new)
              <div class="col-12 col-lg-6 col-xxl-12">
                <div class="card blog-card border-0 bg-transparent">
                  <div class="img-wrap"><a href="{{route('blog-details',$new->id)}}"><img src="{{$new->file_path}}" alt=""></a></div>
                  <div class="card-body p-3"><a class="post-title mb-2 hover-primary" href="{{route('blog-details',$new->id)}}">{{$new->heading}}</a>

                    <p style="margin-top: 1pc;">
                      {{$new->description}}
                    </p><a class="btn btn-warning btn-sm rounded-pill" href="{{route('blog-details',$new->id)}}">Read more<i class="ms-1 bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="funto-pagination mt-70">
                {{$news->links('pagination')}}
            </div>
          </div>
          <div class="col-12 col-sm-5 col-lg-4 col-xxl-4">
            <h4 class="mb-2">Popular News</h4>
            <div class="border-top mb-4"></div>


              @foreach ($pnews as $key => $advirtisement)
                  <div class="popular-blog">
                      <a href="{{route('blog-details',$advirtisement->id)}}"><img src="{{$advirtisement->file_path}}" class="img-fluid "></a>
                  </div><br>
                  <br>
              @endforeach



    <br><br>
            <h4 class="mb-2">Advirtisment Posts</h4>
     <div class="border-top mb-4"></div>
      <br>

              @foreach ($advirtisements as $key => $advirtisement)
            <div class="popular-blog">
              <img src="{{$advirtisement->file_path}}" class="img-fluid ">
          </div><br>
          <br>
              @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="divider"></div>
    @endsection
