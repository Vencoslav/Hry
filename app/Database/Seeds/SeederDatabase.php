<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederDatabase extends Seeder
{
    public function run()
    {
        $this->call('SeederTvurce');
        $this->call('SeederHra');
        $this->call('SeederKomentar');
        $this->call('SeederPlatforma');
        $this->call('SeederZanr');
        $this->call('SeederHraPlatforma');
        $this->call('SeederHraZanr');
    }
}
