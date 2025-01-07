<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }

        $items = session()->get('cart', []);
        $city = null;

        if (!empty($items)) {
            // Sempre busca o primeiro item válido no array
            $first_item = reset($items); // Recupera o primeiro item do array, independentemente do índice

            if (isset($first_item['city_id'])) {
                $city = City::where('id', $first_item['city_id'])->first();
            }
            
        }
        
        $data = ['cart' => $items];

        return view('site.checkout.index', $data, compact('city'));
    }

    public function order_confirmation()
    {
        // teste para visualizar bilhete final
        return view('site.checkout.confirmation');
    }
}
