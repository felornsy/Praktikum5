<?php

namespace App\Models;

use CodeIgniter\Model;

class DeviceDetail extends Model
{
    protected $table      = 'device_detail';
    protected $primaryKey = 'id';
    protected $allowedFields = ['device_id', 'device_defect', 'device_origin'];
    protected $useTimestamps = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
