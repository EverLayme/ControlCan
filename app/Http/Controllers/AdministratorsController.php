<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;


class AdministratorsController extends Controller
{
    public function create()
    {
        $administrator = new Administrator;
        return view('administrators.create', ["administrator" => $administrator]);
    }
    /* public function login()
    {
        $credentials = $this->validate(request(), [
            'name' => 'required|string',
            'password' => 'required|string'
        ]);
        if (Auth::attempt($credentials)) {
            return 'Tu sesion inicio correctamente';
        } else {
            return back()
                ->withErrors(['name' => trans('auth.failed')])
                ->withInput(request(['name']));
        }
    }*/

    public function index()
    {
        return view('administrators.login');
    }
}
