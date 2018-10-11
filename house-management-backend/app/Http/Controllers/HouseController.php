<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HouseController extends Controller
{
    public function index()
    {
        return House::all();
    }

    public function show(House $House)
    {
        return $House;
    }

    public function store(Request $request)
    {
        $House = House::create($request->all());

        return response()->json($House, 201);
    }

    public function update(Request $request, House $House)
    {
        $House->update($request->all());

        return response()->json($House, 200);
    }

    public function delete(House $House)
    {
        $House->delete();

        return response()->json(null, 204);
    }
}
