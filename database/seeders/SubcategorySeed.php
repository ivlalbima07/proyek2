<?php

namespace Database\Seeders;
use Faker\Factory;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;


class SubcategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'id' => '1',
            'name' => 'Suitability'
        ]);
        Subcategory::create([
            'id' => '2',
            'name' => 'Accurateness'
        ]);
        Subcategory::create([
            'id' => '3',
            'name' => 'Interoperability'
        ]);
        Subcategory::create([
            'id' => '4',
            'name' => 'Security'
        ]);
        Subcategory::create([
            'id' => '5',
            'name' => 'Functionality Compliance'
        ]);
        Subcategory::create([
            'id' => '6',
            'name' => 'Maturity'
        ]);
        Subcategory::create([
            'id' => '7',
            'name' => 'Fault Tolerance'
        ]);
        Subcategory::create([
            'id' => '8',
            'name' => 'Recoverability'
        ]);
        Subcategory::create([
            'id' => '9',
            'name' => 'Reliability Compliance'
        ]);
        Subcategory::create([
            'id' => '10',
            'name' => 'Understandability'
        ]);
        Subcategory::create([
            'id' => '11',
            'name' => 'Learnability'
        ]);
        Subcategory::create([
            'id' => '12',
            'name' => 'Operability'
        ]);
        Subcategory::create([
            'id' => '13',
            'name' => 'Attractiveness'
        ]);
        Subcategory::create([
            'id' => '14',
            'name' => 'Usability Compliance'
        ]);
        Subcategory::create([
            'id' => '15',
            'name' => 'Recoverability'
        ]);
        Subcategory::create([
            'id' => '16',
            'name' => 'Time behavior'
        ]);
        Subcategory::create([
            'id' => '17',
            'name' => 'resource utilization'
        ]);
        Subcategory::create([
            'id' => '18',
            'name' => 'Efficiency Compliance'
        ]);
        Subcategory::create([
            'id' => '19',
            'name' => 'Analysability'
        ]);
        Subcategory::create([
            'id' => '20',
            'name' => 'Changeability'
        ]);
        Subcategory::create([
            'id' => '21',
            'name' => 'Stability'
        ]);
        Subcategory::create([
            'id' => '22',
            'name' => 'Testability'
        ]);
        Subcategory::create([
            'id' => '23',
            'name' => 'Adaptability'
        ]);
        Subcategory::create([
            'id' => '24',
            'name' => 'Instability'
        ]);
        Subcategory::create([
            'id' => '25',
            'name' => 'co-existence'
        ]);
        Subcategory::create([
            'id' => '26',
            'name' => 'Replacability'
        ]);
    }
}