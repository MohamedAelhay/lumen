<?php


namespace App\Http\Controllers;


use App\Author;
use App\Http\Requests\Author\AuthorStoreRequest;
use App\Http\Requests\Author\AuthorUpdateRequest;
use App\Transformers\AuthorTransformer;
use Flugg\Responder\Responder;

class AuthorController
{
    public function index()
    {
        return responder()->success(Author::paginate(), AuthorTransformer::class)->respond();
    }

    public function show($author_id)
    {
        return responder()->success(Author::findOrFail($author_id), AuthorTransformer::class)->respond();
    }

    public function store(AuthorStoreRequest $request)
    {
        $author = Author::create($request->all());

        return responder()->success($author, AuthorTransformer::class)->respond();
    }

    public function update(AuthorUpdateRequest $request, $author_id)
    {
        $author = Author::find($author_id);

        if(!$author)
            return responder()->error(404, 'Author Not Found')->respond(404);

        $author->update($request->all());
        return responder()->success($author, AuthorTransformer::class)->respond();
    }

    public function destroy($author_id)
    {
        $author = Author::find($author_id);

        if(!$author)
            return responder()->error(404, 'Author Not Found')->respond(404);

        $author->delete();
        return response(['status'=>410, 'message'=>'deleted'], 410);
    }
}
