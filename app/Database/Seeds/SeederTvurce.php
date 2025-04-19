<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class SeederBook extends Seeder
{
    /**public function translate($q, $sl, $tl){
        $res= file_get_contents("https://translate.googleapis.com/translate_a/single?client=gtx&ie=UTF-8&oe=UTF-8&dt=bd&dt=ex&dt=ld&dt=md&dt=qca&dt=rw&dt=rm&dt=ss&dt=t&dt=at&sl=".$sl."&tl=".$tl."&hl=hl&q=".urlencode($q), $_SERVER['DOCUMENT_ROOT']."/transes.html");
        $res=json_decode($res);
        return $res[0][0][0];
    }*/
    
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

        for($i = 0; $i < 5000; $i++){
            $data = [
                'popis' => /*$this->translate(*/$faker->paragraph(8)/*, "la", "en")*/,
                'zalozeni' => $faker->date(),
            ];
            $this->db->table('tvurci')->insert($data);
        }
    }
}
