<?php

namespace App\Http\Controllers;

use App\Models\Admin\City;
use App\Models\Admin\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::where('status', 1)->get()->take(3);
        $cities = City::orderBy('name', 'ASC')->get();

        // $orders = Order::orderBy('created_at', 'DESC')->get();
        
        // $orderItems = OrderItem::with(['candidate' => function($query) {
        //     $query->where('elected', true);
        // }])
        // ->get()
        // ->groupBy('candidate_id')
        // ->map(function($group) {
        //     return [
        //         'count_elected' => $group->count(),
        //         'candidate' => $group->first()->candidate,
        //     ];
        // });
        
        
        return view('index', compact('cities', 'slides'));
    }

    // public function show($order_id)
    // {
    //     $order = Order::find($order_id);
    //     $orderItems = OrderItem::where('order_id', $order->id)->orderBy('id')->paginate(13);
    //     return view('show', compact('order', 'orderItems'));
        
    // }
}
