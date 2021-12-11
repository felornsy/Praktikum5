<?php

namespace App\Controllers;

use App\Models\Device;

class HomeController extends BaseController
{
    public function index()
    {
        $device = new Device();
        $device = $device->findAll();
        return view('welcome_message');
    }
}
