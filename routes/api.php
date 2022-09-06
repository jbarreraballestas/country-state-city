<?php

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('countries', function () {
    return Country::all()->toJson();
});

Route::get('statesbycountry/{country}', function (Country $country) {
    return $country->states->toJson();
});

Route::get('citiesbystate/{state}', function (State $state) {
    return $state->cities->toJson();
});

Route::get('/', function () {
    $everything = Country::with(['states'=>function($query){$query->with('cities');}])->get();
    return response()->json($everything);
});
