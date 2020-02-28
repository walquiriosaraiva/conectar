<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $ufs = DB::table('uf')->orderBy('id')->get();
        $cidades = DB::table('cidade')->orderBy('id')->get();
        return view('site.doador', compact('ufs', 'cidades'));
    }

    public function storeDoador()
    {
        return redirect()->route('principal.create-doador')
            ->withInput()
            ->with(['success' => true, 'mensagem' => 'Operação realizada com sucesso!']);
    }
}
