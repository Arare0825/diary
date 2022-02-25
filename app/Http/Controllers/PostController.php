<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = User::find(Auth()->id())->posts->paginate(15);
        $user = User::find(Auth()->id());

       $posts = Post::where('user_id',Auth::id())->orderBy('date','desc')->paginate(15);
// dd($posts);

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
    public function store(PostRequest $request)
    {
        // dd($request);


        $posts = Post::create([
            'user_id' => $request->user_id,
            'date' => $request->date,
            'good' => $request->good,
            'bad' => $request->bad,
            'goal' => $request->goal,
        ])->save();

        return redirect(route('posts.index'));
    }


    public function show($post)
    {
                $posts = Post::find($post)->toArray();
                $user = User::find(Auth()->id());
// dd($user->name);
        return view('posts.show',compact('posts','user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
// dd($post);
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
    public function update(PostRequest $request, $id)
    {
        $posts = Post::findOrFail($id);
            $posts->user_id = $request->user_id;
            $posts->date = $request->date;
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
