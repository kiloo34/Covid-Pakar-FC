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
                'kode' => 'R01',
                'symptom_id' => 1
            ],
            [
                'name' => 'Berdahak',
                'kode' => 'R02',
                'symptom_id' => 1
            ],
            [
                'name' => 'berkepanjangan',
                'kode' => 'R03',
                'symptom_id' => 1
            ],
            
            [
                'name' => 'berlendir',
                'kode' => 'R04',
                'symptom_id' => 2
            ],
            [
                'name' => 'berair',
                'kode' => 'R05',
                'symptom_id' => 2
            ],
            [
                'name' => 'bersin',
                'kode' => 'R39',
                'symptom_id' => 2
            ],

            [
                'name' => 'diatas 37,2 derajat celcius',
                'kode' => 'R06',
                'symptom_id' => 3
            ],
            [
                'name' => 'diatas 39 derajat celcius',
                'kode' => 'R07',
                'symptom_id' => 3
            ],
            [
                'name' => 'suhu tubuh tidak menentu',
                'kode' => 'R08',
                'symptom_id' => 3
            ],
            [
                'name' => 'suhu badan tidak turun',
                'kode' => 'R09',
                'symptom_id' => 3
            ],

            [
                'name' => 'sakit tenggorokan',
                'kode' => 'R10',
                'symptom_id' => 4
            ],
            [
                'name' => 'tenggorokan nyeri',
                'kode' => 'R11',
                'symptom_id' => 4
            ],
            [
                'name' => 'Tidak mengalami',
                'kode' => 'R12',
                'symptom_id' => 4
            ],
           
            [
                'name' => 'sesak nafas',
                'kode' => 'R13',
                'symptom_id' => 5
            ],
            [
                'name' => 'tidak mengalami sesak nafas',
                'kode' => 'R14',
                'symptom_id' => 5
            ],

            [
                'name' => 'normal',
                'kode' => 'R15',
                'symptom_id' => 6
            ],
            [
                'name' => 'cepat',
                'kode' => 'R16',
                'symptom_id' => 6
            ],

            [
                'name' => 'tidak berfungsi',
                'kode' => 'R17',
                'symptom_id' => 7
            ],
           
            [
                'name' => 'berfungsi',
                'kode' => 'R18',
                'symptom_id' => 8
            ],
            [
                'name' => 'tidak berfungsi',
                'kode' => 'R19',
                'symptom_id' => 8
            ],

            [
                'name' => 'menurun',
                'kode' => 'R20',
                'symptom_id' => 9
            ],
           
            [
                'name' => 'mengalami',
                'kode' => 'R21',
                'symptom_id' => 10
            ],
            [
                'name' => 'tidak',
                'kode' => 'R22',
                'symptom_id' => 10
            ],
            [
                'name' => 'diare hebat',
                'kode' => 'R23',
                'symptom_id' => 10
            ],
            [
                'name' => 'sakit perut',
                'kode' => 'R43',
                'symptom_id' => 10
            ],

            [
                'name' => 'mengalami',
                'kode' => 'R24',
                'symptom_id' => 11
            ],
            [
                'name' => 'tidak',
                'kode' => 'R25',
                'symptom_id' => 11
            ],

            [
                'name' => 'merasa lelah, tidak berenergi dan cenderung ingin tidur',
                'kode' => 'R26',
                'symptom_id' => 12
            ],

            [
                'name' => 'ke luar negeri',
                'kode' => 'R27',
                'symptom_id' => 13
            ],
            [
                'name' => 'ke luar kota dengan pasien',
                'kode' => 'R44',
                'symptom_id' => 13
            ],
            
            [
                'name' => 'sakit kepala',
                'kode' => 'R28',
                'symptom_id' => 14
            ],
            [
                'name' => 'tidak sakit kepala',
                'kode' => 'R29',
                'symptom_id' => 14
            ],
            
            [
                'name' => 'nyeri pada badan',
                'kode' => 'R30',
                'symptom_id' => 15
            ],

            [
                'name' => 'susah bernafas panjang',
                'kode' => 'R31',
                'symptom_id' => 16
            ],

            [
                'name' => 'ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki ',
                'kode' => 'R32',
                'symptom_id' => 17
            ],
            [
                'name' => 'tidak ada ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki ',
                'kode' => 'R33',
                'symptom_id' => 17
            ],
            [
                'name' => 'wajah, bibir dan kuku terdapat kebiruan ',
                'kode' => 'R40',
                'symptom_id' => 17
            ],

            [
                'name' => 'dibawah 90%',
                'kode' => 'R34',
                'symptom_id' => 18
            ],

            [
                'name' => 'ada',
                'kode' => 'R35',
                'symptom_id' => 19
            ],
            [
                'name' => 'tidak',
                'kode' => 'R36',
                'symptom_id' => 19
            ],

            [
                'name' => 'ya',
                'kode' => 'R37',
                'symptom_id' => 20
            ],
            [
                'name' => 'tidak',
                'kode' => 'R38',
                'symptom_id' => 20
            ],

            [
                'name' => 'pucat',
                'kode' => 'R41',
                'symptom_id' => 21
            ],

            [
                'name' => 'nyeri dada',
                'kode' => 'R42',
                'symptom_id' => 22
            ],
        ];
        collect($datas)->each(function ($data) { SymptomCategory::create($data); });
        Schema::enableForeignKeyConstraints();
    }
}
