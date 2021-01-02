<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
    //
    function addDevice(Request $req)
    {
        $device= new Device;
        $device->name=$req->name;
        $device->price=$req->price;
        $result=$device->save();
        if($result)
        {
            return "save data";
        }
        else
        {
            return "Error to save";
        }
    }
    function list($id=null)
    {
        return $id?Device::find($id):Device::all();
    }
}
