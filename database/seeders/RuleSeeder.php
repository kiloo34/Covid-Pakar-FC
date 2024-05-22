<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Rule::truncate();
        $datas = [
            [
                'disease_category_id' => 1,
                'rules' => json_encode(
                    [
                        'R01',
                        ['R04','R05'],
                        ['R10','R12'],
                        ['R06','R08'],
                        ['R13','R14'],
                        ['R15','R16'],
                        'R17',
                        ['R18','R19'],
                        'R20',
                        ['R21','R22'],
                        ['R24','R25'],
                        'R26'
                    ]
                ),
            ],
            [
                'disease_category_id' => 2,
                'rules' => json_encode(
                    [
                        'R27',
                        'R02',
                        'R04',
                        'R11',
                        'R09',
                        'R07',
                        'R13',
                        'R30',
                        'R31',
                        ['R32','R33'],
                        ['R28','R29'],
                        'R23',
                    ]
                ),
            ],
            [
                'disease_category_id' => 3,
                'rules' => json_encode(
                    [
                        'R44',
                        'R10',
                        'R07',
                        'R13',
                        'R28',
                        'R34',
                        ['R01','R02', 'R03'],
                        ['R35','R36']
                    ]
                ),
            ],
            [
                'disease_category_id' => 4,
                'rules' => json_encode(
                    [
                        'R01',
                        'R17', 
                        'R19', 
                        'R04', 
                        'R05', 
                        'R26', 
                        'R13', 
                        'R28'
                    ]
                ),
            ],
            [
                'disease_category_id' => 5,
                'rules' => json_encode(
                    [
                        'R13',
                        'R42', 
                        'R37', 
                        'R24', 
                        'R03', 
                        'R17', 
                        'R18', 
                    ]
                ),
            ],
            [
                'disease_category_id' => 6,
                'rules' => json_encode(
                    [
                        'R06',
                        'R07',
                        'R01',
                        'R04',
                        'R10',
                        'R26',
                        'R39',
                        'R40',
                        'R41',
                        'R13',
                        'R42',
                    ]
                ),
            ],
        ];
        collect($datas)->each(function ($data) { Rule::create($data); });
        Schema::enableForeignKeyConstraints();
    }
}
