@extends('admin_views.starter')

@section('title', '| Edit news')

@section('stylesheets')
    {!! Html::style('css/select2.min.css') !!}
@endsection

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
                        {{ Form::label('photo', 'Photo:')}}
                        {{Form::file('photo')}}
                        <br>
                        {{ Form::label('category_id', 'Category:') }}
                        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
                        <br>
                        {{ Form::label('tags', 'Tags:') }}
                        {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
                        <br>
                        <br>
                        {{Form::bsSubmit('submit',['class' => 'btn-outline-success'])}}
                        {{Form::hidden('_method', 'PUT')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascripts')
    {!!Html::script('js/select2.min.js')!!} 
    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($news->tags()->allRelatedIds()) !!}).trigger('change');
    </script>
@endsection