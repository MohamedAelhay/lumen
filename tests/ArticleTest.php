<?php


use App\Article;
use Illuminate\Http\UploadedFile;
use Laravel\Lumen\Testing\WithoutMiddleware;

class ArticleTest extends TestCase
{
    use WithoutMiddleware;

    public function testShouldReturnAllArticles()
    {
        $this->get('articles', []);
        $this->seeStatusCode(200);
    }

    public function testShouldReturnArticle()
    {
        $this->get('articles/9', []);
        $this->seeStatusCode(200);
    }

    public function testShouldCreateArticle()
    {
        $params = factory('App\Article')->raw();
        $params['image'] = UploadedFile::fake()->image('fakyfake.jpg');
        $this->post('articles', $params);
        $this->seeStatusCode(200);
    }

    public function testShouldUpdateArticle()
    {
        $params = factory(Article::class)->raw();
        $params['image'] = UploadedFile::fake()->image('fakyfake.jpg');
        $this->put('articles/6', $params);
        $this->seeStatusCode(200);
    }

    public function testShouldDeleteArticle()
    {
        $this->delete('articles/1', [], []);
        $this->seeStatusCode(410);
    }
}
