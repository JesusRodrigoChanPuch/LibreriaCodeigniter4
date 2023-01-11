<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tusuarios extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_usuario'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nombre'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			
			'password'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'correo'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			]
		]);
		$this->forge->addKey('id_usuario', true);
		$this->forge->createTable('t_usuario');
	}

	public function down()
	{
		$this->forge->dropTable('t_usuario');
	}
}
