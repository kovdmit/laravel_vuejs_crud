<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\Person;

class IndexController extends Controller
{
    public function __invoke()
    {
        $people = Person::all();
        return $people;
    }
}
