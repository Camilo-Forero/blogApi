<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class apiController extends Controller
{
    public function create(Request $request)
    {
        $value = Pages::create([
            "tittle" => $request->tittle,
            "description" => $request->description,
            "image" => $request->img
        ]);

        return $value;
    }

    public function update(Request $request)
    {
        $value = Pages::find($request->id);
        $value->tittle = $request->tittle;
        $value->description = $request->description;
        $value->image = $request->img;
        $value->state = $request->status;
        $value->save();

        return $value;
    }

    public function show()
    {
        $query = Pages::where('state', '1')->get();

        return response()->json($query);
    }

    public function get(Request $request)
    {
        $query = Pages::where('id', $request->id)
        ->where('state', '1')
        ->get();

        return response()->json($query);
    }

    public function search(Request $request)
    {
        $query = Pages::where('tittle', 'like', '%'.$request->tittle.'%')
        ->get();

        return response()->json($query);
    }
}
