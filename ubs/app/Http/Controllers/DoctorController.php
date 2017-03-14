<?php

namespace App\Http\Controllers;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query_select = "SELECT doctor.*, person.*, address.*, ubs.name AS ubs_name, login.* FROM doctors as doctor INNER JOIN people as person INNER JOIN addresses as address INNER JOIN ubses as ubs INNER JOIN logins as login WHERE person.id = doctor.person_doctor AND address.id = person.address_id AND ubs.id = person.ubs_id AND person.id = login.doctor_login AND person.id = '$id'";
        $doctor = $this->db->select($query_select);
        
        return view('doctor/edit-doctor')->with('doctor', $doctor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
