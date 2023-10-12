<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Disease::truncate();
        Disease::create([
            'code'  => 'P01',
            'name'  => 'covid'
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
