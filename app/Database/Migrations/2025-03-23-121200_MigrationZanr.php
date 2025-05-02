<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationZanr extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'nazev' => ['type' => 'VARCHAR', 'constraint' => 255]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('zanr');
    }

    public function down()
    {
        $this->forge->dropTable('zanr');
    }
}
