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

class UbsWebController extends Controller
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
        $query_select = "SELECT * FROM ubses";
        $ubs_list = $this->db->select($query_select);

        return view('ubs/index-ubs')->with('ubs_list', $ubs_list);
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
        return view('ubs/create-ubs')->with('ubses',$ubses);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $query_select = "SELECT * FROM ubses WHERE id = '$id'";
    $ubs_list = $this->db->select($query_select);
        return view('ubs/show-ubs')->with('ubs_list', $ubs_list);
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
      $query_update = "UPDATE addresses SET country='$request->country', state='$request->state', city='$request->city', neighboorhood='$request->neighboorhood', zip='$request->zip', street='$request->street', number='$request->number', complement='$request->complement', sync='0' WHERE id='$request->address_id'";
      $this->db->update($query_update);

      $query_update = "UPDATE ubses SET name='$request->name', address_id='$request->address_id', sync='0' WHERE id='$id'";
      $this->db->update($query_update);

      $redirectTo = 'ubs/show/'.$id;
      return redirect($redirectTo);
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

      $query_select = "SELECT id FROM addresses ORDER BY id DESC LIMIT 1";
      $address = $this->db->select($query_select);
      $address_id = $address[0]->id + 1;
      $query_insert = "INSERT INTO addresses (id, country, state, city, neighboorhood, zip, street, number, complement, sync)
      values('$address_id','$request->country','$request->state','$request->city','$request->neighboorhood','$request->zip','$request->street','$request->number','$request->complement','0')";
      $this->db->insert($query_insert);

      $query_select = "SELECT id FROM ubses ORDER BY id DESC LIMIT 1";
      $ubses = $this->db->select($query_select);
      $ubs_id = $ubses[0]->id + 1;
      $query_insert = "INSERT INTO ubses (id, name, address_id, sync)
      values('$ubs_id', '$request->name', '$address_id', '0')";
      $this->db->insert($query_insert);

      $redirectTo = 'ubs/show/'.$ubs_id;
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
      $query_select = "SELECT * FROM ubses INNER JOIN addresses WHERE ubses.id = '$id' AND addresses.id = ubses.address_id";
      $ubs = $this->db->select($query_select);

        return view('ubs/edit-ubs')->with('ubs', $ubs[0]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $query_select = "SELECT * FROM ubses WHERE id = '$id'";
  		$query = $this->db->select($query_select);

      foreach ($query as $key => $ubs):
          #DELETE ADDRESS
          $query_delete = "DELETE FROM addresses WHERE id='$ubs->address_id'";
          $this->db->delete($query_delete);

          // #DELETE PERSON
          $query_delete = "DELETE FROM people WHERE id='$id'";
          $this->db->delete($query_delete);
      endforeach;

      $redirectTo = 'ubs/';
      return redirect($redirectTo);
    }
}
