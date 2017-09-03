<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('articles')->truncate();
        Schema::enableForeignKeyConstraints();

        $articles = factory(\App\Models\Article::class, 50)->create();
        $categories = \App\Models\Category::all();
        $categories->each(function ($category, $index) use ($articles) {
            $category->articles()->sync($articles->random(rand(1, 3)));
        });
    }
}
