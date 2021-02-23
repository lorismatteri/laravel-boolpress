<?php

use App\Article;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 100; $i++) { 
            $newPost = new Article();
            $newPost->title = $faker->word();
            $newPost->body = $faker->text(300);
            $newPost->save();
        }
    }
}
