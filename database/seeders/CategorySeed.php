<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create ([
            'id' => '1',
            'name' => 'funtionality'
            
        ]);
        Category::create ([
            'id' => '2',
            'name' => 'Reliability'
            
        ]);
        Category::create ([
            'id' => '3',
            'name' => 'Usability'
            
        ]);
        Category::create ([
            'id' => '4',
            'name' => 'Efficiency'
            
        ]);
        Category::create ([
            'id' => '5',
            'name' => 'Maintainability'
            
        ]);
        Category::create ([
            'id' => '6',
            'name' => 'Portability'
            
        ]);

        // $faker = Factory::create();

        // foreach(range(1,5) as $id)
        // {
        //     Category::insert([
        //         'id' => $id,
        //         'name' => $faker->sentence(3)
        //     ]);
        // }
    }
}