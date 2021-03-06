<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Image;
use App\Comment;

class NewsListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsitems = News::orderBy('created_at', 'desc')->get();
        $news_main_items = News::where('tags', 'main')->take(6)->get();
        $news_sports_items = News::where('tags', 'sports')->take(3)->get();
        $news_spiritual_items = News::where('tags', 'spiritual')->take(4)->get();
        return view('homepage')->with('newsitems', $newsitems)
                                ->with('news_main_items', $news_main_items)
                                ->with('news_spiritual_items', $news_spiritual_items)
                                ->with('news_sports_items', $news_sports_items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createnews');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'news_heading' => 'required',
            'news_content' => 'required',
            'tags' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $originalImage = $request->file('photo');
        // get filename withextension
        $filenameWithExt =  $request->file('photo')->getClientOriginalName();
        
        //upload image
        $path = $request->file('photo')->storeAs('public/images', $filenameWithExt);
        //added from youtube tutorial at https://www.youtube.com/watch?v=9ojIvwXXwV4
        $request->file('photo')->storeAs('public/images/thumbnail', $filenameWithExt);
        
        //Resize image here
        $thumbnailpath = public_path('storage/images/thumbnail/'.$filenameWithExt);
        $img = Image::make($thumbnailpath)->resize(400, 150, function($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbnailpath);
        //finished adding from tutorial

        //Create news
        $news = new News;
        $news->news_heading = $request->input('news_heading');
        $news->news_content = $request->input('news_content');
        $news->photo = $filenameWithExt;
        $news->tags = $request->input('tags');

        //save to database
        $news->save();

        return  redirect('/dashboard')->with('success', 'News Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);

        //to pass multiple variables in view use chained with or make an array and pass them 
        /* 
        $data = [ 
            'name' => $name,
            'id' => $id
        ];
        */
        $comments = Comment::orderBy('news_id')
                                    ->where('news_id', $id)
                                    ->get();
        return view('shownews')->with('news', $news)->with('news_id', $id)->with('comments', $comments);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('editnews')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'news_heading' => 'required',
            'news_content' => 'required',
            'tags' => 'required'
        ]);

        //Create news
        $news = News::find($id);
        $news->news_heading = $request->input('news_heading');
        $news->news_content = $request->input('news_content');
        $news->photo = $request->input('photo');
        $news->tags = $request->input('tags');

        //save to database
        $news->save();

        return  redirect('/dashboard')->with('success', 'News Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return  redirect('/dashboard')->with('success', 'News Deleted');
    }

    public function breakingnews()
    {
        $news = News::where('tags', 'breaking')->get();
        return $news;
    }
    
    public function category($category=null)
    {   
        if($category){
            $news = News::where('tags', $category)->get();
        }
        return view('showcategory')->with('news', $news);
    }

}
