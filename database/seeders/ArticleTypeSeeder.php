<?php

namespace Database\Seeders;

use App\Models\ArticleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ArticleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Getting started','created_by' => 1,'slug' => 'account-signup-setup'],
            ['id' => 2, 'name' => 'User Onboarding','created_by' => 1,'slug' => 'lead-management'],
            ['id' => 3, 'name' => 'Customization' , 'created_by' => 1,'slug' => 'deal-managament'],
            ['id' => 4, 'name' => 'Task Setup' , 'created_by' => 1,'slug' => 'task-setup'],
            ['id' => 5, 'name' => 'Campaign Management' , 'created_by' => 1,'slug' => 'campaign-management'],
            ['id' => 6, 'name' => 'Integrations' , 'created_by' => 1,'slug' => 'integrations'],

        ];
        DB::table('article_types')->insert($data);
    }
}
