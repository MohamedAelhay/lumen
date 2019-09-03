<?php


class ArticleTest extends TestCase
{
    public function testShouldReturnAllArticles()
    {
        $this->get('articles', []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => ['*' =>
                [
                    'ID',
                    'First Title',
                    'Second Title',
                    'Content',
                    'Image'
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

    public function testShouldReturnArticle()
    {
        $this->get('articles/1', []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => [
                'ID',
                'First Title',
                'Second Title',
                'Content',
                'Image'
            ]
        ]);
    }

    public function testShouldCreateArticle()
    {
        $params = [
            'first_title' => 'First',
            'second_title' => 'Second',
            'content' => 'For Testing ...',
            'image' => '',
            'author_id' => '1',
        ];
        $this->post('articles', $params, []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => [
                'ID',
                'First Title',
                'Second Title',
                'Content',
                'Image'
            ]
        ]);
    }

    public function testShouldUpdateArticle()
    {
        $params = [
            'first_title' => 'First',
            'second_title' => 'Second',
            'content' => 'For Testing ...',
            'image' => '',
            'author_id' => '1',
        ];
        $this->put('articles/15', $params, []);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'data' => [
                'ID',
                'First Title',
                'Second Title',
                'Content',
                'Image'
            ]
        ]);
    }

    public function testShouldDeleteArticle()
    {
        $this->delete('articles/15', [], []);
        $this->seeStatusCode(410);
        $this->seeJsonStructure([
            'status',
            'message'
        ]);
    }
}
