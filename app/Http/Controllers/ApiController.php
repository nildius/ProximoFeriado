<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;
use Carbon\Carbon;

class ApiController extends Controller
{

	public static function error($content)
	{
		if($content){                           
            $status = ["error" => "no", "description" => null];
        }
        else{
           	$status = ["error" => "yes", "description" => "No hay informacion"];
        }

        return $status;
	}

    public function show($country, $date)
    {
        $content = Holiday::where('date', '>', $date)
                            ->where('country', '=', $country)
                            ->select('date', 'name', 'description')->first();
        
 		$status = $this->error($content);

        $holiday = ["status" => $status, "content" => $content];
        return json_encode($holiday);
    }

    public function showAll($country, $date)
   	{
   		$start = Carbon::parse($date)->startOfMonth();
   		$end = Carbon::parse($date)->endOfMonth();
        $content = Holiday::where('date', '>=', $start)
        					->where('date', '<=', $end)
                            ->where('country', '=', $country)
                            ->select('date', 'name', 'description')->get();
        $status = $this->error($content);
        $holiday = ["status" => $status, "content" => $content];
        return json_encode($holiday);

   	}
}
