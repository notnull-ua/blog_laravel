<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 13.07.17
 * Time: 15:18
 */

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function sayHello($name){
        return view('test/hello',['name' => $name]);
    }


}