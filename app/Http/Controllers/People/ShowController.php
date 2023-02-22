<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Http\Resources\People\PeopleResource;

class ShowController extends Controller
{
    public function __invoke(Person $person)
    {
        return new PeopleResource($person);
    }
}
