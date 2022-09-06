# World Countries States Cities api in Laravel

## Clone 
```
git clone https://github.com/jbarreraballestas/country-state-city.git
```

## Join project
```
cd country-state-city
```

## Copy env example
>>>
> ### Copy in windows
> ```
> copy .env.example .env
> ```
> ### Copy in linux/mac
> ```
> cp .env.example .env
> ```
>>>

## Generate app key
```
php artisan key:generate
```

## Install dependencies
```
composer install
```

## Run autoload
```
composer dump-autoload
```

## Build assets
```
npm install && npm run build
```

## Update .env database with project location, windows system example
> DB_DATABASE=D:\Projects\country-state-city\database\db.sqlite

## Run migrations with seeders
```
php artisan migrate --seed
```

## Run project 
```
php artisan serve
```

# Default web route is Laravel livewire example with database
```
http://localhost:8000/
```

# Api routes

## World everything Countries States and Cities
```
http://localhost:8000/api
```

## Only Countries name and id
```
http://localhost:8000/api/countries
```

## Get states by country id, example for Colombia
```
http://localhost:8000/api/statesbycountry/1
```

## Get cities by state id, example for Antioquia Colombia
```
http://localhost:8000/api/citiesbystate/145
```

# Feel free to send pull requests, messages and report issues 💫
