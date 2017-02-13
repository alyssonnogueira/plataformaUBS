<?php

namespace App\Http\Controllers;

use App\Audition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuditionsController extends Controller
{
    public function index()
    {
        $audition = Audition::all();
        return response()->json($audition);
    }

    public function show($id)
    {
        $audition = Audition::find($id);

        if(!$audition) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($audition);
    }

    public function store(Request $request)
    {
        $audition = new Audition();
        $audition->fill($request->all());
        $audition->save();

        return response()->json($audition, 201);
    }

    public function update(Request $request, $id)
    {
        $audition = Audition::find($id);

        if(!$audition) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $audition->fill($request->all());
        $audition->save();

        return response()->json($audition);
    }

     public function destroy($id)
    {
        $audition = Audition::find($id);

        if(!$audition) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $audition->delete();
    }
}
