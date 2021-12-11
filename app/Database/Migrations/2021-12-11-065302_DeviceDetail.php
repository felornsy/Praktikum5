<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DeviceDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'device_id'       => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'       => true,
            ],
            'device_defect'       => [
                'type'       => 'TINYINT',
                'constraint' => '1',
                'default' => 0,
            ],
            'device_origin'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('device_id', 'device', 'id');
        $this->forge->createTable('device_detail');
    }

    public function down()
    {
        $this->forge->dropTable('device_detail');
    }
}
