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

class HomeController extends Controller
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
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $query_select = "SELECT * FROM consultations INNER JOIN people as person on person.id = consultations.person_pacient";
    $consultations = $this->db->select($query_select);


    $query_select = "SELECT * FROM auditions INNER JOIN people as person on person.id = auditions.person_pacient";
    $auditions = $this->db->select($query_select);

    return view('home')->with('consultations', $consultations)->with('auditions', $auditions);
  }
  public function consultation($id)
  {
    $query_select = "SELECT * FROM consultations WHERE seqConsultation = '$id'";
    $consultations = $this->db->select($query_select);

    return view('consultation')->with('consultation', $consultations);
  }
  public function audition($id)
  {
    $query_select = "SELECT * FROM auditions WHERE seqAudition = '$id'";
    $auditions = $this->db->select($query_select);

    return view('audition')->with('audition', $auditions);
  }
}
