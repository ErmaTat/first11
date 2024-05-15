<?php

namespace App\Http\Controllers;
use App\Models\{
    Tournament,
    Club
};
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function competition(string $id)
    {
        //
       $cup=Tournament::find($id);
       return view('frontend.cup',compact('cup'));
    }

    public function team(string $id)
    {
        //
       $team=Club::find($id);
       return view('frontend.team',compact('team'));
    }

    public function blogs()
    {
        //
       return view('frontend.blog');
    }

    public function about()
    {
        //
       return view('frontend.about');
    }
    public function contact()
    {
        //
       return view('frontend.contact');
    }

    public function players()
    {
        //
       return view('frontend.players');
    }

    public function teams()
    {
        //
       return view('frontend.clubs');
    }
}
