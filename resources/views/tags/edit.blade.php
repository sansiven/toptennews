@extends('admin_views.starter')

@section('title', '| Edit Tag')

@section('content')

    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
        <h2>Edit Tag</h2>
        {{Form::bsText('name',null,['placeholder' => 'Tag Name'])}}
        {{Form::bsSubmit('save changes',['class' => 'btn-outline-success btn-block'])}}
    {!! Form::close() !!}
@endsection