<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginsController extends Controller
{
    public function index()
    {
        $login = Login::all();
        return response()->json($login);
    }

    public function show($id)
    {
        $login = Login::find($id);

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
        $login->save();

        return response()->json($login, 201);
    }

    public function update(Request $request, $id)
    {
        $login = Login::find($id);

        if(!$login) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $login->fill($request->all());
        $login->save();

        return response()->json($login);
    }

     public function destroy($id)
    {
        $login = Login::find($id);

        if(!$login) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $login->delete();
    }
}
