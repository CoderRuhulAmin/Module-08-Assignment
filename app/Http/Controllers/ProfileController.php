<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function Index($id){

        // Variable Declare
        $name =  "Donal Trump";
        $age  =  "75";

        // Store data in 'data array'
        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        // Cookie Values set
        $cookieName = "access_token";
        $value = "123-XYZ";
        $minutes = "1";
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;

        return response($data, 200)->cookie( $cookieName, $value, $minutes, $path, $domain, $secure, $httpOnly );
    }
}
