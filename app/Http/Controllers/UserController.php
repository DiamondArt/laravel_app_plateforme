<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use Auth;

use App\Http\Requests\EmailUpdate;
use Illuminate\Http\Request;
use App\Repositories\InfoRepository;

class UserController extends Controller
{
    /*******************************************
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     ********************************************/
    

    public function index(Request $request)
    {

        
    $email=auth()->user()->email ;
    $name= auth()->user()->name ;
    $lastname=auth()->user()->lastname; 
    $honoraire=auth()->user()->honoraire;
    $competence=auth()->user()->competence ;
    $competence_deux=auth()->user()->competence_deux ;
    $competence_trois= auth()->user()->competence_trois ;
    $competence_quatre=auth()->user()->competence_quatre ;
    $telephone=auth()->user()->telephone ;
    $ville=auth()->user()->ville;
    $profession=auth()->user()->profession; 
    $presentation=auth()->user()->presentation;
    $category=auth()->user()->category;
    $message;
    if(Empty($email && $name and $lastname && $honoraire && $telephone && $ville && $category && $presentation  && $profession))
    {
        $message="Veuillez terminer votre inscription dans paramètres";
    }
    else
    {
        $message="votre profile est vérifié";
    }
    return view('user.index',compact('message'));
    // return view('user.index', compact('adActivesCount','adPerimesCount', 'adAttenteCount'));

    }

    /*******************************************
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     ********************************************/
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
        //
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

    public function emailEdit()
    {
        $categories = Category::select('name', 'id')->oldest('name')->get();
        
            return view('user.updatePro', compact('categories'));

        
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
    auth()->user()->role = $request -> role;
    auth()->user()->status='verified';
    auth()->user()->ville = $request->ville;
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
