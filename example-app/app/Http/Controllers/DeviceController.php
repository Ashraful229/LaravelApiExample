<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Validator;

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
    function addDevice2(Request $req)
    {
        $rules=array
        (
           "name"=>"required|min:2|max:5"
        );
        $validator=Validator::make($req->all(),$rules);
        if($validator->fails())
        {
           return $validator->errors();
        }
        else
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
        
    }
    function list($id=null)
    {
        return $id?Device::find($id):Device::all();
    }

    function updateDevice(Request $req)
    {
        $device=Device::find($req->id);
        $device->name=$req->name;
        $device->price=$req->price;
        $result=$device->save();
        if($result)
        {
            return "Update data";
        }
        else
        {
            return "Error to update";
        }
        
    }

    function searchDevice($name)
    {
        // return Device::where("name",$name)->get();
        return Device::where("name","like","%".$name."%")->get();
    }

    function deleteDevice($id)
    {
        $device=Device::find($id);
        $result=$device->delete();
        if($result)
        {
            return "Delete data";
        }
        else
        {
            return "Error to delete";
        }
    }
}
