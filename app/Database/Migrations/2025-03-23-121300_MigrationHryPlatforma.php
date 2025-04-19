<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MigrationBookAuthor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'hra_id' => ['type' => 'INT', 'unsigned' => true],
            'platforma_id' => ['type' => 'INT', 'unsigned' => true]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('hra_id', 'book', 'id');
        $this->forge->addForeignKey('platforma_id', 'author', 'id');
        $this->forge->createTable('hra_platforma');
    }
 
    public function down()
    {
        
    }
}
