<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederHraZanr extends Seeder
{
    public function run()
    {
        $hraIds = $this->db->table('hra')->select('id')->get()->getResultArray();
        $zanrIds = $this->db->table('zanr')->select('id')->get()->getResultArray();

        $hraIds = array_column($hraIds, 'id');
        $zanrIds = array_column($zanrIds, 'id');

        foreach ($hraIds as $hraId) {
            $selectedZanr = (array) array_rand(array_flip($zanrIds), rand(1, 3));

            foreach ($selectedZanr as $zanrId) {
                $this->db->table('hra_zanr')->insert([
                    'hra_id'  => $hraId,
                    'zanr_id' => $zanrId,
                ]);
            }
        }
    }  
}
        
    
