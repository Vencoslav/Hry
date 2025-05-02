<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationKomentar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'obsah'    => ['type' => 'TEXT', 'null' => false],
            'pridani'  => ['type' => 'DATE', 'null' => false],
            'id_hra'   => ['type' => 'INT', 'unsigned' => true], // důležité!
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_hra', 'hra', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('komentar');
    }

    public function down()
    {
        $this->forge->dropTable('komentar');
    }
}
