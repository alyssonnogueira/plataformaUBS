<?php


namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AddressesController extends Controller
{
	private $db;
	
	public function __construct()
    {
        #$connect = mysqli_connect('127.0.0.1','homestead','secret');
		#$db = mysqli_select_db($connect, 'ubs');
        $this->db = DB::connection('mysql');
    
    }

    public function index()
    {
    
		$query_select = "SELECT * FROM addresses";
		#$select = mysqli_query($connect, $query_select);
		$addresses = $this->db->select($query_select);
		#$address = Address::all();
        return response()->json($addresses);
    }

    public function show($id)
    {
		$query_select = "SELECT * FROM addresses WHERE id = '$id'";
		$address = $this->db->select($query_select);
        #$address = Address::find($id);

        if(!$address) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($address);
    }

    public function store(Request $request)
    {
        $address = new Address();
        $address->fill($request->all());
        $query_insert = "INSERT INTO addresses (id, country, state, city, neighboorhood, zip, street, number, complement, sync)
        values('$address->id','$address->country','$address->state','$address->city','$address->neighboorhood','$address->zip','$address->street','$address->number','$address->complement','$address->sync')";
        $this->db->insert($query_insert);
        #$address->save(); updated_at, created_at , '$address->updated_at', '$address->created_at'

        return response()->json($address, 201);
    }

    public function update(Request $request, $id)
    {
        #$address = Address::find($id);
		/*$query_select = "SELECT * FROM addresses WHERE id = '$id'";
		$address = $this->db->select($query_select);
        
        if(!$address) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }*/	
		$address = new Address();
        $address->fill($request->all());
        $query_update = "UPDATE addresses SET country='$address->country', state='$address->state', city='$address->city', neighboorhood='$address->neighboorhood', zip='$address->zip', street='$address->street, number='$address->number', complement='$address->complement', sync='$address->sync' WHERE id='$id'";
        $this->db->update($query_update);
        #$address->save();

        return response()->json($address);
    }

     public function destroy($id)
    {
        #$address = Address::find($id);
        $query_select = "SELECT * FROM addresses WHERE id = '$id'";
		$address = $this->db->select($query_select);
        
        if(!$address) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        #$address->delete();
        $query_delete = "DELETE FROM addresses WHERE id='$id'";
        if ($this->db->delete($query_delete)){
        	return 1; #Ok
        } else {
        	return 0; #Fail
        }
    }

}