<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{
    public function index()
    {
        return Clients::paginate(15);
    }

    public function show(Clients $client)
    {
        return $client;
    }

    public function store(Request $request)
    {
        $client = Clients::create($request->all());

        return response()->json(url('/') . '/api/clients/' . $client->id, 201);
    }

    public function update(Request $request, Clients $client)
    {
        $client->update($request->all());

        return response()->json($client, 200);
    }

    public function delete(Clients $client)
    {
        $client->delete();

        return response()->json('deleted', 204);
    }
}
