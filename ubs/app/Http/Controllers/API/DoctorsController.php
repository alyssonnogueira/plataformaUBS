<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DoctorsController extends Controller
{

	private $db;
	
	public function __construct()
    {
   
        $this->db = DB::connection('mysql');
    
    }
    
    public function index()
    {
        $query_select = "SELECT * FROM doctors";
		$doctors = $this->db->select($query_select);
        #$doctor = Doctor::all();
        return response()->json($doctors);
    }

    public function show($id)
    {
    	$query_select = "SELECT * FROM doctors WHERE id = '$id'";
		$doctor = $this->db->select($query_select);
        #$doctor = Doctor::find($id);

        if(!$doctor) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($doctor);
    }

    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->fill($request->all());
        $query_insert = "INSERT INTO doctors (person_doctor, boss, crm, created_at, updated_at)
        values('$doctor->person_doctor', '$doctor->boss','$doctor->crm', '$doctor->created_at', '$doctor->updated_at')";
        $this->db->insert($query_insert);
        #$doctor->save();

        return response()->json($doctor, 201);
    }

    public function update(Request $request, $id)
    {
        #$doctor = Doctor::find($id);

        $query_select = "SELECT * FROM doctors WHERE id = '$id'";
		$doctor_verify = $this->db->select($query_select);
        
        if(!$doctor_verify) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

		$doctor = new Doctor();
        $doctor->fill($request->all());

        $query_update = "UPDATE doctors SET '$doctor->boss', '$doctor->crm', '$doctor->updated_at' WHERE person_doctor='$id'";
        $this->db->update($query_update);
        #$doctor->save();

        return response()->json($doctor);
    }

     public function destroy($id)
    {
        #$doctor = Doctor::find($id);

        $query_select = "SELECT * FROM doctors WHERE id = '$id'";
		$doctor = $this->db->select($query_select);
        
        if(!$doctor) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $query_delete = "DELETE FROM doctors WHERE id='$id'";
        if ($this->db->delete($query_delete)){
        	return 1; #Ok
        } else {
        	return 0; #Fail
        }
        #$doctor->delete();
    }
}
