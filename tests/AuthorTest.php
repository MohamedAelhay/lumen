<?php



class AuthorTest extends TestCase
{
    public function testShouldReturnAllAuthors()
    {
        $user = factory('App\Author')->create();
        $this->actingAs($user);
        $this->get('authors', []);
        $this->seeStatusCode(200);
    }

    public function testShouldReturnAuthor()
    {
        $this->get('authors/1', []);
        $this->seeStatusCode(200);
    }

    public function testShouldCreateAuthor()
    {
        $params = $params = factory(App\Author::class)->raw();
        $this->post('authors', $params, []);
        $this->seeStatusCode(200);
    }

    public function testShouldUpdateAuthor()
    {
        $params = factory(App\Author::class)->raw();
        $this->put('authors/1', $params, []);
        $this->seeStatusCode(200);
    }

    public function testShouldDeleteAuthor()
    {
        $this->delete('authors/1', [], []);
        $this->seeStatusCode(410);
    }
}
