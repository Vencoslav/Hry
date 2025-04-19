<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederDatabase extends Seeder
{
    public function run()
    {
        $this->call('SeederTvurce');
        $this->call('SeederPlatforma');
        $this->call('SeederHra');
        $this->call('SeederKomentar');
        $this->call('SeederZanr');
        $this->call('SeederTvurce');
        $this->call('SeederHraZanr');
    }
}
