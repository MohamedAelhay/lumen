<?php


namespace App\Http\Controllers;


use App\Article;
use App\Http\Requests\Article\ArticleStoreRequest;
use App\Http\Requests\Article\ArticleUpdateRequest;
use App\Transformers\ArticleTransformer;

/**
 * @group Article Management
 *
 * APIs for managing Article
 */
class ArticleController
{
    /**
     * Show all Article
     * @authenticated
     * @transformerCollection \App\Transformers\ArticleTransformer
     */
    public function index()
    {
        return responder()->success(Article::paginate(), ArticleTransformer::class)
            ->with('Author')->only(['Author'=>'Name'])->respond();
    }
    /**
     * Show one Articles
     * @authenticated
     * @bodyParam article_id int the ID of the article
     * @transformerCollection \App\Transformers\ArticleTransformer
     */
    public function show($id)
    {
        return responder()->success(Article::findOrFail($id), ArticleTransformer::class)
            ->with('Author')->only(['Author'=>'Name'])->respond();
    }
    /**
     * Create New Article
     * @authenticated
     * @bodyParam first_title  string required Main title.
     * @bodyParam second_title string required title.
     * @bodyParam content      text   required content.
     * @bodyParam image        image  required image.
     * @bodyParam author_id    Int    required The Author's ID.
     * @transformer \App\Transformers\AuthorTransformer
     */
    public function store(ArticleStoreRequest $request)
    {
        $img = $this->upload_image($request['image']);
        $article = Article::create($request->except('image')+['image'=>$img]);

        return responder()->success($article, ArticleTransformer::class)
            ->with('Author')->only(['Author'=>'Name'])->respond();
    }
    /**
     * Create Update Article
     * @authenticated
     * @bodyParam first_title  string Main title.
     * @bodyParam second_title string title.
     * @bodyParam content      text   content.
     * @bodyParam image        image  image.
     * @bodyParam author_id    Int    The Author's ID.
     * @transformer \App\Transformers\AuthorTransformer
     */
    public function update(ArticleUpdateRequest $request, $id)
    {
        $article = Article::find($id);

        if(!$article)
            return responder()->error(404, 'Article Not Found')->respond(404);

        $img = $this->upload_image($request['image']);

        if($img)
        {
            $article->update($request->except('image')+['image'=>$img]);
        }
        else
        {
            $article->update($request->all());
        }
        return responder()->success($article, ArticleTransformer::class)
            ->with('Author')->only(['Author'=>'Name'])->respond();
    }

    /**
     * Delete Article
     * @authenticated
     * @bodyParam id Int required The Author's ID.
     * @response 200 {
     *  "message": "deleted",
     * }
     */
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
        $name = time().'.'.$image->getClientOriginalName();

//        $destinationPath = storage_path('/public/images');
        $image->move('/home/hp/Documents/Lumen/public/images', $name);

        return 'images/' . $name;
    }
}
