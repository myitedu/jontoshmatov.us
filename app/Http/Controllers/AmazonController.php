<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



class AmazonController extends Controller
{
    public function search(){
        $results = \JONTOSHMATOV::search('sss');
        return $results;

    }

}
