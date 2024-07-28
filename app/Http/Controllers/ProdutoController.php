<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filtro = request()->input('filtro');
        $produtos = Produto::all();

        return view('produto.index')->with('produtos', $produtos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = new Produto();

        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->categoria = $request->input('categoria');

        try {
            $produto->save();
        } catch (\Exception $e) {

        }

        return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $produto = Produto::find($id);

        return view('produto.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $produto = Produto::find($id);

        return view('produto.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $produto = Produto::find($id);

        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->categoria = $request->input('categoria');

        try {
            $produto->save();
        } catch (\Exception $e) {

        }

        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $produto = Produto::find($id);

        try {
            $produto->delete();
        } catch (\Exception $e) {

        }

        return redirect()->route('produto.index')->with('toast', ['type' => 'success', 'message' => 'Produto excluído com sucesso.']);
    }
}
