<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Person;
use App\Address;
use App\Ubs;
use App\Login;
use App\Pacient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacientController extends Controller
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
        $query_select = "SELECT * FROM pacients as pacient INNER JOIN people as person on person.id = pacient.person_pacient";
        $pacients = $this->db->select($query_select);
        //$query_select = "SELECT * FROM people";
        //$people = $this->db->select($query_select);
        
        return view('pacient/index-pacient')->with('pacients', $pacients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query_select = "SELECT name from ubses";
        $ubses = $this->db->select($query_select);
        return view('pacient/create-pacient')->with('ubses',$ubses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        #SAVE PACIENT
        $query_insert = "INSERT INTO pacients (person_pacient, armPerimeter, bedridden, bookSenior, depression, dm, has, height, insanity, locomotionProblem, needCare, oralHealthRisk, osteoporosis, skinColor, sus, weight, created_at, updated_at)
        values('$person_id', '$request->armPerimeter','$request->bedridden', '$request->bookSenior', '$request->depression', '$request->dm', '$request->has', '$request->height', '$request->insanity', '$request->locomotionProblem', '$request->needCare', '$request->oralHealthRisk', '$request->osteoporosis', '$request->skinColor', '$request->sus', '$request->weight' ,'$mytime', '$mytime')";
        $this->db->insert($query_insert);

        $redirectTo = 'pacient/show/'.$person_id;
        return redirect($redirectTo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query_select = "SELECT pacient.*, person.*, address.*, ubs.name AS ubs_name FROM pacients as pacient INNER JOIN people as person INNER JOIN addresses as address INNER JOIN ubses as ubs WHERE person.id = pacient.person_pacient AND address.id = person.address_id AND ubs.id = person.ubs_id AND person.id = '$id'";
        $pacient = $this->db->select($query_select);

        return view('pacient/show-pacient')->with('pacient', $pacient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query_select = "SELECT pacient.*, person.*, address.*, ubs.name AS ubs_name, ubs.id AS ubs_id, login.*  FROM pacients as pacient INNER JOIN people as person INNER JOIN addresses as address INNER JOIN ubses as ubs INNER JOIN logins as login WHERE person.id = pacient.person_pacient AND address.id = person.address_id AND ubs.id = person.ubs_id AND person.id = '$id'";
        $pacient = $this->db->select($query_select);
        
        return view('pacient/edit-pacient')->with('pacient', $pacient[0]);
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
        $mytime = date('Y-m-d H:i:s');

        #UPDATE ADDRESS
        $query_update = "UPDATE addresses SET country='$request->country', state='$request->state', city='$request->city', neighboorhood='$request->neighboorhood', zip='$request->zip', street='$request->street', number='$request->number', complement='$request->complement', sync='0' WHERE id='$request->id'";
        $this->db->update($query_update);

        #UPDATE PERSON
        $query_update = "UPDATE people SET name='$request->name', cpf='$request->cpf', birth='$request->birth', rg='$request->rg', phone='$request->phone', email='$request->email', civil_status='$request->civil_status', sync='0',address_id='$request->address_id', ubs_id='$request->ubs_id' WHERE id='$id'";
        $this->db->update($query_update);

        #UPDATE PACIENT
        $query_update = "UPDATE pacients SET armPerimeter='$request->armPerimeter', bedridden='$request->bedridden', bookSenior='$request->bookSenior', depression='$request->depression', dm='$request->dm', has='$request->has', height='$request->height', insanity='$request->insanity', locomotionProblem='$request->locomotionProblem', needCare='$request->needCare', oralHealthRisk='$request->oralHealthRisk', osteoporosis='$request->osteoporosis', skinColor='$request->skinColor', sus='$request->sus', weight='$request->weight', updated_at='$mytime' WHERE person_pacient='$id'";
        $this->db->update($query_update);
        
        $redirectTo = 'pacient/show/'.$id;
        return redirect($redirectTo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query_select = "SELECT pacient.*, person.*, address.*, ubs.name AS ubs_name FROM pacients as pacient INNER JOIN people as person INNER JOIN addresses as address INNER JOIN ubses as ubs WHERE person.id = pacient.person_pacient AND address.id = person.address_id AND ubs.id = person.ubs_id AND person.id = '$id'";
        $pacients = $this->db->select($query_select);
        
        foreach ($pacients as $key => $pacient): 

            #DELETE PACIENT
            $query_delete = "DELETE FROM pacients WHERE person_pacient='$id'";
            $this->db->delete($query_delete);
            
            #DELETE PERSON
            $query_delete = "DELETE FROM people WHERE id='$id'";
            $this->db->delete($query_delete);

            #DELETE ADDRESS
            $query_delete = "DELETE FROM addresses WHERE id='$pacient->address_id'";
            $this->db->delete($query_delete);
        endforeach; 

        $redirectTo = 'pacient/';
        return redirect($redirectTo);
    }
}
