<?php

namespace App\Http\Controllers\People;

use App\Http\Controllers\Controller;
use App\Models\Person;

class DeleteController extends Controller
{
    public function __invoke(Person $person)
    {
        $person->delete();
        return $person;
    }
}
