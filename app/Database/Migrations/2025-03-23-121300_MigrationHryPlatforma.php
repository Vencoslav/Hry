<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationHraPlatforma extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'hra_id' => ['type' => 'INT', 'unsigned' => true],
            'platforma_id' => ['type' => 'INT', 'unsigned' => true]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('hra_id','hra' ,'id');
        $this->forge->addForeignKey('platforma_id', 'platforma', 'id');
        $this->forge->createTable('hra_platforma');
    }
 
    public function down()
    {
        
    }
}
