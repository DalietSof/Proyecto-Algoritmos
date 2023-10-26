<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CrateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '128',
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '225',
            ],
            'password_hash' => [
                'type'           => 'VARCHAR',
                'constraint'     => '225',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
                'default'        => null
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
                'default'        => null
            ]
        ]);

        $this->forge->addPrimaryKey('id')
                    ->addUniqueKey('email');

        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
