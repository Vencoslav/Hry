<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationBook extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'nazev' => ['type' => 'VARCHAR', 'constraint' => 255],
            'popis' => ['type' => 'TEXT'],
            'vydani' => ['type' => 'DATE'],
            'obrazek' => ['type' => 'VARCHAR', 'constraint' => 255],
            'hodnoceni' => ['type' => 'TINYINT']
            "id_tvurci" => ["type" => "INT"],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('hra');
    }

    public function down()
    {
        
    }
}
