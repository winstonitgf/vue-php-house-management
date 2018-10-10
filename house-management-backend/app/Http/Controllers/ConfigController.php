<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config;

class ConfigController extends Controller
{
    public function index()
    {
        return Config::all();
    }

    public function show(Config $Config)
    {
        return $Config;
    }

    public function store(Request $request)
    {
        $Config = Config::create($request->all());

        return response()->json($Config, 201);
    }

    public function update(Request $request, Config $Config)
    {
        $Config->update($request->all());

        return response()->json($Config, 200);
    }

    public function delete(Config $Config)
    {
        $Config->delete();

        return response()->json(null, 204);
    }
}
