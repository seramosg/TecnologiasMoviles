<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //devuelve todo los datos
        $users = User::all();
        return  json_encode($users);
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
        $user = new User();
        $user -> name = $request -> name;
        $user -> last_name = $request -> last_name;
        $user -> document_type = $request -> document_type;
        $user -> document_number = $request -> document_number;
        $user -> address = $request -> address;
        $user -> phone_number = $request -> phone_number;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $user -> save();
        return json_encode($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar solo un campo
        $user = User::find($id);
        return  $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //Actualizar un campo
        $user = User::find($id);
        $user -> name = $request -> name;
        $user -> last_name = $request -> last_name;
        $user -> document_type = $request -> document_type;
        $user -> document_number = $request -> document_number;
        $user -> address = $request -> address;
        $user -> phone_number = $request -> phone_number;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $user -> save();
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminar un campo
        $user = User::find($id);
        $user -> delete();
        return "El dato se ha eliminado";
    }
}
