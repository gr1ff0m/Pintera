<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
            'type' => 'INT',
            'unsigned' => true,
            'auto_increment' => true
            ],

            'username' => [
                'type' =>'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],

            'email' => [
                'type' =>'VARCHAR',
                'constraint' => 255,
                'null' => false,
                'unique' => true
            ],

            'password' => [
                'type' =>'VARCHAR',
                'constraint' => 255,
                'null' => false
            ],

            'created_at' => [
                'type' =>'datetime',
                'null' => true
            ],

            'updated_at' => [
                'type' =>'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
