<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{
	private $db;
	
	public function __construct()
    {
   
        $this->db = DB::connection('mysql');
    
    }
    
    public function index()
    {
    	$query_select = "SELECT * FROM people";
		$people = $this->db->select($query_select);
        #$person = Person::all();
        return response()->json($people);
    }

    public function show($id)
    {
    	$query_select = "SELECT * FROM people WHERE id = '$id'";
		$person = $this->db->select($query_select);
        #$person = Person::find($id);

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
        $query_insert = "INSERT INTO people (id, name, cpf, birth, rg, phone, email, civil_status, sync,address_id, ubs_id)
        values('$person->id','$person->name', '$person->cpf', '$person->birth', '$person->rg', '$person->phone', '$person->email', '$person->civil_status', '$person->sync','$person->address_id', '$person->ubs_id')";
        $this->db->insert($query_insert);
        #$person->save();

        return response()->json($person, 201);
    }

    public function update(Request $request, $id)
    {
        #$person = Person::find($id);

        $query_select = "SELECT * FROM people WHERE id = '$id'";
		$person_verify = $this->db->select($query_select);
        
        if(!$person_verify) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

		$person = new Person();
        $person->fill($request->all());

        $query_update = "UPDATE people SET name='$person->name', cpf='$person->cpf', birth='$person->birth', rg='$person->rg', phone='$person->phone', email='$person->email', civil_status='$person->civil_status', sync='$person->sync',address_id='$person->address_id', ubs_id='$person->ubs_id' WHERE id='$id'";
        $this->db->update($query_update);
        #$person->save();

        return response()->json($person);
    }

    public function destroy($id)
    {
        #$person = Person::find($id);

        $query_select = "SELECT * FROM people WHERE id = '$id'";
		$person = $this->db->select($query_select);
        
        if(!$person) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $query_delete = "DELETE FROM people WHERE id='$id'";
        if ($this->db->delete($query_delete)){
        	return 1; #Ok
        } else {
        	return 0; #Fail
        }
        #$person->delete();
    }
}
