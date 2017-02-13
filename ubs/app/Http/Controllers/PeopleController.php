<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{
    public function index()
    {
        $person = Person::all();
        return response()->json($person);
    }

    public function show($id)
    {
        $person = Person::find($id);

        if(!$person) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($person);
    }

    public function store(Request $request)
    {
        $person = new Person();
        $person->fill($request->all());
        $person->save();

        return response()->json($person, 201);
    }

    public function update(Request $request, $id)
    {
        $person = Person::find($id);

        if(!$person) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $person->fill($request->all());
        $person->save();

        return response()->json($person);
    }

     public function destroy($id)
    {
        $person = Person::find($id);

        if(!$person) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $person->delete();
    }
}
