@extends("layouts.home")

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2><a href="">{{$news->news_heading}}</a></h2>
                <span class="blue"><hr></span>
                <p><img src="/storage/images/{{$news->photo}}" width="100%;"></p>
                <p>{{$news->news_content}}</p>
        </div>
        <div class="col-md-4">
        
        <!--Add Space -->
        </div>
        <br>
        </div>
        <!-- Add Share buttons -->
        <div class="row">
            <div class="share_box clearfix">
                <label>Share:</label>
                <ul class="social_icons clearfix">
                @php
                    $uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    @endphp

                    <li>
                        <a title="share on facebook" href="https://www.facebook.com/sharer/sharer.php?u={{$uri}}" class="fab fa-facebook">&nbsp;</a>
                    </li>

                    <!--<li>
                        <a href="javascript:void(0);" onclick="fb_share('{{$uri}}', '{{$news->title}}')" class="fa fa-facebook" title="share on facebook">&nbsp;</a>
                    </li>-->
                    <li>
                        <a title="share on twitter" href="https://twitter.com/home?status={{$uri}}" class="fab fa-twitter">&nbsp;</a>
                    </li>
                </ul>
                <span class="float-right"><p><a href="/news" class="float-right btn btn-default btn-sm">पछाडी जानुहोस्</a></p></span>
            </div>
        </div>

        <!-- Add Comment Section -->
        <div class="row">
            <h5 class="box_header">प्रतिक्रिया दिनुहोस</h5>
            <p class="padding_top_30">तपाईको इमेल गोप्य राखिनेछ !!</p>
            <div class="row">
                {!! Form::open(['action' => 'NewsListingsController@store', 'method' => 'POST']) !!}    
                    <div class="col-md-6">                   
                        {{Form::bsText('name','',['placeholder' => 'नाम (अनिवार्य)'])}}
                        {{Form::bsText('email','',['placeholder' => 'इमेल (अनिवार्य)'])}}
                    </div>  
                    <div class="col-md-6">
                        {{Form::bsTextArea('comment','',['placeholder' => 'प्रतिक्रिया दिनुहोस'])}}
                    </div>
                    {{Form::bsSubmit('submit',['class' => 'btn-outline-primary'])}}
                </div>
                {!! Form::close() !!}
            </div>
            
            <!-- <p class="padding_top_30" id="thank_you">प्रतिक्रिया दिनुभएकोमा धन्यवाद |</p>
            
            <form class="comment_form margin_top_15" id="comment_form"  action=''>
            {{csrf_field()}}
                <div class="column column_1_3" style="float: left;">
                    <input class="text_input" id="name" name="name" type="text"  placeholder="नाम (अनिवार्य)">
                </div>
                <div class="column column_1_3">
                <input class="text_input" name="email" id="email" type="text" placeholder="इमेल (अनिवार्य)" required>
                </div>
                
                
                    <textarea name="comment" id="comment" placeholder="प्रतिक्रिया दिनुहोस"  required></textarea>


                    <select name='article_id' id="article_id" style="display:none;">
                            <option>{{$news->id}}</option>
                    </select>
                
                <div>
                    <input type="submit" class="more active" id="post_comment" style="float: left;" value="पेश गर्नुहोस">
                </div>
                
            </form> -->
            <br>
        </div>
@endsection