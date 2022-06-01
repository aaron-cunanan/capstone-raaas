<?php namespace App\Database\Migrations;

class CreateUsers extends \CodeIgniter\Database\Migration {

        public function up()
        {
                $this->forge->addField([
                        'id'          => [
                                'type'           => 'BIGINT',
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE
                        ],
                        'username'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '50',
                        ],
                        'password'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '60',
                        ],
                        'security_level' => [
                                'type'           => 'INT',
                                'constraint'     => 10,
                         ],
                         'created_at datetime default current_timestamp',
                         'updated_at datetime default current_timestamp on update current_timestamp',

                ]);

                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('users');
        }

        public function down()
        {
                $this->forge->dropTable('users');
        }
}