<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Image;

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
        return view('homepage')->with('newsitems', $newsitems);
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
        return view('shownews')->with('news', $news);

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

}
