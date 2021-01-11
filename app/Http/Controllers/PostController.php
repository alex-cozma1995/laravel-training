<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //Eager loading:
        //original: $posts = Post::Paginate(10); - Postot ahogy queryvel kiveszi adatbazisbol additional queryvel kiveszi a relationship user es like-ot minden posztnak. szoval egy poszt utan + 2 query.
        //Eager loadinggal egy query-ben:
        $posts = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->Paginate(10);  //lehet irni az order by-t: Post::latest()->...

        //eager loading nelkul betolti az osszes user, osszes LIKE kulon kulon. Eager loadinggal relationshipek menten csak a hozza tartozokat

        return view('posts.index', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        auth()->user()->posts()->create([
            'body' => $request->body
        ]);

        return back();
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }

}
