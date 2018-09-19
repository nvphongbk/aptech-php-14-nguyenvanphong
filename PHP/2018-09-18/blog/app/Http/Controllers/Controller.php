<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;    
    public function testAction1()
    {
        echo "day la action1";
    }

    public function testAction2(){
        echo "day la action 2";
    }
    public function testAction3(){
        echo "day la action 3";
    }
    public function testAction4(){
        echo    "day la action 4";
    }
    public function testAction5(){
        echo "day la action 5";
    }



}

