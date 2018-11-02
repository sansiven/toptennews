@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create News <a href="/dashboard" class="float-right btn btn-default btn-sm">Go Back</a></div>

                <div class="card-body">
                    {!! Form::open(['action' => 'NewsListingsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        {{Form::bsText('news_heading','',['placeholder' => 'News Heading'])}}
                        {{Form::bsTextArea('news_content','',['placeholder' => 'News Detail'])}}
                        <p>Photo:</p>
                        {{Form::file('photo')}}
                        {{Form::bsText('tags','',['placeholder' => 'Tags such as breaking, sports, politics, interview'])}}
                        {{Form::bsSubmit('submit',['class' => 'btn-outline-success'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection