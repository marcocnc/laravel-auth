<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direction = 'asc';
        $posts = Post::orderBy('id', $direction)->paginate(10);
        return view('admin.posts.index', compact('posts', 'direction'));
    }

    public function orderby($direction){
        $direction = $direction === 'asc' ? 'desc' : 'asc';
        $posts = Post::orderBy('id', $direction)->paginate(10);
        return view('admin.posts.index', compact('posts', 'direction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $form_data['slug'] = Post::generateSlug($form_data['name']);
        $form_data['start'] = date('Y-m-d');
        $form_data['end'] = date('Y-m-d');

        $new_post = new Post();


        $new_post->fill($form_data);
        $new_post->save();
        return redirect()->route('admin.posts.show', $new_post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $date_start = date_create($post->start);
        $date_start_formatted =  date_format($date_start, 'd/m/Y');

        $date_end = date_create($post->end);
        $date_end_formatted =  date_format($date_end, 'd/m/Y');
        return view('admin.posts.show', compact('post', 'date_end_formatted', 'date_start_formatted'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
