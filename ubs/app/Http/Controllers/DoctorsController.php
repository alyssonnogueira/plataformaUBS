<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorsController extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();
        return response()->json($doctor);
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);

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
        $doctor->save();

        return response()->json($doctor, 201);
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        if(!$doctor) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $doctor->fill($request->all());
        $doctor->save();

        return response()->json($doctor);
    }

     public function destroy($id)
    {
        $doctor = Doctor::find($id);

        if(!$doctor) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $doctor->delete();
    }
}
