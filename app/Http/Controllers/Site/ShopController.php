<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\Candidate;
use App\Models\Admin\City;
use App\Models\Admin\Party;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function city_index($city_slug, Request $request)
    {
        // Recuperar a cidade pelo slug
        $city = City::where('slug', $city_slug)->firstOrFail();

        //dd($city->id);
        // Filtrar os partidos que possuem candidatos na cidade
        $parties = Party::whereHas('candidates', function ($query) use ($city) {
            $query->where('city_id', $city->id);
        })->orderBy('name', 'ASC')->get();

        $cities = City::orderBy('name', 'ASC')->get();
        
        $size = $request->query('size') ? $request->query('size') : 12;
        $o_column = "";
        $o_order = "";
        $order = $request->query('order') ? $request->query('order') : -1;
        $f_cities = $request->query('cities');
        $f_parties = $request->query('parties');
        $min_price = $request->query('min') ? $request->query('min') : 1;
        $max_price = $request->query('max') ? $request->query('max') : 5;

        switch($order)
        {
            case 1:
                $o_column='short_name';
                $o_order='DESC';
                break;
            case 2:
                $o_column='number';
                $o_order='ASC';
                break;
            case 3:
                $o_column='number';
                $o_order='DESC';
                break;
            default:
                $o_column='short_name';
                $o_order='ASC';
        }
        
        $candidates = Candidate::where('city_id', $city->id)->where(function ($query) use ($f_cities) {
            $query->whereIn('city_id', explode(',', $f_cities))->orWhereRaw("'".$f_cities."'=''");
        })->where(function ($query) use ($f_parties) {
            $query->whereIn('party_id', explode(',', $f_parties))->orWhereRaw("'".$f_parties."'=''");
        })->orderBy($o_column, $o_order)->paginate($size);

        return view('site.shop.index', compact('city', 'candidates', 'size', 'order', 'cities', 'f_cities', 'parties', 'f_parties', 'min_price', 'max_price'));
    }
}
