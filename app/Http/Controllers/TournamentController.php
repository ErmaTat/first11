<?php

namespace App\Http\Controllers;
use App\Models\{
    Tournament,
    Tournament_To_club,
    Club
};
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tournaments=Tournament::all();
        return view('backend.tournaments.index',compact('tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'starts' => 'required',
            'ends' => 'required',
        ]);
        $random_id = str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        $tournament=new Tournament();
        $tournament->name=$request->name;
        $tournament->starts=$request->starts;
        $tournament->ends=$request->ends;
        $tournament->tournament_id=$random_id;
        $tournament->save();

        return redirect()->back()->with('success','Tournament Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tournament=Tournament::find($id);
        $clubs=Club::all();
        return view('backend.tournaments.view',compact('tournament','clubs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function register(Request $request)
    {
        //
        $request->validate([
            'club_id' => 'required',
            'tournament_id' => 'required'
        ]);
        //'unique:'.User::class
        $tt=Tournament_To_club::where('club_id',$request->club_id)->where('tournament_id',$request->tournament_id)->get();
        if(count($tt)>0){
            return redirect()->back()->with('error','Team Already Registered');
        }else{
            $ttc=new Tournament_To_club();
            $ttc->tournament_id=$request->tournament_id;
            $ttc->club_id=$request->club_id;
            $ttc->save();
            return redirect()->back()->with('success','Team Registered Successfully');
        }

    }
}
