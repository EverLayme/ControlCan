<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Resources\ClientsCollection;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Muestra la coleccion de recursos
        $clientes = Cliente::paginate(10);
        if ($request->wantsJson()) {
            return $clientes->toJson();
        }
        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Cliente;
        return view('clientes.create', ["client" => $client]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $options = [
            'name' => $request->name,
            'direction' => $request->direction,
            'fono' => $request->fono
        ];
        if (Cliente::create($options)) {
            return redirect('/');
        } else {
            return view('clientes.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Cliente::find($id);
        return view('clientes.show', ['client' => $client]);
    }

    /**
     * Sho[]w the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Cliente::find($id);
        return view("clientes.edit", ["client" => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Cliente::find($id);

        $client->name = $request->name;
        $client->direction = $request->direction;
        $client->fono = $request->fono;

        if ($client->save()) {
            return redirect('/');
        } else {
            return view("clientes.edit", ["client" => $client]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('/clientes');
    }
}
