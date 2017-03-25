<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginsController extends Controller
{

	private $db;
	
	public function __construct()
    {
   
        $this->db = DB::connection('mysql');
    
    }
    
    public function index()
    {
        #$login = Login::all();
        $query_select = "SELECT * FROM logins";
		$logins = $this->db->select($query_select);
        return response()->json($logins);
    }

    public function show($id)
    {
        #$login = Login::find($id);
        $query_select = "SELECT * FROM logins WHERE doctor_login = '$id'";
		$login = $this->db->select($query_select);
        
        if(!$login) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($login);
    }

    public function store(Request $request)
    {
        $login = new Login();
        $login->fill($request->all());
        $crypt = bcrypt($login->password);
        $query_insert = "INSERT INTO logins (doctor_login, email, password, sync)
        values('$login->doctor_login', '$login->email', '$crypt', '$login->sync')";
        $this->db->insert($query_insert);
        //$login->save();

        return response()->json($login, 201);
    }

    public function update(Request $request, $id)
    {
        #$login = Login::find($id);
        $query_select = "SELECT * FROM logins WHERE doctor_login = '$id'";
		$login_verify = $this->db->select($query_select);
        
        if(!$login_verify) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

		$login = new Login();
        $login->fill($request->all());

        $query_update = "UPDATE logins SET email='$login->email', password='$login->password', sync='$login->sync' WHERE doctor_login='$id'";
        $this->db->update($query_update);
        #$login->save();

        return response()->json($login);
    }

     public function destroy($id)
    {
        #$login = Login::find($id);
        $query_select = "SELECT * FROM logins WHERE doctor_login = '$id'";
		$login = $this->db->select($query_select);
        
        if(!$login) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $query_delete = "DELETE FROM logins WHERE doctor_login='$id'";
        if ($this->db->delete($query_delete)){
        	return 201; #Ok
        } else {
        	return 0; #Fail
        }
        #$login->delete();
    }
}
