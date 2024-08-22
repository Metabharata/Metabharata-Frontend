<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function prices(){
        $data = Price::get();
        return view('dashboard.price', compact('data'));
    }

    public function edit($id)
    {
        $price = Price::where('id','=', $id)->first();
        return view('dashboard.update_price', compact('price'));
    }

    public function update(Request $request, $id){
        $edits = [
            "name_product" => $request->name_product,
            "price" => $request->price,
            "updated_at" => Carbon::now()
        ];
        
        // Update Price
        $updates = Price::where('id','=', $id)->update($edits);
        
        // Update total_price in Orders
        Order::where('order_name', $request->name_product)->update(['total_price' => $request->price]);
        
        // Retrieve updated Orders
        $data = Order::where('order_name', $request->name_product)->get();

        return redirect()->route('price');
    }
}
