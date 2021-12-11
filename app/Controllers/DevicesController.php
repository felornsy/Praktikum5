<?php

namespace App\Controllers;

use App\Models\Device;

class DevicesController extends BaseController
{
    public function index()
    {
        $model = new Device();
        $devices = $model->findAll();
        $data['devices'] = $devices;

        return view('device', $data);
    }
}
