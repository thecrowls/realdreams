<?php
/**
 * Created by PhpStorm.
 * User: Valeria
 * Date: 31.07.2018
 * Time: 0:01
 */

namespace Tests\Unit;


use App\Models\Contact;
use App\Models\ContactTranslation;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use DatabaseMigrations;

    public function testContactsTable()
    {
        factory(Contact::class)->create([
            'email' => 'test@test.com',
            'contact_phone' => '+998992192911',
            'fax' => '+998997771234'
        ]);
        $this->assertDatabaseHas('contacts', ['email' => 'test@test.com']);
    }

    public function testContactTranslationsTable()
    {
        factory(Contact::class)->create([
            'email' => 'test@test.com',
            'contact_phone' => '+998992192911',
            'fax' => '+998997771234'
        ]);
        factory(ContactTranslation::class)->create([
            'address' => 'Toronto, Lion Gate Street, 17',
            'contact_id' => 1,
            'locale' => 'en'
        ]);
        $this->assertDatabaseHas('contact_translations', ['address' => 'Toronto, Lion Gate Street, 17']);
        $this->assertDatabaseHas('contact_translations', ['contact_id' => 1]);
    }
}