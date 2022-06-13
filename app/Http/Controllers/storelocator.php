<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{storeaddress,map,city};
class storelocator extends Controller
{
    //
    public function index(Request $req){
       $store= storeaddress::store($req->store)->city($req->city)->get();
       $ifram= map::IframStore($req->store)->IframCity($req->city)->get();

        return response([
            "store"=>$store,
            "ifram"=>$ifram
        ],200);
    }

    public function storeCity(Request $req){
       $city= city::StorCity($req->store)->get();

       return response(["city"=>$city],200);
    }


}
