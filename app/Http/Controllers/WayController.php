<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Way;
use App\Http\Resources\WayResource;

class WayController extends Controller
{
    public function index()
    {
        $ways=Way::orderBy('id', 'desc')->get();
        $data=json_encode($ways);
        return ($data);
          //return WayResource::collection(Way::paginate(10));
    }
    public function addWay(){
        $debug=array();
        $debug['status']="success";
        $newWay=new Way;
        $newWay->name=request('name');
        $newWay->product=request('product');
        $newWay->weight=request('weight');
        $newWay->save();
        $data=json_encode($debug);
        return ($data);
    }
    public function test(){
        $ways=Way::get();
        $data=json_encode($ways);
        return ($data);
    }
}
