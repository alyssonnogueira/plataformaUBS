<?php

namespace App\Http\Controllers;

use App\Ubs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UbsController extends Controller
{
    public function index()
    {
        $ubs = Ubs::all();
        return response()->json($ubs);
    }

    public function show($id)
    {
        $ubs = Ubs::find($id);

        if(!$ubs) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($ubs);
    }

    public function store(Request $request)
    {
        $ubs = new Ubs();
        $ubs->fill($request->all());
        $ubs->save();

        return response()->json($ubs, 201);
    }

    public function update(Request $request, $id)
    {
        $ubs = Ubs::find($id);

        if(!$ubs) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $ubs->fill($request->all());
        $ubs->save();

        return response()->json($ubs);
    }

     public function destroy($id)
    {
        $ubs = Ubs::find($id);

        if(!$ubs) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $ubs->delete();
    }
}
