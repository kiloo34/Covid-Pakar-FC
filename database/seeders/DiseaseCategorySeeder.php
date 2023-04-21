<?php

namespace Database\Seeders;

use App\Models\DiseaseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DiseaseCategory::truncate();
        DiseaseCategory::insert([
            [
                'code'  => 't01',
                'name'  => 'terinfeksi ringan',
                'disease_id' => 1
            ],
            [
                'code'  => 't02',
                'name'  => 'terinfeksi sedang',
                'disease_id' => 1
            ],
            [
                'code'  => 't03',
                'name'  => 'terinfeksi berat',
                'disease_id' => 1
            ]
        ]);
    }
}
