<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentsRequest;
use App\Rules\Uppercase;
use App\Rules\ValidMobailNumber;
use Illuminate\Http\Request;

class FromvalidationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('From');
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
    public function store(StudentsRequest $req)
    {


        // $req -> validate([
        //     'email' => 'required|email',
        //     'password' => 'password|min:8|max:32',
        //     'address' => ['required',new Uppercase()],
        //     'adderss2' => 'required',
        //     'city' => 'required',
        //     'state' => 'required|in:Dhaka,Rajshahi,Ragpur',
        //     'zip' =>[ 'required',new ValidMobailNumber()]
        // ],[
        //     'email.required' => 'Email Filed is Required',
        //     'email.email' => 'Must Be Use @ And Before gmail.com',
        //     'password' => 'Password Has Be Required',
        //     'address' => 'Address Has Be Required',
        //     'adderss2' => 'Address2 Has Required',
        //     'city' => 'City Has Be Required',
        //     'state' => 'State Has Be Required',
        //     'zip' => 'Zip Has Be Required',
        // ]);
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
