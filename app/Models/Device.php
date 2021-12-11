<?php

namespace App\Models;

use CodeIgniter\Model;

class Device extends Model
{
    protected $table      = 'device';
    protected $primaryKey = 'id';
    protected $allowedFields = ['device_name', 'device_brand', 'device_quantity', 'device_status'];
    protected $useTimestamps = false;
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}