@extends('admin_views.starter')

@section('title', '| View all news')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
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
                                <th>#</th>
                                <th>Heading</th>
                                <th>Content</th>
                                <th>Categories</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($news as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->news_heading}}</td>
                                    <td>{!! substr(strip_tags($item->news_content), 0, 100) !!}{{ strlen(strip_tags($item->news_content)) > 100 ? "..." : ""}}</td>
                                    <td>{{$item->categories}}</td>
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
                        <div class="text-center">
                        {!!$news->links(); !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
