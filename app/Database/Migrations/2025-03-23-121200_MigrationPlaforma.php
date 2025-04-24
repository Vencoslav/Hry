<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationPlatforma extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'nazev' => ['type' => 'VARCHAR'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('platforma');
    }

    public function down()
    {
        
    }
}
