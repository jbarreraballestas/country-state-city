<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class CountryStateCity extends Component
{
    public $country_id, $state_id, $city_id;
    public function render()
    {
        $countries = Country::all();
        $states = State::where('country_id',$this->country_id)->get();
        $cities = City::where('state_id',$this->state_id)->get();
        return view('livewire.country-state-city',['countries'=>$countries,'cities'=>$cities,'states'=>$states]);
    }
    public function updatingCountryId(){
        $this->reset(['state_id','city_id']);
    }
    public function updatingStateId(){
        $this->reset(['city_id']);
    }
}
