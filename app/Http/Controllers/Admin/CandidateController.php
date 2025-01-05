<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Candidate;
use App\Models\Admin\City;
use App\Models\Admin\Party;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::orderBy('name', 'ASC')->paginate(9);
        return view('admin.candidates.index', compact('candidates'));
    }

    public function create()
    {
        $parties = Party::select('id', 'name')->orderBy('name')->get();
        $cities = City::select('id', 'name')->orderBy('name')->get();
        return view('admin.candidates.create', compact('parties', 'cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:candidates,slug,',
            'short_name' => 'required',
            'caption_number' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'party_id' => 'required',
            'city_id' => 'required'
        ]);

        $candidate = new Candidate();
        $candidate->name = $request->name;
        $candidate->slug = Str::slug($request->name);
        $candidate->short_name = $request->short_name;
        $candidate->status = $request->status;
        $candidate->caption_number = $request->caption_number;
        $candidate->party_id = $request->party_id;
        $candidate->city_id = $request->city_id;
        $current_timestamp = Carbon::now()->timestamp;

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = $current_timestamp . '.' . $image->extension();
            $this->GenerateCandidateThumbnailsImage($image, $imageName);
            $candidate->image = $imageName;
        }

        $gallery_arr = array();
        $gallery_images = "";
        $counter = 1;
        // dd('aqui');
        $candidate->save();

        return redirect(route('admin.candidates.index'))->with('status', 'Candidato (a) criado (a) com sucesso!');
    }

    public function GenerateCandidateThumbnailsImage($image, $imageName)
    {
        $destinationPathThumbnail = public_path('uploads/candidates/thumbnails');
        $destinationPath = public_path('uploads/candidates');
        $img = Image::read($image->path());

        $img->cover(540, 689, "top");

        $img->resize(540, 689, function($constraint) {
            $constraint->aspectRadio();
        })->save($destinationPath.'/'.$imageName);

        $img->resize(104, 104, function($constraint) {
            $constraint->aspectRadio();
        })->save($destinationPathThumbnail.'/'.$imageName);
    }

    public function edit($id)
    {
        $candidate = Candidate::find($id);
        $parties = Party::select('id', 'name')->orderBy('name')->get();
        $cities = City::select('id', 'name')->orderBy('name')->get();

        return view('admin.candidates.edit', compact('parties', 'cities', 'candidate'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:candidates,slug,'.$request->id,
            'short_name' => 'required',
            'caption_number' => 'required',
            'status' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'party_id' => 'required',
            'city_id' => 'required'
        ]);

        // dd($request->name);
        $candidate = Candidate::find($request->id);
        $candidate->name = $request->name;
        $candidate->slug = Str::slug($request->name);
        $candidate->short_name = $request->short_name;
        $candidate->caption_number = $request->caption_number;
        $candidate->status = $request->status;
        $candidate->party_id = $request->party_id;
        $candidate->city_id = $request->city_id;
        $current_timestamp = Carbon::now()->timestamp;

        if($request->hasFile('image'))
        {
            if(File::exists(public_path('uploads/candidates').'/'.$candidate->image))
            {
                File::delete(public_path('uploads/candidates').'/'.$candidate->image);
            }
            if(File::exists(public_path('uploads/candidates/thumbnails').'/'.$candidate->image))
            {
                File::delete(public_path('uploads/candidates/thumbnails').'/'.$candidate->image);
            }

            $image = $request->file('image');
            $imageName = $current_timestamp . '.' . $image->extension();
            $this->GenerateCandidateThumbnailsImage($image, $imageName);
            $candidate->image = $imageName;
        }
        $candidate->save();

        return redirect(route('admin.candidates.index'))->with('status', 'Candidato(a) atualizado(a) com sucesso!');
    }

    public function destroy($id)
    {
        $candidate = Candidate::find($id);
        if(File::exists(public_path('uploads/candidates').'/'.$candidate->image))
        {
            File::delete(public_path('uploads/candidates').'/'.$candidate->image);
        }
        if(File::exists(public_path('uploads/candidates/thumbnails').'/'.$candidate->image))
        {
            File::delete(public_path('uploads/candidates/thumbnails').'/'.$candidate->image);
        }

        $candidate->delete();
        return redirect(route('admin.candidates.index'))->with('status', 'Candidato(a) apagado(a) com sucesso!');
    }
}
