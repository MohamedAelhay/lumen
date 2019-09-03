<?php


namespace App\Http\Controllers;


use App\Article;
use App\Http\Requests\Article\ArticleStoreRequest;
use App\Http\Requests\Article\ArticleUpdateRequest;
use App\Transformers\ArticleTransformer;

class ArticleController
{
    public function index()
    {
        return responder()->success(Article::paginate(), ArticleTransformer::class)->with('Author')->only(['Author'=>'Name'])->respond();
    }

    public function show($id)
    {
        return responder()->success(Article::findOrFail($id), ArticleTransformer::class)->with('Author')->only(['Author'=>'Name'])->respond();
    }

    public function store(ArticleStoreRequest $request)
    {
        $img = $this->upload_image($request->file('image'));
        $article = Article::create($request->except('image')+['image'=>$img]);

        return responder()->success($article, ArticleTransformer::class)->with('Author')->only(['Author'=>'Name'])->respond();
    }

    public function update(ArticleUpdateRequest $request, $id)
    {
        $article = Article::find($id);

        if(!$article)
            return responder()->error(404, 'Article Not Found')->respond(404);

        $img = $request->file('image');

        if($img)
        {
            $article->update($request->except('image')+['image'=>$img]);
        }
        else
        {
            $article->update($request->all());
        }

        return responder()->success($article, ArticleTransformer::class)->with('Author')->only(['Author'=>'Name'])->respond();
    }

    public function destroy($id)
    {
        $article = Article::find($id);

        if(!$article)
            return responder()->error(404, 'Author Not Found')->respond(404);

        $article->delete();
        return response(['status'=>410, 'message'=>'deleted'], 410);
    }

    private function upload_image($image)
    {
        $name = time().'.'.$image->getClientOriginalExtension();
//        $destinationPath = storage_path('/public/images');
        $image->move(('images'), $name);

        return $name;
    }
}
