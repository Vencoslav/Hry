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
            ['nazev' => 'PC'],
            ['nazev' => 'PlayStation 5'],
            ['nazev' => 'PlayStation 4'],
            ['nazev' => 'Xbox Series X'],
            ['nazev' => 'Xbox One'],
            ['nazev' => 'Nintendo Switch'],
            ['nazev' => 'Steam Deck'],
            ['nazev' => 'Mobile'],
            ['nazev' => 'Mac'],
            ['nazev' => 'Linux'],
        ];

        // Using Query Builder to insert multiple rows
        $this->db->table('table_name')->insertBatch($data);
    }
}
