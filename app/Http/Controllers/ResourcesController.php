<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ResourcesController extends Controller
{

	//get the id of the loggedin user
	public function __construct()
    {
        $this->middleware('auth');
    }

	//show content (for now) by (one) Tags
	public function index(Request $request, $tagSlug = '')	
	{
		if($tagSlug){
			return Resources::where ('tags', $tagSlug)
			->get()->toJson();
		}
		return Resources::all()->toJson();
	}

	//show content searched by id of the post
	public function show(Request $request, $id) 
    {
        return Resources::find($id)->toJson();
    }

    //*********************************************
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx()
    {
        $posts = Resources::all();

        return view('post.indexx', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'title'=>'required',
        'content'=> 'required',
        'url' => 'required',
        'tags' => 'required',
        'user_id' => 'required'
      ]);
      $share = new Share([
        'title' => $request->get('title'),
        'content'=> $request->get('content'),
        'url'=> $request->get('url'),
        'user_id'=> $request->get('user_id')
      ]);
      $share->save();
      return redirect('/posts')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showw($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Share::find($id);

        return view('posts.edit', compact('post'));
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
      $request->validate([
        'title'=>'required',
        'content'=> 'required',
        'url' => 'required',
        'tags' => 'required',
      ]);

      $post = Resources::find($id);
      $post->title = $request->get('title');
      $post->content = $request->get('content');
      $post->url = $request->get('url');
      $post->tags = $request->get('tags');
      $post->save();

      return redirect('/posts')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Resources::find($id);
        $post->delete();

      return redirect('/posts')->with('success', 'Post has been deleted Successfully');
    }








}