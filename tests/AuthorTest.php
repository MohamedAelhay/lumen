<?php


class AuthorTest extends TestCase
{
    public function testShouldReturnAllAuthors()
    {
        $this->get('authors', []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
           'data' => ['*' =>
                        [
                            'ID',
                            'Name',
                            'E-mail',
                            'Github',
                            'Twitter',
                            'Location',
                            'Latest Article Publish'
                        ]
           ],
            "pagination" => [
                        "count",
                        "total",
                        "perPage",
                        "currentPage",
                        "totalPages",
                        "links"
            ]
        ]);
    }

    public function testShouldReturnAuthor()
    {
        $this->get('authors/1', []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => [
                        'ID',
                        'Name',
                        'E-mail',
                        'Github',
                        'Twitter',
                        'Location',
                        'Latest Article Publish'
            ]
        ]);
    }

    public function testShouldCreateAuthor()
    {
        $params = [
            'name' => 'Mohamed',
            'email' => 'test@test.com',
            'location' => 'Alex',
            'twitter' => 'test@test.com',
            'github' => 'test@test.com',
            'latest_publish' => '4'
        ];
        $this->post('authors', $params, []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => [
                'ID',
                'Name',
                'E-mail',
                'Github',
                'Twitter',
                'Location',
                'Latest Article Publish'
            ]
        ]);
    }

    public function testShouldUpdateAuthor()
    {
        $params = [
            'name' => 'Mohamed up',
            'email' => 'test@test.com',
            'location' => 'Alex',
            'twitter' => 'test@test.com',
            'github' => 'test@test.com',
            'latest_publish' => '4'
        ];
        $this->put('authors/15', $params, []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => [
                'ID',
                'Name',
                'E-mail',
                'Github',
                'Twitter',
                'Location',
                'Latest Article Publish'
            ]
        ]);
    }

    public function testShouldDeleteAuthor()
    {
        $this->delete('authors/15', [], []);
        $this->seeStatusCode(410);
        $this->seeJsonStructure([
            'status',
            'message'
        ]);
    }
}
