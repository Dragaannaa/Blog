<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korisnici;
use Auth;

class KorisniciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $korisnici=Korisnici::ALL();
        return view('korisnici',['korisnici' => $korisnici]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kreirajKorisnika');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $klijent = new Korisnici;
        $klijent->name = $request->input('name');
        $klijent->telephone = $request->input('telephone');
        $klijent->email = $request->input('email');
        $klijent->comment = $request->input('comment');
        $klijent->userID = Auth::user()->id;
        $klijent->save();

        return redirect('/korisnici/kreiraj');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $korisnik=Korisnici::find($id);
        return view('korisnik', compact('korisnik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $korisnik=Korisnici::find($id);
        return view('editujKorisnika')->with('korisnik', $korisnik);
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
        $korisnik = Korisnici::where('id',$id)
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
        $korisnik = Korisnici::where('id',$id);
        $korisnik -> delete();
        return redirect('/korisnici');
    }
}
