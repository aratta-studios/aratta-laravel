<?php

namespace App;

class ArattaLaravel{

    public function create($name){

        if (!empty($name)) {
            exec ('composer create-project --prefer-dist aratta-studios/aratta-laravel-boilerplate '.$name.' && cd '.$name.' && npm install && php artisan jwt:secret');
            print_r($name." project is created");
        } else {
            print_r("Please provide a name for your project");
        }

    }
}