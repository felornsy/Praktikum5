<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Device extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'device_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'device_brand' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'device_quantity' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'device_status' => [
                'type'       => 'TINYINT',
                'constraint' => '1',
                'default' => 0,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('device', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('device');

    }
}
