<?php

namespace App\Http\Controllers;

use App\Consultation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsultationsController extends Controller
{
    public function index()
    {
        $consultation = Consultation::all();
        return response()->json($consultation);
    }

    public function show($id)
    {
        $consultation = Consultation::find($id);

        if(!$consultation) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($consultation);
    }

    public function store(Request $request)
    {
        $consultation = new Consultation();
        $consultation->fill($request->all());
        $consultation->save();

        return response()->json($consultation, 201);
    }

    public function update(Request $request, $id)
    {
        $consultation = Consultation::find($id);

        if(!$consultation) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $consultation->fill($request->all());
        $consultation->save();

        return response()->json($consultation);
    }

     public function destroy($id)
    {
        $consultation = Consultation::find($id);

        if(!$consultation) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $consultation->delete();
    }
}
