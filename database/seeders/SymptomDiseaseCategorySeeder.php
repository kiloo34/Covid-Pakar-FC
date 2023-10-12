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
        $datas = [
            // Ringan
            // R01,(R04,R05),(R10,R12),(R06,R08),(R13,R14),(R15,R16),R17,(R18,R19),R20,(R21,R22),(R24,R25),R26
            // 1,4,5,7,9,11,13,14,15,16,17,18,19,20,21,22,23,26,27,28
            [
                'symptom_category_id' => 1,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 4,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 5,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 7,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 9,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 11,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 13,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 14,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 15,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 16,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 17,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 18,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 19,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 20,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 21,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 22,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 23,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 26,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 27,
                'disease_category_id' => 1
            ],
            [
                'symptom_category_id' => 28,
                'disease_category_id' => 1
            ],

            // Sedang
            // R27,R02,R04,R11,R09,R07,R13,R30,R31,(R32,R33),(R28,R29),R23
            // 2,4,8,10,12,14,24,29,31,32,33,34,35,36
            [
                'symptom_category_id' => 2,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 4,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 8,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 10,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 12,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 14,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 24,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 29,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 31,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 32,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 33,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 34,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 35,
                'disease_category_id' => 2
            ],
            [
                'symptom_category_id' => 36,
                'disease_category_id' => 2
            ],

            // Berat
            // R44,(R01,R02,R03),R10,R07,R13,R28,R34,(R35,R36)
            // 1,2,3,8,11,14,30,31,38,39,40
            [
                'symptom_category_id' => 1,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 2,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 3,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 8,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 11,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 14,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 30,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 31,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 38,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 39,
                'disease_category_id' => 3
            ],
            [
                'symptom_category_id' => 40,
                'disease_category_id' => 3
            ], 

            // Delta
            [
                'symptom_category_id' => 1,
                'disease_category_id' => 4
            ],
            [
                'symptom_category_id' => 4,
                'disease_category_id' => 4
            ],
            [
                'symptom_category_id' => 5,
                'disease_category_id' => 4
            ],
            [
                'symptom_category_id' => 14,
                'disease_category_id' => 4
            ],
            [
                'symptom_category_id' => 18,
                'disease_category_id' => 4
            ],
            [
                'symptom_category_id' => 20,
                'disease_category_id' => 4
            ],
            [
                'symptom_category_id' => 28,
                'disease_category_id' => 4
            ],
            [
                'symptom_category_id' => 31,
                'disease_category_id' => 4
            ],

            // Alpha
            // R13, R42, R37,R24,R03,R17,R18,
            // 3, 14, 18, 19, 26, 41, 44
            [
                'symptom_category_id' => 3,
                'disease_category_id' => 5
            ],
            [
                'symptom_category_id' => 14,
                'disease_category_id' => 5
            ],
            [
                'symptom_category_id' => 18,
                'disease_category_id' => 5
            ],
            [
                'symptom_category_id' => 19,
                'disease_category_id' => 5
            ],
            [
                'symptom_category_id' => 26,
                'disease_category_id' => 5
            ],
            [
                'symptom_category_id' => 41,
                'disease_category_id' => 5
            ],
            [
                'symptom_category_id' => 44,
                'disease_category_id' => 5
            ],

            // Omicron
            // R06,R07,R01,R04,R10,R26,R39,R40,R41,R13, R42
            // 1, 4, 6, 7, 8, 11, 14, 28, 37, 43, 44
            [
                'symptom_category_id' => 1,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 4,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 6,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 7,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 8,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 11,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 14,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 28,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 37,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 43,
                'disease_category_id' => 6
            ],
            [
                'symptom_category_id' => 44,
                'disease_category_id' => 6
            ]
        ];
        collect($datas)->each(function ($data) { SymptomDiseaseCategory::create($data); });
        Schema::enableForeignKeyConstraints(); 
    }
}
