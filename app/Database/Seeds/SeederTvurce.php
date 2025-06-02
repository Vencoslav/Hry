<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class SeederTvurce extends Seeder
{ 
    public function run()
    {
        $data = [
            ['nazev' => 'Nintendo'],
            ['nazev' => 'Sony'],
            ['nazev' => 'Microsoft'],
            ['nazev' => 'Valve'],
            ['nazev' => 'SEGA'],
            ['nazev' => 'Rockstar Games'],
            ['nazev' => 'Ubisoft'],
            ['nazev' => 'Electronic Arts'],
            ['nazev' => 'Bandai Namco'],
            ['nazev' => 'Capcom'],
            ['nazev' => 'Square Enix'],
            ['nazev' => 'Activision Blizzard'],
            ['nazev' => 'Bethesda'],
            ['nazev' => 'CD Projekt Red'],
            ['nazev' => '2K Games'],
            ['nazev' => 'FromSoftware'],
            ['nazev' => 'Epic Games'],
            ['nazev' => 'IO Interactive'],
            ['nazev' => 'Paradox Interactive'],
            ['nazev' => 'Team17'],
            ['nazev' => 'THQ Nordic'],
            ['nazev' => 'Devolver Digital'],
            ['nazev' => 'Larian Studios'],
            ['nazev' => 'Remedy Entertainment'],
            ['nazev' => 'Insomniac Games'],
        ];

        $faker = Factory::create();

        /*// Prvních 25 firem s názvem
        foreach ($data as $item) {
            $this->db->table('tvurce')->insert($item);
        }

        // Generování dalších 5000 firem s popisem a datem
        for ($i = 0; $i < 5000; $i++) {
            $fakerData = [
                'nazev' => $faker->company, // Generování název firmy
                'popis' => $faker->paragraph(8), // Generování popisu
                'zalozeni' => $faker->date(), // Generování data založení
            ];
            $this->db->table('tvurce')->insert($fakerData);
        }*/

        foreach ($data as $item) {
            $fakerData = [
                'nazev' => $item['nazev'],
                'popis' => $faker->paragraph(8),
                'zalozeni' => $faker->date(),
            ];
            $this->db->table('tvurce')->insert($fakerData);
        }
    }
}
