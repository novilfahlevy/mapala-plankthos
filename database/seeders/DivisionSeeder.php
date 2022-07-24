<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::create(['name' => 'Divisi Mangrove', 'slug' => 'divisi-mangrove', 'description' => '']);
        Division::create(['name' => 'Divisi Lamun', 'slug' => 'divisi-lamun', 'description' => '']);
        Division::create(['name' => 'Divisi Karang', 'slug' => 'divisi-karang', 'description' => '']);
    }
}
