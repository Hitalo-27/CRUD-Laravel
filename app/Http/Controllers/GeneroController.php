<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\GeneroModel;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = GeneroModel::all();
        foreach($generos as $g){
            echo $g->idGenero."= ";
            echo $g->genero."<br />";
        }
    }

    public function exibirGeneros(){
        $generos = GeneroModel::where('idGenero', '>=',1)->orderBy('genero', 'asc')->get();
        return view('generos', compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genero = new GeneroModel();
        $genero -> genero = $request -> txGenero;
        $genero -> sugestao = $request -> txSugestao;
        $genero -> diretor = $request -> txDiretor;
        $genero -> save();

        return redirect()->action('App\Http\Controllers\GeneroController@exibirGeneros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generos = GeneroModel::find($id);
        $title = "Editar Gênero - {$generos->genero}";
        $title2 = "Editar Sugetão - {$generos->sugestao}";
        $title3 = "Editar Diretor - {$generos->diretor}";
        return view ('editar', compact('title', 'title2', 'title3', 'generos'));
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
        $genero = GeneroModel::find($id);
        $genero -> update(['genero' => $request->txGenero]);
        $genero -> update(['sugestao' => $request->txSugestao]);
        $genero -> update(['diretor' => $request->txDiretor]);
        return redirect()->action('App\Http\Controllers\GeneroController@exibirGeneros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $generos = GeneroModel::where('idGenero', $id)->delete();
        return redirect()->action('App\Http\Controllers\GeneroController@exibirGeneros');
    }

    public function exibirJson(){
        return response()->json(
            GeneroModel::get(),200,['Content-Type' => 'application/json;charset=UTF-8', 
            'Charset' => 'utf-8'], JSON_UNESCAPED_UNICODE
        );
    }
}
