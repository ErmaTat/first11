<?php

namespace App\Http\Controllers;
use App\Models\{
    Club
};
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clubs=Club::all();
        return view('backend.clubs.index',compact('clubs'));
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
        //
        $request->validate([
            'name' => 'required|string',
        ]);
        $random_id = str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
        $club=new Club();
        $club->name=$request->name;
        $club->club_id=$random_id;
        $club->save();
        return redirect()->back()->with('success','Team Has been Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $club=Club::find($id);
        return view('backend.clubs.view',compact('club'));
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
}
