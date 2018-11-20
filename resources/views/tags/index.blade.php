@extends('admin_views.starter')

@section('title', '| All Tags')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- End of col-md-8 -->
        <div class="col-md-3">
            <div class="card card-body bg-light">
                {!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
                    <h2>New Tag</h2>
                    {{Form::bsText('name','',['placeholder' => 'Tag Name'])}}
                    {{Form::bsSubmit('submit',['class' => 'btn-outline-success btn-block'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection