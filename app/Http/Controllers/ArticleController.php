<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Resources\Article as ArticleResource;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $articles = Article::paginate(15);

        return ArticleResource::collection($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return ArticleResource
     */
    public function store(Request $request)
    {
        $artice = $request->isMethod('put') ? Article::findOrFail($request->article_id) : new Article;

        $artice->id = $request->input('article_id');
        $artice->title = $request->input('title');
        $artice->body = $request->input('body');

        if($artice->save()){
            return new ArticleResource($artice);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return ArticleResource
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return new ArticleResource($article);
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
     * @return ArticleResource
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if($article->delete()){
            return new ArticleResource($article);
        }
    }
}
