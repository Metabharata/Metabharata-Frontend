<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Story;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function updatePaymentStatus($number, $userId, $orderName)
    {
        $order = Order::where('number', '=', $number)->first();
        if ($orderName == "Level 7") {
            $edit = [
                "level_7" => "unlocked",
                "updated_at" => Carbon::now()
            ];
            $update = Story::where('user_id', '=', $userId)
            ->update($edit);
        }else{
            $edit = [
                "level_6" => "unlocked",
                "updated_at" => Carbon::now()
            ];
            $update = Story::where('user_id', '=', $userId)
            ->update($edit);
        }
    
        $order->update(['payment_status' => '2']);
    
        return response()->json(['success' => true, 'message' => 'Payment status updated successfully'], 200);
    }
    
    

}
