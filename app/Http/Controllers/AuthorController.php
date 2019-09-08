<?php


namespace App\Http\Controllers;


use App\Author;
use App\Http\Requests\Author\AuthorStoreRequest;
use App\Http\Requests\Author\AuthorUpdateRequest;
use App\Transformers\AuthorTransformer;
use Flugg\Responder\Responder;

/**
 * @group Author management
 *
 * APIs for managing authors
 */
class AuthorController
{
    /**
     * Show all Authors
     * @authenticated
     * @transformerCollection \App\Transformers\AuthorTransformer
     */
    public function index()
    {
        return responder()->success(Author::paginate(), AuthorTransformer::class)->respond();
    }

    /**
     * Select one Author
     * @authenticated
     * @bodyParam author_id int the ID of the author
     * @transformer \App\Transformers\AuthorTransformer
     */
    public function show($author_id)
    {
        return responder()->success(Author::findOrFail($author_id), AuthorTransformer::class)->respond();
    }
    /**
     * Create New Author
     * @bodyParam name string required The Author name.
     * @bodyParam password password required The Author's password.
     * @bodyParam e-mail e-mail required The Author's e-mail.
     * @bodyParam location address required The Author's address.
     * @bodyParam twitter e-mail required The Author's twitter.
     * @bodyParam github e-mail required The Author's github.
     * @bodyParam last_published The last Author's article.
     * @transformer \App\Transformers\AuthorTransformer
     */
    public function store(AuthorStoreRequest $request)
    {
        $author = Author::create($request->all());

        return responder()->success($author, AuthorTransformer::class)->respond();
    }
    /**
     * Update Author's details
     * @authenticated
     * @bodyParam name string The Author name.
     * @bodyParam password password The The Author's password.
     * @bodyParam e-mail e-mail The Author's e-mail.
     * @bodyParam location address The The Author's address.
     * @bodyParam twitter e-mail The The Author's twitter.
     * @bodyParam github e-mail The The Author's github.
     * @bodyParam last_published The last Author's article.
     * @transformer \App\Transformers\AuthorTransformer
     */
    public function update(AuthorUpdateRequest $request, $author_id)
    {
        $author = Author::find($author_id);

        if(!$author)
            return responder()->error(404, 'Author Not Found')->respond(404);

        $author->update($request->all());
        return responder()->success($author, AuthorTransformer::class)->respond();
    }
    /**
     * Delete Author
     * @authenticated
     * @bodyParam id Int required The Author's ID.
     * @response 200 {
     *  "message": "deleted",
     * }
     */
    public function destroy($author_id)
    {
        $author = Author::find($author_id);

        if(!$author)
            return responder()->error(404, 'Author Not Found')->respond(404);

        $author->delete();
        return response(['status'=>410, 'message'=>'deleted'], 410);
    }
}
