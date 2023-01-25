<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korisnici;
use App\Models\Knjige;
use App\Models\Procitane;
use Auth;

class ProcitaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procitane=Procitane::ALL();
        return view('procitane',['procitane' => $procitane]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kreirajProcitana');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $procitana = new Procitane;
        $procitana->name = $request->input('name');
        $procitana->telephone = $request->input('telephone');
        $procitana->email = $request->input('email');
        $procitana->comment = $request->input('comment');
        $procitana->book = $request->input('book');
        $procitana->autor = $request->input('autor');
        $procitana->userID = Auth::user()->id;
        $procitana->save();

        return redirect('/procitane/kreiraj');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $procitana=Procitane::find($id);
        return view('procitana', compact('procitana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procitana=Procitane::find($id);
        return view('editujProcitana')->with('procitana', $procitana);
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
        $request->validate([
            'name'=>'required',
            'email' =>'required',
            'telephone'=>'required',
        ]);
        $procitana = Procitane::where('id',$id)
        ->update([
            'name'=>$request->input('name'),
            'telephone'=>$request->input('telephone'),
            'email'=>$request->input('email'),
            'comment'=>$request->input('comment'),
        ]);
        return redirect('/korisnici');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procitana = Procitano::where('id',$id);
        $procitana -> delete();
        return redirect('/procitane');
    }
}
