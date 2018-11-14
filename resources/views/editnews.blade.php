@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <!-- Form model binding way of editing things in laravel -->
                <div class="card-header">Edit News <a href="/dashboard" class="float-right btn btn-default btn-sm">Go Back</a></div>
                <div class="card-body">
                    {!! Form::model($news, ['action' => ['NewsListingsController@update', $news->id], 'method' => 'POST']) !!}
                        {{Form::bsText('news_heading',null,['placeholder' => 'News Heading'])}}
                        {{Form::bsTextArea('news_content',null,['placeholder' => 'News Detail'])}}
                        <p>Photo:</p>
                        {{Form::file('photo')}}
                        {{Form::bsText('tags',null,['placeholder' => 'Tags such as breaking, sports, politics, interview'])}}
                        {{Form::bsSubmit('submit',['class' => 'btn-outline-success'])}}
                        {{Form::hidden('_method', 'PUT')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection