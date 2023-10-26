<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoPostRequest;
use App\Http\Requests\ContatoPutRequest;
use App\Models\Contato;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.contacts');
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
    public function store(ContatoPostRequest $request)
    {
        $data = $request->validated();

        $data['status'] = 'pendente';
        $data['edit'] = 'ativo';

        Contato::create($data);

        // Alert::success('Eviado com sucesso','Nossa equipe entrará em contato');

        return redirect('/contato')->with('message','sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return Contato::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContatoPutRequest $request, Contato $contato)
    {
        $data = Contato::find($contato->id);

        $validate = $request->validated();
        dd($validate);
        session()->flash('Status', 'Status atualizado com sucesso !');

        return $data->update($validate); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contato $contato)
    {
        //
    }
}
