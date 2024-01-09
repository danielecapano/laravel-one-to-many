<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */



    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_project = new Project();

            $new_project->preview = $faker->imageUrl(800, 600, 'project', true);
            $new_project->title = $faker->sentence(5);
            $new_project->slug = Str::slug($new_project->title, '-');
            $new_project->description = $faker->text(300);
            $new_project->creation_date = $faker->dateTimeThisYear();
            $new_project->save();
        }
    }
}
