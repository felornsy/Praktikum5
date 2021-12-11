<?php

namespace App\Controllers;

use App\Models\Device;
use App\Models\DeviceDetail;

class DeviceDetailController extends BaseController
{
    public function detail($id)
    {
        // query device
        $model = new Device();
        $device = $model->find($id);

        // query device detail
        $model = new DeviceDetail();
        $device_detail = $model->where('device_id', $device['id'])->first();


        $data['device'] = $device;
        $data['devicedetail'] = $device_detail;

        return view('devicedetail', $data);

    }
}
