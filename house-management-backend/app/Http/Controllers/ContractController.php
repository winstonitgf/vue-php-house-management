<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;

class ContractController extends Controller
{
    public function index()
    {
        return Contract::all();
    }

    public function show(Contract $Contract)
    {
        return $Contract;
    }

    public function store(Request $request)
    {
        $Contract = Contract::create($request->all());

        return response()->json($Contract, 201);
    }

    public function update(Request $request, Contract $Contract)
    {
        $Contract->update($request->all());

        return response()->json($Contract, 200);
    }

    public function delete(Contract $Contract)
    {
        $Contract->delete();

        return response()->json(null, 204);
    }
}
