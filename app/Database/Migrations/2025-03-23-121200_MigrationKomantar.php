<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationBook extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'obsah' => ['type' => 'TEXT'],
            'pridani' => ['type' => 'DATE'],
            "id_hry" => ["type" => "INT"],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('komentar');
    }

    public function down()
    {
        
    }
}
