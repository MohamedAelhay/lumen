<?php


namespace App\Http\Middleware;

use App\Author;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAuthorExistsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $author = Author::find($request->route('author'));

        if(!$author)
            return responder()->error(404, 'Author Not Found')->respond(404);

        $request->attributes->add(['author' => $author]);

        return $next($request);
    }
}
