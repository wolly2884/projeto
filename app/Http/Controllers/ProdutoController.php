<?php

namespace app\Http\Controllers;

use app\Models\Produto;
use Illuminate\Http\Request;
use app\Http\Resources\ProdutoResource;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        // return ProdutoResource::collection($produtos);
       // return Produto::all();
                return response()->json($produtos);
    }

    public function store(Request $request)
    {
        // Obter os dados
        $dados = $request->all(); // retorna array com os dados
        $objetoCriado = Produto::create($dados);
        return $objetoCriado;
    }

    public function show(Produto $produto)
    {
        return $produto;
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return $produto;
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return $produto;
    }
}
