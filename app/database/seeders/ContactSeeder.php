<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->name = 'Email';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Phone';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'LinkedIn';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Instagram';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Twitter';
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Facebook';
        $contact->save();
    }
}
