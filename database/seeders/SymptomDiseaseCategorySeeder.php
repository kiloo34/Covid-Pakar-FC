<?php

namespace Database\Seeders;

use App\Models\SymptomDiseaseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SymptomDiseaseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        SymptomDiseaseCategory::truncate();
        SymptomDiseaseCategory::insert([
            [
                'symptom_id' => 1,
                'disease_category_id' => 1
            ],
            [
                'symptom_id' => 2,
                'disease_category_id' => 1
            ],
            [
                'symptom_id' => 3,
                'disease_category_id' => 1
            ],
            [
                'symptom_id' => 4,
                'disease_category_id' => 1
            ],
            [
                'symptom_id' => 5,
                'disease_category_id' => 1
            ],
            [
                'symptom_id' => 6,
                'disease_category_id' => 1
            ],
            [
                'symptom_id' => 7,
                'disease_category_id' => 1
            ],
            [
                'symptom_id' => 8,
                'disease_category_id' => 1
            ],
            [
                'symptom_id' => 9,
                'disease_category_id' => 1
            ],
            [
                'symptom_id' => 10,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 11,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 12,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 13,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 14,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 15,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 16,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 17,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 18,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 19,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 20,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 21,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 22,
                'disease_category_id' => 2
            ],
            [
                'symptom_id' => 24,
                'disease_category_id' => 3
            ],
            [
                'symptom_id' => 25,
                'disease_category_id' => 3
            ],
            [
                'symptom_id' => 26,
                'disease_category_id' => 3
            ],
            [
                'symptom_id' => 27,
                'disease_category_id' => 3
            ],
            [
                'symptom_id' => 28,
                'disease_category_id' => 3
            ],
        ]);
        Schema::enableForeignKeyConstraints(); 
    }
}
