<?php

namespace App\Http\Controllers\Shop;

use App\Http\Requests\SaveClientRequest;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('shop.client.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shop.client.addclient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveClientRequest $request)
    {

        // $request->validate([
        //     'name' => ['required', 'min:3'],
        //     'surname' => ['required', 'min:5'],
        //     'phone' => ['required', 'minlength:4']
        // ]);

        Client::create($request->validated());

        return to_route("clients")->with('status', 'Post created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        // $c = Client::findOrFail($client);

        return view("shop.client.show",['client' => $client] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
