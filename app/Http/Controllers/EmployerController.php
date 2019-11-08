<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployerController extends Controller
{
    public function index()
    {
        return view('employer.index');
    }
    public function emailEdit()
    {
            return view('employer.updatePro');
    }
    public function emailUpdate(EmailUpdate $request)
    {

    auth()->user()->email = $request->email;
    auth()->user()->name = $request -> name;
    auth()->user()->lastname = $request -> lastname;
    auth()->user()->honoraire = $request -> honoraire;
    auth()->user()->competence = $request -> competence;
    auth()->user()->competence_deux = $request -> competence_deux;
    auth()->user()->competence_trois = $request -> competence_trois;
    auth()->user()->competence_quatre = $request -> competence_quatre;
    auth()->user()->telephone = $request -> telephone;
    auth()->user()->role= $request -> role;
    auth()->user()->ville = $request -> ville;
    auth()->user()->profession = $request -> profession;
    auth()->user()->presentation = $request -> presentation;
    auth()->user()->telephone = $request -> telephone;
    auth()->user()->facebook = $request -> facebook;
    auth()->user()->instagram = $request -> instagram;
    auth()->user()->site = $request -> site;
    auth()->user()->category = $request->category;
    auth()->user()->twitter = $request -> twitter;
    auth()->user()->save();
    return back();
     }
    
    public function update( $id)
    {
        // 
    }
    public function updatesave(Request $request, $id)
    {
        
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
