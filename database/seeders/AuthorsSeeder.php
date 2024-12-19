<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name'=> 'Juan',
            'nationality'=> 'Peruano',
            'birth_date'=> '2012-03-03',
        ]);
        Author::create([
            'name'=> 'Daniel',
            'nationality'=> 'Boliviano',
            'birth_date'=> '2012-03-03',
        
        ]);
    }
     
}
