<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Symptom::truncate();
        Symptom::insert([
            [
                'name' => 'flu'
            ],
            [
                'name' => 'batuk'
            ],
            [
                'name' => 'panas'
            ],
        ]);
        Schema::enableForeignKeyConstraints(); 
    }
}
