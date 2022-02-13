<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\ContainerMovement;
use Illuminate\Http\Request;

class ContainersController extends Controller
{

    public function index()
    {
        /* Retornando todos os containers existentes através da função all() disponibilizada pelos models. */
        $containers = Container::all();
        /* Retornando a view index e passando os dados encontrados através da função acima. */
        return view('containers.index', compact('containers'));
    }

    public function create()
    {
        /* Retornando a view que tem o formulário de criação de um container */
        return view('containers.create');
    }

    public function store(Request $request, Container $container, ContainerMovement $movement)
    {
        /* Pegando os dados através da request e validando-os através da função create(), que é disponibilizada pelos models */
        Container::create([
            'cliente' => $request->cliente,
            'numero_container' => $request->numero_container,
            'tipo_container' => $request->tipo_container,
            'status_container' => $request->status_container,
            'categoria_container' => $request->categoria_container
        ]);
        /* Após a criação do container, redirecionar para a rota index */
        return redirect()->route('index');
    }


    public function show($id)
    {
        $container = Container::find($id);
        /* movements foi feito através de uma relação one to many no model */
        /* A variável $containerMovements receberá todos movimentos feitos através do id do Container acima. */
        $containerMovements = Container::find($id)->movements;
         return view('containers.detalhes', compact('container', 'containerMovements'));
    }


    public function edit($id)
    {
        $container = Container::find($id);
        return view('containers.edit', compact('container'));
    }

    public function update(Request $request, $id)
    {
        $container = Container::find($id);
        /* Validando a request e atualizando os dados da request. */
        $container->update($request->validate
        ([
            'cliente' => 'required',
            'numero_container' => 'required',
            'tipo_container' => 'required',
            'status_container' => 'required',
            'categoria_container' => 'required'
        ]));
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        $container = Container::find($id);
        /* Apagando o Container do id especificado. */
        $container->delete();
        return redirect()->route('index');
    }

    public function relatorios() {
        $containers = Container::all();
        $movements = ContainerMovement::all();
        /* Retornando a view e passando os dados recebidos acima. */
        return view('containers.relatorios', compact('containers', 'movements'));
    }
}
