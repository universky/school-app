<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schools = [
            ['name' => 'SMP 1'],
            ['name' => 'SMP 2'],
            ['name' => 'SMP 3'],
            ['name' => 'SMP 4'],
            ['name' => 'SMP 5']
        ];

        foreach($schools as $sc){
            $school::create($sc);
        }
    }
}
