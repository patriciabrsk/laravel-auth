<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->unique()->words(4, true);
            $newPost->author = $faker->name();
            $newPost->img_url = "https://picsum.photos/id/$i/350/500";
            $newPost->content = $faker->paragraphs(6, true);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
        }
    }
}
