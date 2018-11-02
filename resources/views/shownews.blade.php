@extends("layouts.home")

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2><a href="">{{$news->news_heading}}</a></h2>
                <span class="blue"><hr></span>
                <p><img src="/storage/images/{{$news->photo}}" width="100%;"></p>
                <p>{{$news->news_content}}</p>
            <hr>
        </div>
        <div class="col-md-4">
        
        <!--Add Space -->
        </div>
        <br>
        </div>
        <p><a href="/news" class="float-right btn btn-default btn-sm">पछाडी जानुहोस्</a></p>
@endsection