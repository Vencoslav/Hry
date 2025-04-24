<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederHraPlatforma extends Seeder
{
    public function run()
    {
        $hraIds = $this->db->table('hra')->select('id')->get()->getResultArray();
        $platformaIds = $this->db->table('platforma')->select('id')->get()->getResultArray();

        $hraIds = array_column($hraIds, 'id');
        $platformaIds = array_column($platformaIds, 'id');

        foreach ($hraIds as $hraId) {
            $selectedPlatforma = (array) array_rand(array_flip($platformaIds), rand(1, 3));

            foreach ($selectedPlatforma as $platformaId) {
                $this->db->table('hra_platforma')->insert([
                    'hra_id'  => $hraId,
                    'platforma_id' => $platformaId,
                ]);
            }
        }
    }  

}
        
    
