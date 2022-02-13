<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\ContainerMovement;
use Illuminate\Http\Request;

class ContainersController extends Controller
{

    public function index()
    {
        $containers = Container::all();

        return view('containers.index', compact('containers'));
    }


    public function create()
    {
        return view('containers.create');
    }


    public function store(Request $request, Container $container, ContainerMovement $movement)
    {
        $container = Container::create([
            'cliente' => $request->cliente,
            'numero_container' => $request->numero_container,
            'tipo_container' => $request->tipo_container,
            'status_container' => $request->status_container,
            'categoria_container' => $request->categoria_container
        ]);
        return redirect('containers');
    }


    public function show($id)
    {
        $container = Container::find($id);

        /* movements foi feito através duma relação one to many no model */

        $containerMovements = Container::find($id)->movements;
//        dd($containerMovement);
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
        $containerMovement = ContainerMovement::find($id);
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
        $container->delete();
        return redirect()->route('index');
    }

    public function relatorios() {

        return view('containers.relatorios');
    }
}
