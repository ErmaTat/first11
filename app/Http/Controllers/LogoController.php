<?php

namespace App\Http\Controllers;
use Str,File,Crypt;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\{
 Logo
};
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $logos=Logo::all();
        return view('backend.logo.index',compact('logos'));
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
        $validatedData = $request->validate([
            'logo' => 'required|mimes:png,jpg,jpeg,webp|max:4000',
        ]);
        $image = $request->file('logo');
        $input['logo'] = 'logo_'.md5(time()).'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/logos');
        File::makeDirectory($destinationPath,$mode = 0755, true, true);

        $imgFile = Image::read($image->path());

        $ratio = 9/6;

        $imgFile->resize($imgFile->width(),intval($imgFile->width() / $ratio))
        ->save($destinationPath.'/'.$input['logo']);

        $logo=new Logo();
        $logo->logo=$input['logo'];
        $logo->save();
        return redirect()->back()->with('success','Logo Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
