<?php

namespace App\Http\Controllers;

use App\Pacient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PacientsController extends Controller
{
    public function index()
    {
        $pacient = Pacient::all();
        return response()->json($pacient);
    }

    public function show($id)
    {
        $pacient = Pacient::find($id);

        if(!$pacient) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($pacient);
    }

    public function store(Request $request)
    {
        $pacient = new Pacient();
        $pacient->fill($request->all());
        $pacient->save();

        return response()->json($pacient, 201);
    }

    public function update(Request $request, $id)
    {
        $pacient = Pacient::find($id);

        if(!$pacient) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $pacient->fill($request->all());
        $pacient->save();

        return response()->json($pacient);
    }

     public function destroy($id)
    {
        $pacient = Pacient::find($id);

        if(!$pacient) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $pacient->delete();
    }
}
