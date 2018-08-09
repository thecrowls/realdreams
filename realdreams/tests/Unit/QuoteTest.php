<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 31.07.2018
 * Time: 0:03
 */

namespace Tests\Unit;


use App\Models\Article;
use App\Models\Quote;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class QuoteTest extends TestCase
{
    use DatabaseMigrations;

    public function testQuotesTable()
    {
        factory(Article::class)->create([
            'order' => 1,
        ]);
        factory(Quote::class)->create([
            'author' => 'American',
            'text' => 'LaLand',
            'article_id' => 1
        ]);
        $this->assertDatabaseHas('quotes', ['author' => 'American']);
        $this->assertDatabaseHas('quotes', ['article_id' => 1]);
    }
}