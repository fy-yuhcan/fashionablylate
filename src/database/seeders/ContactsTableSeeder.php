<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Category;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate(); // 追加

    $categories = Category::all();

    foreach ($categories as $category) {
        Contact::factory()->count(7)->create([
            'category_id' => $category->id,
        ]);
    }
        
    }

}
