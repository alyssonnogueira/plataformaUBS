<?php

namespace App\Http\Controllers;

use App\Pacient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PacientsController extends Controller
{
	private $db;
	
	public function __construct()
    {
   
        $this->db = DB::connection('mysql');
    
    }
    
    public function index()
    {
        $query_select = "SELECT * FROM pacients";
		$pacients = $this->db->select($query_select);
        #$pacient = Pacient::all();
        return response()->json($pacients);
    }

    public function show($id)
    {
    	$query_select = "SELECT * FROM pacients WHERE id = '$id'";
		$pacient = $this->db->select($query_select);
        #$pacient = Pacient::find($id);

        if(!$pacient) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($pacient);
    }

    public function store(Request $request)
    {
        $pacient = new Pacient();
        $pacient->fill($request->all());
        $query_insert = "INSERT INTO pacients (person_pacient,sus, height, weight, skinColor, locomotionProblem, bedridden, osteoporosis, depression, insanity, needCare, armPerimeter, dm, has, bookSenior, oralHealthRisk, person_pacient, logo, password)
        values('$pacient->person_pacient,'$pacient->sus', '$pacient->height', '$pacient->weight', '$pacient->skinColor', '$pacient->locomotionProblem', '$pacient->bedridden', '$pacient->osteoporosis', '$pacient->depression', '$pacient->insanity', '$pacient->needCare', '$pacient->armPerimeter', '$pacient->dm', '$pacient->has', '$pacient->bookSenior', '$pacient->oralHealthRisk','$pacient->logo', '$pacient->password')";

        $this->db->insert($query_insert);
        #$pacient->save();

        return response()->json($pacient, 201);
    }

    public function update(Request $request, $id)
    {
        #$pacient = Pacient::find($id);

        $query_select = "SELECT * FROM pacients WHERE id = '$id'";
		$pacient_verify = $this->db->select($query_select);
        
        if(!$pacient_verify) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

		$pacient = new Pacients();
        $pacient->fill($request->all());

        $query_update = "UPDATE pacients SET person_pacient='$pacient->person_pacient',sus='$pacient->sus', height='$pacient->height', weight='$pacient->weight', skinColor='$pacient->skinColor', locomotionProblem='$pacient->locomotionProblem', bedridden='$pacient->bedridden', osteoporosis='$pacient->osteoporosis', depression='$pacient->depression', insanity='$pacient->insanity', needCare='$pacient->needCare', armPerimeter='$pacient->armPerimeter', dm='$pacient->dm', has='$pacient->has', bookSenior='$pacient->bookSenior', oralHealthRisk='$pacient->oralHealthRisk',logo='$pacient->logo', password='$pacient->password' WHERE id='$id'";
        $this->db->update($query_update);
        #$pacient->save();

        return response()->json($pacient);
    }

     public function destroy($id)
    {
        #$pacient = Pacient::find($id);

        $query_select = "SELECT * FROM pacients WHERE id = '$id'";
		$pacient = $this->db->select($query_select);
        
        if(!$pacient) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $query_delete = "DELETE FROM pacients WHERE id='$id'";
        if ($this->db->delete($query_delete)){
        	return 1; #Ok
        } else {
        	return 0; #Fail
        }
        #$pacient->delete();
    }
}
