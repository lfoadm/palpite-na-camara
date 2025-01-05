<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\City;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::orderBy('id', 'DESC')->paginate(10);
        return view('admin.cities.index', compact('cities'));
    }
    
    public function create()
    {
        return view('admin.cities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:cities,slug,',
            'quantity' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]);


        $city = new City();
        $city->name = $request->name;
        $city->slug = Str::slug($request->name);
        $city->quantity = $request->quantity;

        $image = $request->file('image');
        $file_extention = $request->file('image')->extension();
        $file_name = Carbon::now()->timestamp.'.'.$file_extention;
        $this->GenerateCityThumbnailsImage($image, $file_name);
        $city->image = $file_name;
        $city->save();        

        return redirect(route('admin.cities.index'))->with('status', 'Cidade cadastrada com sucesso!');
    }

    public function edit($id)
    {
        $city = City::find($id);
        return view('admin.cities.edit', compact('city'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:cities,slug,'.$request->id,
            'quantity' => 'required',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $city = city::find($request->id);
        $city->name = $request->name;
        $city->slug = Str::slug($request->name);
        $city->quantity = $request->quantity;

        if($request->hasFile('image')){
            if(File::exists(public_path('uploads/cities').'/'.$city->image))
            {
                File::delete(public_path('uploads/cities').'/'.$city->image);
            }
            $image = $request->file('image');
            $file_extention = $request->file('image')->extension();
            $file_name = Carbon::now()->timestamp.'.'.$file_extention;
            $this->GenerateCityThumbnailsImage($image, $file_name);
            $city->image = $file_name;
        }
        $city->save();        

        return redirect(route('admin.cities.index'))->with('status', 'Cidade atualizada com sucesso!');
    }

    public function GenerateCityThumbnailsImage($image, $imageName)
    {
        $destinationPath = public_path('uploads/cities');
        $img = Image::read($image->path());
        $img->cover(124, 124, "top");
        $img->resize(124, 124, function($constraint) {
            $constraint->aspectRadio();
        })->save($destinationPath.'/'.$imageName);
    }

    public function destroy($id)
    {
        $city = City::find($id);
        if(File::exists(public_path('uploads/cities').'/'.$city->image))
        {
            File::delete(public_path('uploads/cities').'/'.$city->image);
        }
        $city->delete();
        return redirect(route('admin.cities.index'))->with('status', 'Cidade apagada com sucesso!');
    }
}
