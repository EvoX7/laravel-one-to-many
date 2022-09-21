<?php
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class Posts_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $allUser = User::all();

        for ($i = 0; $i < 40; $i++) {
            $newPost = new Post();
            $newPost->user_id = $faker->randomElement($allUser)->id;
            $newPost->title = $faker->realText(40);
            $newPost->author = $faker->userName(40);
            $newPost->post_date = $faker->dateTime();
            $newPost->post_img = $faker->imageUrl();
            $newPost->post_content = $faker->paragraphs(3, true);

            $newPost->save();
        }
    }
}
