<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;

class AirportsController extends Controller
{
    public function listAirports(Request $request){
        $keyword = $request->keyword??null;
        $stype = $request->stype??'country';
        $page = $request->page??1;
        $page = (int) $page;
        if (!$page){
            $page = 1;
        }
        $querystring = "/airports?keyword=$keyword&stype=$stype";
        if ($keyword){
            $airports = Airport::where($stype,"like","%$keyword%")
                ->WHERE("details","not like", "%No airport found%")
                ->paginate(10)
                ->appends(request()->query());
        }else{
            $airports = Airport::paginate(10);
        }

        return view('airports', compact('airports','keyword','stype','querystring'));
    }
}
