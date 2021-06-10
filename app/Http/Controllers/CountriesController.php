<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monarobase\CountryList\CountryList;
use Monarobase\CountryList\CountryListFacade;

class CountriesController extends Controller
{
    public function listCountries(){
        $countries = CountryListFacade::getList('en', 'json');
        $countries = json_decode($countries, 1);
        return view('countries', compact('countries'));
    }
}
