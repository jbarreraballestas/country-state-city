<div>
    <div style="display: grid;">
        <h1>Country State City in Laravel Livewire</h1>
        <select name="country_id" id="country_id" wire:model="country_id">
            <option value="">Country</option>
            @foreach ($countries as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
        </select>
        <select name="state_id" id="state_id"  wire:model="state_id">
            <option value="">State</option>
            @foreach ($states as $state)
                <option value="{{$state->id}}">{{$state->name}}</option>
            @endforeach
        </select>
        <select name="city_id" id="city_id" wire:model="city_id">
            <option value="">City</option>
            @foreach ($cities as $city)
                <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <p>Country id: {{$country_id}}</p>
        <p>State id: {{$state_id}}</p>
        <p>City id: {{$city_id}}</p>
    </div>
</div>
