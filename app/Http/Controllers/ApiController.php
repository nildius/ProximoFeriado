<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;
use Carbon\Carbon;

class ApiController extends Controller
{

	public static function checkStatus($content)
	{
		if(sizeOf($content) > 0){
      $status = ["error" => "no", "description" => null];
    }
    else{
      $status = ["error" => "yes", "description" => "No hay informacion"];
    }

    return $status;
	}

    public function show($country, $date){
      // Getting the first of the holidays (closest to $date)
      $content = Holiday::select('date', 'name', 'description')->nextholiday($date)->country($country)->first();

      // Formatting the Json
      $holiday = ["status" => $this->checkStatus($content), "content" => $content];

      return json_encode($holiday);
    }

    public function showAll($country, $date){
   		// Start and end of month, we will need this for the lapse query scope 
   	  $start = Carbon::parse($date)->startOfMonth();
   		$end = Carbon::parse($date)->endOfMonth();

   		// Getting the holidays on that lapse
      $content = Holiday::select('date', 'name', 'description')->lapse($start, $end)->country($country)->get();

      // Formatting the Json
      $holiday = ["status" => $this->checkStatus($content), "content" => $content];

      return json_encode($holiday);

   	}
}

