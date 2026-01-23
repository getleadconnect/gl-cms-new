<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BlogTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Business Tools','slug'=> 'business-tools','created_by' => 1,'status' => 1],
            ['id' => 2, 'name' => 'Artificial Intelligent','slug' => 'artificial-intelligent','created_by' => 1,'status' => 1],
            ['id' => 3, 'name' => 'Getlead', 'slug' => 'getlead', 'created_by' => 1, 'status' => 1],
            ['id' => 4, 'name' => 'Automation', 'slug' => 'automation', 'created_by' => 1, 'status' => 1],
            ['id' => 5, 'name' => 'Customer relationships', 'slug' => 'customer-relationships', 'created_by' => 1, 'status' => 1],
            ['id' => 6, 'name' => 'Sales', 'slug' => 'sales', 'created_by' => 1, 'status' => 1],
            ['id' => 7, 'name' => 'Business', 'slug' => 'business', 'created_by' => 1, 'status' => 1],
            ['id' => 8, 'name' => 'CRM', 'slug' => 'crm', 'created_by' => 1, 'status' => 1],

        ];
        DB::table('blog_types')->insert($data);
    }
}
