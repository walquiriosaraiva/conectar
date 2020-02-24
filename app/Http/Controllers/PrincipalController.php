<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function createDoador()
    {
        return view('site.doador');
    }

    public function storeDoador()
    {
        return redirect()->route('principal.create-doador')
            ->withInput()
            ->with(['success' => true, 'mensagem' => 'Operação realizada com sucesso!']);
    }
}
