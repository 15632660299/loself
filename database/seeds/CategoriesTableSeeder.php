<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        \DB::table('categories')->truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'name' => '媒体聚焦',
                'type' => 'article',
            ],
            [
                'name' => '教育评论',
                'type' => 'article',
            ],
            [
                'name' => '教改动态',
                'type' => 'article',
            ],
            [
                'name' => '政策解读',
                'type' => 'article',
            ],
        ];
        foreach ($data as $datum) {
            \App\Models\Category::create($datum);
        }
    }
}
