
@if($news)
@foreach($news as $newsitem)
    <img src="img/new1.jpg" width="30%;" style="float: left; padding-right: 10px;">
    <h5><strong><a href="#">heading</a></strong></h5>
    <p><span>२०७३ असार २ बिहीवार</span></p>
    <p>content</p><hr>
@endforeach
@endif