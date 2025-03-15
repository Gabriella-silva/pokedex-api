<?php

namespace App\Http\Controllers;

use App\Models\pokedex;
use Illuminate\Http\Request;
use Ilumminate\Support\Facades\Validator;
use App\Http\Controllers\Response;
/**Response cria um tratamento de exceções ou responde em HTML e Json e Direcionamentos e validator valida dados da API */

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     /**READ! */
    public function index()
    {
        $pokedex = pokedex::ALL();

    $contador = $nome->count();
    return ("Existem $contador pokemons na pokedex");
    }

    /**
     * Store a newly created resource in storage.
     */
    /**CREAT */
    public function store(Request $request)
    {
        $nome = $request->ALL();

        $validacao = Validator::make($nome,[
            'nome' => 'required',
            'tipo' => 'required',
            'pokefacts' => 'required',
        ]);

        if (validacao->fails()){
            return 'Deu Pau na validação: '.Response()->json([Response::HTTP_NO_CONTENT]);
        };

        $pokedex = pokedex::create($nome);
if($pokedex){
    return 'registros cadastrados:' .Response()->json([Response::HTTP_CREATED]);}  
    else{
        return 'Registros não cadastrados: '.Response()->json([],Response::HTTP_NO_CONTENT);
    }

    /**
     * Display the specified resource.
     */
    public function show(pokedex $pokedex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pokedex $pokedex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pokedex $pokedex)
    {
        //
    }
}
