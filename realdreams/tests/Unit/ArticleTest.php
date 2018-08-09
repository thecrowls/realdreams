<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 22:44
 */

namespace Tests\Unit;


use App\Models\Article;
use App\Models\ArticleTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use DatabaseMigrations;

    public function testArticlesTable()
    {
        factory(Article::class)->create([
            'order' => 1,
            'image' => '/upload/test.jpg'
        ]);
        $this->assertDatabaseHas('articles', ['order' => 1]);
    }

    public function testArticleTranslationsTable()
    {
        factory(Article::class)->create([
            'order' => 1,
            'image' => '/upload/test.jpg'
        ]);
        factory(ArticleTranslation::class)->create([
            'title' => 'How make candy?',
            'description' => 'Take sugar',
            'text' => 'Boil water',
            'article_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('article_translations', ['title' => 'How make candy?']);
    }
}