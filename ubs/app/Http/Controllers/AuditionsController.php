<?php

namespace App\Http\Controllers;

use App\Audition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AuditionsController extends Controller
{

	private $db;
	
	public function __construct()
    {
   
        $this->db = DB::connection('mysql');
    
    }
    
    public function index()
    {
        #$audition = Audition::all();
     	$query_select = "SELECT * FROM auditions";
		$auditions = $this->db->select($query_select);
        return response()->json($auditions);
    }

    public function show($id,$seq)
    {
        #$audition = Audition::find($id);
        $query_select = "SELECT * FROM auditions WHERE person_pacient = '$id' AND seqAudition = '$seq'";
		$audition = $this->db->select($query_select);
        
        if(!$audition) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($audition);
    }

    public function store(Request $request)
    {
        $audition = new Audition();
        $audition->fill($request->all());
        $query_insert = "INSERT INTO auditions (person_doctor, person_pacient, seqAudition, nutrition, hearing, vision, humor_depression, cognition_memory, daily_activies, tumble, sync)
        values('$audition->person_doctor', '$audition->person_pacient','$audition->seqAudition', '$audition->nutrition', '$audition->hearing', '$audition->vision', '$audition->humor_depression', '$audition->cognition_memory', '$audition->daily_activies', '$audition->tumble', '$audition->sync')";
        $this->db->insert($query_insert);
        #$audition->save();

        return response()->json($audition, 201);
    }

    public function update(Request $request, $id, $seq)
    {
        #$audition = Audition::find($id);

        $query_select = "SELECT * FROM auditions WHERE person_pacient = '$id' AND seqAudition = '$seq'";
		$audition_verify = $this->db->select($query_select);
        
        if(!$audition_verify) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

		$audition = new Audition();
        $audition->fill($request->all());

        $query_update = "UPDATE auditions SET person_doctor='$audition->person_doctor', person_pacient='$audition->person_pacient',seqAudition='$audition->seqAudition', nutrition='$audition->nutrition', hearing='$audition->hearing', vision='$audition->vision', humor_depression='$audition->humor_depression', cognition_memory='$audition->cognition_memory', daily_activies='$audition->daily_activies', tumble='$audition->tumble', sync='$audition->sync' WHERE id='$id'";
        $this->db->update($query_update);

        #$audition->save();

        return response()->json($audition);
    }

     public function destroy($id,$seq)
    {
        $query_select = "SELECT * FROM auditions WHERE person_pacient = '$id' AND seqAudition = '$seq'";
		$audition = $this->db->select($query_select);
        
        if(!$audition) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $query_delete = "DELETE FROM auditions WHERE id='$id'";
        if ($this->db->delete($query_delete)){
        	return response()->json($audition, 201); #Ok
        } else {
        	return response()->json(nil, 404); #Fail
        }
        
        #$audition->delete();
    }
}
