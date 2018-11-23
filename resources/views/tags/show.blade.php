@extends('admin_views.starter')

@section('title', "| $tag->name Tag")

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $tag->name }} Tag <small>{{$tag->news()->count()}} Posts</small></h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-block float-right">Edit</a>
        </div>
        <div class="col-md-2">
            {{ Form::open(['route' => ['tags.destroy', $tag->id ], 'method' => 'DELETE']) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}
            {{ Form::close() }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Tags</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tag->news as $newsitem)
                        <tr>
                            <th>{{$newsitem->id}}</th>
                            <td>{{ $newsitem->title}}</td>
                            <td>
                                @foreach($newsitem->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @endforeach
                            </td>
                            <td><a href="{{ route('news.show', $news->id) }}" class="btn btn-default btn-xs">view</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </div>
    
    
@endsection