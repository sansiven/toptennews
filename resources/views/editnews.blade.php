@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit News <a href="/dashboard" class="float-right btn btn-default btn-sm">Go Back</a></div>

                <div class="card-body">
                    {!! Form::open(['action' => ['NewsListingsController@update', $news->id], 'method' => 'POST']) !!}
                        {{Form::bsText('news_heading',$news->news_heading,['placeholder' => 'News Heading'])}}
                        {{Form::bsTextArea('news_content',$news->news_content,['placeholder' => 'News Detail'])}}
                        {{Form::bsText('photo',$news->photo,['placeholder' => 'Photo'])}}
                        {{Form::bsText('tags',$news->tags,['placeholder' => 'Tags such as breaking, sports, politics, interview'])}}
                        {{Form::bsSubmit('submit',['class' => 'btn-outline-success'])}}
                        {{Form::hidden('_method', 'PUT')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection