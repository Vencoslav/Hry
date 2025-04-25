<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationHraZanr extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'hra_id' => ['type' => 'INT', 'unsigned' => true],
            'zanr_id' => ['type' => 'INT', 'unsigned' => true]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('hra_id', 'hra', 'id');
        $this->forge->addForeignKey('zanr_id', 'zanr', 'id');
        $this->forge->createTable('hra_zanr');
    }
 
    public function down()
    {
        
    }
}
