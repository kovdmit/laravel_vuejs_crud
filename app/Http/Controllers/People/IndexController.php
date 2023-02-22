<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Http\Resources\People\PeopleResource;
use App\Models\Person;

class IndexController extends Controller
{
    public function __invoke()
    {
        $people = Person::all();
        return PeopleResource::collection($people);
    }
}
