@extends('layouts.home')

@section('content')
    <main role="main" class="main">
      <div class="album py-5">
        <div class="container">
          <div class="row-flex">
            @if($news)
              @foreach($news as $newsitem)
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="/storage/images/thumbnail/{{$newsitem->photo}}" alt="{{$newsitem->photo}}">
                    <div class="card-body">
                      <h5><strong style="color: #01388B;">{{$newsitem->news_heading}}</strong></h5>
                      <p class="card-text">{{$newsitem->news_content}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a class="btn btn-sm btn-outline-secondary" style="border: 0.5px solid #CE1127;" href="/news/{{$newsitem->id}}">पुरा पद्नुहोस</a>
                        </div>
                        <small class="text-muted">9 mins</small>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
    </main>
@endsection