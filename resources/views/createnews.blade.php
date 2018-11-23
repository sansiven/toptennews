@extends('admin_views.starter')

@section('title', '| Add news')

@section('stylesheets')
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create News <a href="/dashboard" class="float-right btn btn-default btn-sm">Go Back</a></div>
                <script src={{ URL::asset("ckeditor/ckeditor.js") }}></script>
                <div class="card-body">
                    {!! Form::open(['action' => 'NewsListingsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        {{Form::bsText('news_heading','',['placeholder' => 'News Heading'])}}
                        {{Form::bsTextArea('news_content','',['placeholder' => 'News Detail'])}}
                        <script>
                        CKEDITOR.addCss( "@font-face {" +
                            "font-family: 'Preeti';" +
                            "font-style: normal;" +
                            "font-weight: 400;" +
                            "src: local('Preeti'), url({{ URL::asset('css/myFont.css')}}) format('truetype');" +
                                    "}" );

                                CKEDITOR.replace( 'news_content', {
                                on: {
                                configLoaded: function() {
                                this.config.font_names += ';Preeti';
                                }
                            }
                            }	);
                        </script>
                        {{ Form::label('photo', 'Photo:')}}
                        {{Form::file('photo')}}
                        <br>
                        {{ Form::label('category_id', 'Category:') }}
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <br>

                        {{ Form::label('tags', 'Tags:') }}
                        <select name="tags[]" class="form-control select2-multi" multiple="multiple">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>
                        
                        {{Form::bsSubmit('submit',['class' => 'btn-outline-success'])}}
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
    </script>
@endsection