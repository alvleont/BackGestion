<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('id')){
            return Client::find($request->id);
        }
        else{
            return Client::all();
        }
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

        if($request->validate([
            'name' => 'required|max:255',
            'document' => 'required|max:255|unique:clients',
            'email' => 'required|email|max:255|unique:clients',
            'phone' => 'max:255',
            'address' => 'required|max:255',
        ])){
            $client = Client::create($request->all());
            return response()->json($client, 201);

        }
        else{
            return response()->json($request->errors, 400);
        }


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
        //
        if($request->validate([
            'name' => 'max:255',
            'document' => 'max:255|unique:clients,document,'.$id,
            'email' => 'email|max:255|unique:clients,email,'.$id,
            'phone' => 'max:255',
            'address' => 'max:255',
        ])){
            $client = Client::findOrFail($id);
            $client->update($request->all());
            return response()->json($client, 200);
        }
        else{
            return response()->json($request->errors, 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
