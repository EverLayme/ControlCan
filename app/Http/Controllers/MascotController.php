<?php

namespace App\Http\Controllers;

use App\Models\Mascot;
use Illuminate\Http\Request;

class MascotController extends Controller
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
        $mascots = Mascot::paginate(10);
        if ($request->wantsJson()) {
            return $mascots->toJson();
        }
        return view('mascots.index', ['mascots' => $mascots]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mascot = new Mascot;
        return view('mascots.create', ["mascot" => $mascot]);
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
            'raza' => $request->raza
        ];
        if (Mascot::create($options)) {
            return redirect('/');
        } else {
            return view('mascots.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idmascot)
    {
        $mascot = Mascot::find($idmascot);
        return view('mascots.show', ['mascots' => $mascot]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idmascot)
    {
        $mascot = Mascot::find($idmascot);
        return view("mascots.edit", ["mascots" => $mascot]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idmascot)
    {
        $mascot = Mascot::find($idmascot);

        $mascot->name = $request->name;
        $mascot->raza = $request->raza;

        if ($mascot->save()) {
            return redirect('/');
        } else {
            return view("mascots.edit", ["mascot" => $mascot]);
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
        //
    }
}
