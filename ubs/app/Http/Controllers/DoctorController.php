<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Person;
use App\Address;
use App\Ubs;
use App\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $db;
    
    public function __construct()
    {
   
        $this->db = DB::connection('mysql');
        $this->middleware('auth');
    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $query_select = "SELECT * FROM doctors as doctor INNER JOIN people as person on person.id = doctor.person_doctor";
        $doctors = $this->db->select($query_select);
        //$query_select = "SELECT * FROM people";
        //$people = $this->db->select($query_select);
        

        return view('doctor/index-doctor')->with('doctors', $doctors);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $query_select = "SELECT doctor.*, person.*, address.*, ubs.name AS ubs_name FROM doctors as doctor INNER JOIN people as person INNER JOIN addresses as address INNER JOIN ubses as ubs WHERE person.id = doctor.person_doctor AND address.id = person.address_id AND ubs.id = person.ubs_id AND person.id = '$id'";
        $doctor = $this->db->select($query_select);

        return view('doctor/show-doctor')->with('doctor', $doctor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor/create-doctor');
    }

    public function store(Request $request){

        $mytime = date('Y-m-d H:i:s');
        
        #SAVE ADDRESS
        $query_select = "SELECT id FROM addresses ORDER BY id DESC LIMIT 1";
        $address = $this->db->select($query_select);
        $address_id = $address[0]->id + 1;
        $query_insert = "INSERT INTO addresses (id, country, state, city, neighboorhood, zip, street, number, complement, sync)
        values('$address_id','$request->country','$request->state','$request->city','$request->neighboorhood','$request->zip','$request->street','$request->number','$request->complement','0')";
        $this->db->insert($query_insert);

        #SAVE PERSON
        $query_select = "SELECT id FROM ubses WHERE name = '$request->ubs_name'";
        $ubs = $this->db->select($query_select);
        $ubs_id = $ubs[0]->id;
        $query_select = "SELECT id FROM people ORDER BY id DESC LIMIT 1";
        $person = $this->db->select($query_select);
        $person_id = $person[0]->id + 1;
        $query_insert = "INSERT INTO people (id, name, cpf, birth, rg, phone, email, civil_status, sync,address_id, ubs_id)
        values('$person_id','$request->name', '$request->cpf', '$request->birth', '$request->rg', '$request->phone', '$request->email', '$request->civil_status', '0','$address_id', '$ubs_id')";
        $this->db->insert($query_insert);

        #SAVE DOCTOR
        $query_insert = "INSERT INTO doctors (person_doctor, boss, crm, created_at, updated_at)
        values('$person_id', '$request->boss','$request->crm', '$mytime', '$mytime')";
        $this->db->insert($query_insert);
        
        #SAVE LOGIN
        $query_insert = "INSERT INTO logins (doctor_login, email, password, sync)
        values('$person_id', '$request->email', '$request->password', '0')";
        $this->db->insert($query_insert);

        $redirectTo = 'doctor/show/'.$person_id;
        return redirect($redirectTo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query_select = "SELECT doctor.*, person.*, address.*, ubs.name AS ubs_name, ubs.id AS ubs_id, login.*  FROM doctors as doctor INNER JOIN people as person INNER JOIN addresses as address INNER JOIN ubses as ubs INNER JOIN logins as login WHERE person.id = doctor.person_doctor AND address.id = person.address_id AND ubs.id = person.ubs_id AND person.id = login.doctor_login AND person.id = '$id'";
        $doctor = $this->db->select($query_select);
        
        return view('doctor/edit-doctor')->with('doctor', $doctor[0]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $mytime = date('Y-m-d H:i:s');

        #UPDATE ADDRESS
        $query_update = "UPDATE addresses SET country='$request->country', state='$request->state', city='$request->city', neighboorhood='$request->neighboorhood', zip='$request->zip', street='$request->street', number='$request->number', complement='$request->complement', sync='0' WHERE id='$request->id'";
        $this->db->update($query_update);

        #UPDATE PERSON
        $query_update = "UPDATE people SET name='$request->name', cpf='$request->cpf', birth='$request->birth', rg='$request->rg', phone='$request->phone', email='$request->email', civil_status='$request->civil_status', sync='0',address_id='$request->address_id', ubs_id='$request->ubs_id' WHERE id='$id'";
        $this->db->update($query_update);

        #UPDATE DOCTOR
        $query_update = "UPDATE doctors SET boss='$request->boss', crm='$request->crm', updated_at='$mytime' WHERE person_doctor='$id'";
        $this->db->update($query_update);
        
        #UPDATE LOGIN
        $password = bcrypt($request->password);
        $query_update = "UPDATE logins SET email='$request->email', password='$password', sync='0' WHERE doctor_login='$id'";
        $this->db->update($query_update);

        $redirectTo = 'doctor/show/'.$id;
        return redirect($redirectTo);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id){
        #$doctor = Doctor::find($id);

        $query_select = "SELECT doctor.*, person.*, address.*, ubs.name AS ubs_name FROM doctors as doctor INNER JOIN people as person INNER JOIN addresses as address INNER JOIN ubses as ubs WHERE person.id = doctor.person_doctor AND address.id = person.address_id AND ubs.id = person.ubs_id AND person.id = '$id'";
        $doctors = $this->db->select($query_select);
        
        /* if(!$doctor) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }*/
        foreach ($doctors as $key => $doctor): 

            #DELETE LOGIN
            $query_delete = "DELETE FROM logins WHERE doctor_login='$id'";
            $this->db->delete($query_delete);

            #DELETE DOCTOR
            $query_delete = "DELETE FROM doctors WHERE person_doctor='$id'";
            $this->db->delete($query_delete);
            
            #DELETE PERSON
            $query_delete = "DELETE FROM people WHERE id='$id'";
            $this->db->delete($query_delete);

            #DELETE ADDRESS
            $query_delete = "DELETE FROM addresses WHERE id='$doctor->address_id'";
            $this->db->delete($query_delete);
        endforeach; 

        $redirectTo = 'doctor/';
        return redirect($redirectTo);
    }
}
