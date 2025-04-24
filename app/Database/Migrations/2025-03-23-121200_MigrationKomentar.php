<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationKometar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'obsah' => ['type' => 'TEXT'],
            'pridani' => ['type' => 'DATE'],
            "id_hra" => ["type" => "INT"],
        ]);
        $this->forge->addKey('id', true);
        //$this->forge->addForeignKey("id_hra","hra","id");
        $this->forge->createTable('komentar');
    }

    public function down()
    {
        
    }
}
