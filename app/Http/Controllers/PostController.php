<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = User::find(auth()->id()->user_id());
        // $posts = Post::with('user')->get()->toarray();
        $posts = User::find(Auth()->id())->posts->toArray();
        // $posts = Post::with('user')->find( Auth::user()->id );
        // dd($posts);
        $user = User::find(Auth()->id());
// dd($user->name);

        return view('posts.index',compact('posts','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->id();
// dd($user);
        return view('posts.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $posts = Post::create([
            'user_id' => $request->user_id,
            'good' => $request->good,
            'bad' => $request->bad,
            'goal' => $request->goal,
        ])->save();

        return redirect(route('posts.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {

        $posts = Post::find($post)->toArray();
// dd($posts['id']);
        return view('posts.edit',compact('posts'));
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
        $posts = Post::findOrFail($id);
            $posts->user_id = $request->user_id;
            $posts->good = $request->good;
            $posts->bad = $request->bad;
            $posts->goal = $request->goal;
            // dd($posts,$id);
        $posts->save();
        

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
            $posts->user_id ='user_id';
            $posts->good = 'good';
            $posts->bad = 'bad';
            $posts->goal = 'goal';
            // dd($posts,$id);
        $posts->delete();

        return redirect()->route('posts.index');
    }
}
