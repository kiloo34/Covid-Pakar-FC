<?php

namespace Database\Seeders;

use App\Models\SymptomCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SymptomCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        SymptomCategory::truncate();
        $datas = [
            [
                'name' => 'Kering',
                'code' => 'R01',
                'symptom_id' => 1
            ],
            [
                'name' => 'Berdahak',
                'code' => 'R02',
                'symptom_id' => 1
            ],
            [
                'name' => 'berkepanjangan',
                'code' => 'R03',
                'symptom_id' => 1
            ],
            
            [
                'name' => 'berlendir',
                'code' => 'R04',
                'symptom_id' => 2
            ],
            [
                'name' => 'berair',
                'code' => 'R05',
                'symptom_id' => 2
            ],
            [
                'name' => 'bersin',
                'code' => 'R39',
                'symptom_id' => 2
            ],

            [
                'name' => 'diatas 37,2 derajat celcius',
                'code' => 'R06',
                'symptom_id' => 3
            ],
            [
                'name' => 'diatas 39 derajat celcius',
                'code' => 'R07',
                'symptom_id' => 3
            ],
            [
                'name' => 'suhu tubuh tidak menentu',
                'code' => 'R08',
                'symptom_id' => 3
            ],
            [
                'name' => 'suhu badan tidak turun',
                'code' => 'R09',
                'symptom_id' => 3
            ],

            [
                'name' => 'sakit tenggorokan',
                'code' => 'R10',
                'symptom_id' => 4
            ],
            [
                'name' => 'tenggorokan nyeri',
                'code' => 'R11',
                'symptom_id' => 4
            ],
            [
                'name' => 'Tidak mengalami',
                'code' => 'R12',
                'symptom_id' => 4
            ],
           
            [
                'name' => 'sesak nafas',
                'code' => 'R13',
                'symptom_id' => 5
            ],
            [
                'name' => 'tidak mengalami sesak nafas',
                'code' => 'R14',
                'symptom_id' => 5
            ],

            [
                'name' => 'normal',
                'code' => 'R15',
                'symptom_id' => 6
            ],
            [
                'name' => 'cepat',
                'code' => 'R16',
                'symptom_id' => 6
            ],

            [
                'name' => 'tidak berfungsi',
                'code' => 'R17',
                'symptom_id' => 7
            ],
           
            [
                'name' => 'berfungsi',
                'code' => 'R18',
                'symptom_id' => 8
            ],
            [
                'name' => 'tidak berfungsi',
                'code' => 'R19',
                'symptom_id' => 8
            ],

            [
                'name' => 'menurun',
                'code' => 'R20',
                'symptom_id' => 9
            ],
           
            [
                'name' => 'mengalami',
                'code' => 'R21',
                'symptom_id' => 10
            ],
            [
                'name' => 'tidak',
                'code' => 'R22',
                'symptom_id' => 10
            ],
            [
                'name' => 'diare hebat',
                'code' => 'R23',
                'symptom_id' => 10
            ],
            [
                'name' => 'sakit perut',
                'code' => 'R43',
                'symptom_id' => 10
            ],

            [
                'name' => 'mengalami',
                'code' => 'R24',
                'symptom_id' => 11
            ],
            [
                'name' => 'tidak',
                'code' => 'R25',
                'symptom_id' => 11
            ],

            [
                'name' => 'merasa lelah, tidak berenergi dan cenderung ingin tidur',
                'code' => 'R26',
                'symptom_id' => 12
            ],

            [
                'name' => 'ke luar negeri',
                'code' => 'R27',
                'symptom_id' => 13
            ],
            [
                'name' => 'ke luar kota dengan pasien',
                'code' => 'R44',
                'symptom_id' => 13
            ],
            
            [
                'name' => 'sakit kepala',
                'code' => 'R28',
                'symptom_id' => 14
            ],
            [
                'name' => 'tidak sakit kepala',
                'code' => 'R29',
                'symptom_id' => 14
            ],
            
            [
                'name' => 'nyeri pada badan',
                'code' => 'R30',
                'symptom_id' => 15
            ],

            [
                'name' => 'susah bernafas panjang',
                'code' => 'R31',
                'symptom_id' => 16
            ],

            [
                'name' => 'ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki ',
                'code' => 'R32',
                'symptom_id' => 17
            ],
            [
                'name' => 'tidak ada ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki ',
                'code' => 'R33',
                'symptom_id' => 17
            ],
            [
                'name' => 'wajah, bibir dan kuku terdapat kebiruan ',
                'code' => 'R40',
                'symptom_id' => 17
            ],

            [
                'name' => 'dibawah 90%',
                'code' => 'R34',
                'symptom_id' => 18
            ],

            [
                'name' => 'ada',
                'code' => 'R35',
                'symptom_id' => 19
            ],
            [
                'name' => 'tidak',
                'code' => 'R36',
                'symptom_id' => 19
            ],

            [
                'name' => 'ya',
                'code' => 'R37',
                'symptom_id' => 20
            ],
            [
                'name' => 'tidak',
                'code' => 'R38',
                'symptom_id' => 20
            ],

            [
                'name' => 'pucat',
                'code' => 'R41',
                'symptom_id' => 21
            ],

            [
                'name' => 'nyeri dada',
                'code' => 'R42',
                'symptom_id' => 22
            ],
        ];
        collect($datas)->each(function ($data) { SymptomCategory::create($data); });
        Schema::enableForeignKeyConstraints();
    }
}
