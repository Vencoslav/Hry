<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationHra extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'nazev' => ['type' => 'VARCHAR', 'constraint' => 255],
            'popis' => ['type' => 'TEXT'],
            'vydani' => ['type' => 'DATE'],
            'obrazek' => ['type' => 'VARCHAR', 'constraint' => 255],
            'hodnoceni' => ['type' => 'TINYINT'],
            "id_tvurce" => ["type" => "INT"]
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->addForeignKey("id_tvurce","tvurce","id");
        $this->forge->createTable('hra');
    }

    public function down()
    {
        
    }
}
