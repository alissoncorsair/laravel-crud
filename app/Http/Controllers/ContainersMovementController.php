<?php

namespace App\Http\Controllers;

use App\Models\Container;
use App\Models\ContainerMovement;
use Illuminate\Http\Request;

class ContainersMovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $container = Container::find($id);
        return view('containers.newmove', compact('container'));
    }

    public function store(Request $request, $id)
    {
        $id = $request->id;

         ContainerMovement::create([
            'container_id' => $id,
            'tipo' => $request->tipo,
            'entrada' => $request->entrada,
            'saida' => $request->saida
        ]);

         $container = Container::find($id);
         if($container) {
             $container->qtd_movimentos += 1;
             $container->save();
         }

        return redirect('containers');
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

    public function edit($idCliente, $idMovimento)
    {
    $movement = ContainerMovement::find($idMovimento);
    return view('containers.editmove', compact('idCliente', 'idMovimento', 'movement'));
    }


    public function update(Request $request, $idCliente, $idMovimento)
    {

        $containerMovement = ContainerMovement::find($idMovimento);
        $containerMovement->update($request->validate
        ([
            'tipo' => 'required',
            'entrada' => 'required',
            'saida' => 'required'
        ]));
        $container = Container::find($containerMovement->container_id);
        return redirect()->route('relatorio', $container->id);
    }

    public function destroy($idCliente, $idMovimento)
    {
        $containerMovement = ContainerMovement::find($idMovimento);

        $container = Container::find($idCliente);
        if($container->id === $containerMovement->container_id) {
            $container->qtd_movimentos -= 1;
            $container->save();
        }
        $containerMovement->delete();

        return redirect(route('relatorio', $idCliente));
    }
}
