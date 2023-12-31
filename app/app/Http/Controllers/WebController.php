<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\Whats;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $requestType = $request->method();

        $dataToString = json_encode($data);
        Whats::create(['webhook' => $dataToString, 'type' => $requestType]);

        // return $data['hub_challenge'];
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $requestType = $request->method();

        $dataToString = json_encode($data);
        Whats::create(['webhook' => $dataToString, 'type' => $requestType]);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('layouts.contacts');
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

    public function show_table()
    {
        $item = Contato::all();

        return view('dashboard', compact('item'));
    }
}
