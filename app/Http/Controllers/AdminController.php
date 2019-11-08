<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;


class AdminController extends Controller
{
    public function index()
    {
       $categ= Category::select('name', 'id')->oldest('name')->get();
        return view('admin.index',compact('categ'));
    }
    public function emailEdit()
    {
        $categories = Category::select('name', 'id')->oldest('name')->get();

     
            return view('admin.updatePro', compact('categories'));

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

    public function clientListe(Request $request)
    {
        $clients=User::where('role','client')->get();
        $categ= Category::select('name', 'id')->oldest('name')->get();
        $countClients=User::where('role','client')->count();
        return view('admin.client',compact('clients','countClients','categ'));
    }
    public function freelanceListe(Request $request)
    {
        $freelances= User::where('role','freelance')->get();
        $categ= Category::select('name', 'id')->oldest('name')->get();
        $countFreelances=User::where('role','freelance')->count();

        return view('admin.freelance',compact('freelances','countFreelances','categ'));
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
