<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function create(){
        return view('produto.create');
    }

    public function store(Request $request){
        Product::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,

        ]);
        return "Produto criado com sucesso";
    }

    public function show($id){
        $produto = Product::findOrFail($id);
        return view('produto.show', ['produto' => $produto]);
    }

    public function edit($id){
        $produto = Product::findOrFail($id);
        return view('produto.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id){
        $produto = Product::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,

        ]);
        return "Produto atualizado com sucesso";
    }

    public function delete($id){
        $produto = Product::findOrFail($id);
        return view('produto.delete', ['produto' => $produto]);
    }

    public function destroy(){
        $produto = Product::findOrFail($id);
        $produto->delete();

        return "Produto deletado com sucesso";
    }
}
