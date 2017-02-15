<?php

namespace App\Http\Controllers;

use App\Ubs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UbsController extends Controller
{

	private $db;
	
	public function __construct()
    {
   
        $this->db = DB::connection('mysql');
    
    }

    public function index()
    {
        #$ubs = Ubs::all();
        $query_select = "SELECT * FROM ubses";
		$ubses = $this->db->select($query_select);
        return response()->json($ubses);
    }

    public function show($id)
    {
        #$ubs = Ubs::find($id);
        $query_select = "SELECT * FROM ubses WHERE id = '$id'";
		$ubs = $this->db->select($query_select);
        
        if(!$ubs) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($ubs);
    }

    public function store(Request $request)
    {
        $ubs = new Ubs();
        $ubs->fill($request->all());
        $query_insert = "INSERT INTO ubses (id, name, address_id, sync)
        values('$ubs->id', '$ubs->name', '$ubs->address_id', '$ubs->sync')";
        $this->db->insert($query_insert);

        #$ubs->save();

        return response()->json($ubs, 201);
    }

    public function update(Request $request, $id)
    {
        #$ubs = Ubs::find($id);

        $query_select = "SELECT * FROM ubses WHERE id = '$id'";
		$ubs_verify = $this->db->select($query_select);
        
        if(!$ubs_verify) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

		$ubs = new Address();
        $ubs->fill($request->all());

        $query_update = "UPDATE ubses SET name='$ubs->name', address_id='$ubs->address_id', sync='$ubs->sync' WHERE id='$id'";
        $this->db->update($query_update);
        #$ubs->save();

        return response()->json($ubs);
    }

     public function destroy($id)
    {
        #$ubs = Ubs::find($id);

		$query_select = "SELECT * FROM ubses WHERE id = '$id'";
		$ubs = $this->db->select($query_select);
        
        if(!$ubs) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $query_delete = "DELETE FROM ubses WHERE id='$id'";
        if ($this->db->delete($query_delete)){
        	return 1; #Ok
        } else {
        	return 0; #Fail
        }
        #$ubs->delete();

    }
}
