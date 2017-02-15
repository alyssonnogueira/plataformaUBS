<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeopleController extends Controller
{
	private $db;
	
	public function __construct()
    {
        #$connect = mysqli_connect('127.0.0.1','homestead','secret');
		#$db = mysqli_select_db($connect, 'ubs');
        $this->db = DB::connection('mysql');
    
    }
    
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
