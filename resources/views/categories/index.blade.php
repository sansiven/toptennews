@extends('admin_views.starter')

@section('title', '|Categories')
@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- End of col-md-8 -->
        <div class="col-md-3">
            <div class="card card-body bg-light">
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
                    <h2>New Category</h2>
                    {{Form::bsText('name','',['placeholder' => 'Category Name'])}}
                    {{Form::bsSubmit('submit',['class' => 'btn-outline-success btn-block'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection