<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Party;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class PartyController extends Controller
{
    public function index()
    {
        $parties = Party::orderBy('id', 'DESC')->paginate(9);
        return view('admin.parties.index', compact('parties'));
    }
    
    public function create()
    {
        return view('admin.parties.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:parties,slug,',
            'acronym' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]);


        $party = new Party();
        $party->name = $request->name;
        $party->slug = Str::slug($request->name);
        $party->acronym = $request->acronym;

        $image = $request->file('image');
        $file_extention = $request->file('image')->extension();
        $file_name = Carbon::now()->timestamp.'.'.$file_extention;
        $this->GeneratePartyThumbnailsImage($image, $file_name);
        $party->image = $file_name;
        $party->save();        

        return redirect(route('admin.parties.index'))->with('status', 'Partido cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $party = Party::find($id);
        return view('admin.parties.edit', compact('party'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:parties,slug,'.$request->id,
            'acronym' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $party = Party::find($request->id);
        $party->name = $request->name;
        $party->slug = Str::slug($request->name);
        $party->acronym = $request->acronym;

        if($request->hasFile('image')){
            if(File::exists(public_path('uploads/parties').'/'.$party->image))
            {
                File::delete(public_path('uploads/parties').'/'.$party->image);
            }
            $image = $request->file('image');
            $file_extention = $request->file('image')->extension();
            $file_name = Carbon::now()->timestamp.'.'.$file_extention;
            $this->GeneratePartyThumbnailsImage($image, $file_name);
            $party->image = $file_name;
        }
        $party->save();        

        return redirect(route('admin.parties.index'))->with('status', 'Partido atualizado com sucesso!');
    }

    public function GeneratePartyThumbnailsImage($image, $imageName)
    {
        $destinationPath = public_path('uploads/parties');
        $img = Image::read($image->path());
        $img->cover(124, 124, "top");
        $img->resize(124, 124, function($constraint) {
            $constraint->aspectRadio();
        })->save($destinationPath.'/'.$imageName);
    }

    public function destroy($id)
    {
        $party = Party::find($id);
        if(File::exists(public_path('uploads/parties').'/'.$party->image))
        {
            File::delete(public_path('uploads/parties').'/'.$party->image);
        }
        $party->delete();
        return redirect(route('admin.parties.index'))->with('status', 'Partido apagado com sucesso!');
    }
}
