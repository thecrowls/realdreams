<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 30.07.2018
 * Time: 23:10
 */

namespace Tests\Unit;


use App\Models\Company;
use App\Models\CompanyTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    use DatabaseMigrations;

    public function testCompaniesTable()
    {
        factory(Company::class)->create([
            'image' => '/upload/test.jpg'
        ]);
        $this->assertDatabaseHas('companies', ['image' => '/upload/test.jpg']);
    }

    public function testCompanyTranslationsTable()
    {
        factory(Company::class)->create([
            'image' => '/upload/test.jpg'
        ]);
        factory(CompanyTranslation::class)->create([
            'text' => 'Boil water',
            'company_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('company_translations', ['text' => 'Boil water']);
        $this->assertDatabaseHas('company_translations', ['company_id' => 1]);
    }
}