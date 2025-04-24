<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class SeederHra extends Seeder
{
    /**public function translate($q, $sl, $tl){
        $res= file_get_contents("https://translate.googleapis.com/translate_a/single?client=gtx&ie=UTF-8&oe=UTF-8&dt=bd&dt=ex&dt=ld&dt=md&dt=qca&dt=rw&dt=rm&dt=ss&dt=t&dt=at&sl=".$sl."&tl=".$tl."&hl=hl&q=".urlencode($q), $_SERVER['DOCUMENT_ROOT']."/transes.html");
        $res=json_decode($res);
        return $res[0][0][0];
    }*/
    
    public function run()
    {
        $faker = Factory::create();

        for($i = 0; $i < 5000; $i++){
            $data = [
                'nazev' => /*$this->translate(*/$faker->sentence(4)/*, "la", "en")*/,
                'popis' => /*$this->translate(*/$faker->paragraph(8)/*, "la", "en")*/,
                'vydani' => $faker->date(),
                'obrazek' => 'https://picsum.photos/seed/' . uniqid() . '/400/600',
                'hodnoceni' => rand(1,10),
                "id_tvurce" => rand(1,25)
            ];
            $this->db->table('hra')->insert($data);
        }
    }
}
