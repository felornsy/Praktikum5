<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DeviceSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'device_name' => 'Lampu',
                'device_brand' => 'Philips',
                'device_quantity' => 5,
                'device_status' => 1
            ],
            [
                'device_name' => 'Kulkas',
                'device_brand' => 'Sharp',
                'device_quantity' => 3,
                'device_status' => 0
            ],
            [
                'device_name' => 'Sepeda',
                'device_brand' => 'United',
                'device_quantity' => 7,
                'device_status' => 1
            ],
            [
                'device_name' =>'Smart Watch',
                'device_brand' => 'Samsung',
                'device_quantity' => 9,
                'device_status' => 1
            ],
            [
                'device_name' => 'Smartband',
                'device_brand' => 'Xiaomi',
                'device_quantity' => 11,
                'device_status' => 0
            ],
            [
                'device_name' => 'Smart Power',
                'device_brand' => 'Bardi',
                'device_quantity' => 13,
                'device_status' => 1
            ]
        ];
        $this->db->table('device')->insertBatch($data);

        $data = [
            [
                'device_id' => 1,
                'device_defect' => 1,
                'device_origin' => 'Zimbabwe'
            ],
            [
                'device_id' => 2,
                'device_defect' => 0,
                'device_origin' => 'China'
            ],
            [
                'device_id' => 3,
                'device_defect' => 0,
                'device_origin' => 'Indonesia'
            ],
            [
                'device_id' => 4,
                'device_defect' => 1,
                'device_origin' => 'Korea'
            ],
            [
                'device_id' => 5,
                'device_defect' => 0,
                'device_origin' => 'China'
            ],
            [
                'device_id' => 6,
                'device_defect' => 0,
                'device_origin' => 'Indonesia'
            ]
        ];
        $this->db->table('device_detail')->insertBatch($data);
    }
}
