<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederDatabase extends Seeder
{
    public function run()
    {
        $this->call('SeederHra');
        $this->call('SeederHraPlatforma');
        $this->call('SeederHraZanr');
        $this->call('SeederKomentar');
        $this->call('SeederPlatforma');
        $this->call('SeederTvurce');
        $this->call('SeederZanr');
    }
}
