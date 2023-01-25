<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korisnici;
use App\Models\Knjige;
use Auth;



class KnjigeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knjige=Knjige::ALL();
        return view('knjige',['knjige' => $knjige]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kreirajKnjigu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $knjiga = new Knjige;
        $knjiga->ime = $request->input('ime');
        $knjiga->godina = $request->input('godina');
        $knjiga->autor = $request->input('autor');
        $knjiga->opis = $request->input('opis');
        $knjiga->userID = Auth::user()->id;
        $knjiga->save();
        return redirect('/knjige/kreiraj');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $knjiga=Knjige::find($id);
        return view('knjiga', compact('knjiga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $knjiga=Knjige::find($id);
        return view('editujKnjigu')->with('knjiga', $knjiga);
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
            'ime'=>'required',
            'autor' =>'required',
            'godina'=>'required',
        ]);
        $knjiga = Knjige::where('id',$id)
        ->update([
            'ime'=>$request->input('ime'),
            'godine'=>$request->input('godina'),
            'autor'=>$request->input('autor'),
            'opis'=>$request->input('opis'),
        ]);
        return redirect('/knjige');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $knjiga = Knjige::where('id',$id);
        $knjiga -> delete();
        return redirect('/knjige');
    }
}
