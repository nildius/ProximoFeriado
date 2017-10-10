<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class ApiController extends Controller
{
    public function show($country, $date)
    {
        $content = Holiday::where('date', '>', $date)
                            ->where('country', '=', $country)
                            ->select('date', 'name', 'description')->first();
        if($content){                           
            $status = ["error" => "no", "description" => null];
        }
        else{
            $status = ["error" => "yes", "description" => "No hay informacion"];
        }
 
        $holiday = ["status" => $status, "content" => $content];
        return json_encode($holiday);
    }
}
