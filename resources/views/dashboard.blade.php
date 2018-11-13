@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard 
                    <span class="float-right"> 
                        <a href="/news/create" class="btn btn-success btn-sm">Add News</a>
                    </span>
                </div>

                <div class="card-body">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your news</h3>
                    @if(count($news))
                        <table class="table table-striped">
                            <tr>
                                <th>Heading</th>
                                <th>Content</th>
                                <th>Tags</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($news as $item)
                                <tr>
                                    <td>{{$item->news_heading}}</td>
                                    <td>{{ strip_tags($item->news_content)}}</td>
                                    <td>{{$item->tags}}</td>
                                    <td><a class="float-right btn btn-default" href="/news/{{$item->id}}/edit">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['NewsListingsController@destroy',$item->id], 'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])}}
                                            
                                        {!! Form::close() !!} 
                                    </td> 
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
