<?php


namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressesController extends Controller
{
    public function index()
    {
        $address = Address::all();
        return response()->json($address);
    }

    public function show($id)
    {
        $address = Address::find($id);

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
        $address->save();

        return response()->json($address, 201);
    }

    public function update(Request $request, $id)
    {
        $address = Address::find($id);

        if(!$address) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $address->fill($request->all());
        $address->save();

        return response()->json($address);
    }

     public function destroy($id)
    {
        $address = Address::find($id);

        if(!$address) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $address->delete();
    }

}