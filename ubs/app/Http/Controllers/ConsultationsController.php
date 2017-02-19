<?php

namespace App\Http\Controllers;

use App\Consultation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConsultationsController extends Controller
{
	
	private $db;
	
	public function __construct()
    {
   
        $this->db = DB::connection('mysql');
    
    }

    public function index()
    {
        #$consultation = Consultation::all();
        $query_select = "SELECT * FROM consultations";
		$consultations = $this->db->select($query_select);
        return response()->json($consultations);
    }

    public function show($id,$seq)
    {
        #$consultation = Consultation::find($id);
        $query_select = "SELECT * FROM consultations WHERE person_pacient = '$id' AND seqConsultation = '$seq'";
		$consultation = $this->db->select($query_select);
        
        if(!$consultation) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($consultation);
    }

    public function store(Request $request)
    {
        $consultation = new Consultation();
        $consultation->fill($request->all());
        $query_insert = "INSERT INTO consultations (person_doctor, person_pacient, seqConsultation, blood_presure,weight, observations, physical_exam, foot_exam, created_date, updated_date, sync)
        values('$consultation->person_doctor', '$consultation->person_pacient', '$consultation->seqConsultation', '$consultation->blood_presure','$consultation->weight', '$consultation->observations', '$consultation->physical_exam', '$consultation->foot_exam', '$consultation->created_date', '$consultation->updated_date', '$consultation->sync')";
        $this->db->insert($query_insert);
        #$consultation->save();

        return response()->json($consultation, 201);
    }

    public function update(Request $request, $id, $seq)
    {
        $consultation = Consultation::find($id);

        if(!$consultation) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $consultation->fill($request->all());
        $query_select = "SELECT * FROM consultations WHERE person_pacient = '$id' AND seqConsultation = '$seq'";
		$address_verify = $this->db->select($query_select);
        
        if(!$address_verify) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

		$consultation = new Address();
        $consultation->fill($request->all());

        $query_update = "UPDATE consultations SET person_doctor='$consultation->person_doctor', person_pacient='$consultation->person_pacient', seqConsultation='$consultation->seqConsultation', blood_presure='$consultation->blood_presure',weight='weight$consultation->weight', observations='$consultation->observations', physical_exam='$consultation->physical_exam', foot_exam='$consultation->foot_exam', updated_date='$consultation->updated_date', sync='$consultation->sync' WHERE id='$id'";
        $this->db->update($query_update);

        #$consultation->save();

        return response()->json($consultation);
    }

     public function destroy($id, $seq)
    {
        #$consultation = Consultation::find($id);

        $query_select = "SELECT * FROM consultations WHERE person_pacient = '$id' AND seqConsultation = '$seq'";
		$consultation = $this->db->select($query_select);
        
        if(!$consultation) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $query_delete = "DELETE FROM consultations WHERE person_pacient = '$id' AND seqConsultation = '$seq'";
        if ($this->db->delete($query_delete)){
        	return 1; #Ok
        } else {
        	return 0; #Fail
        }
        #$consultation->delete();
    }
}
