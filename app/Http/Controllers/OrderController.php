<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Midtrans\CreateSnapTokenService;
use Illuminate\Support\Facades\Http;


class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', '=', $user->id)->get();

        return view('orders.index', compact('orders'));
    }

    public function show(Order $order)
    {

        $midtransToken = config('midtrans.server_key');
        $snapToken = $order->snap_token;

        $response = Http::withBasicAuth($midtransToken, '')->get("https://api.midtrans.com/v2/$order->number/status");


        $data = $response->json();

        if (is_null($snapToken)) {
            // Jika snap token masih NULL, buat token snap dan simpan ke database

            $midtrans = new CreateSnapTokenService($order);
            $dataMidtrans = $midtrans->getSnapToken();
            $snapToken = $dataMidtrans['snapToken'];


            $order->snap_token = $snapToken;
            $order->save();
        } else {
            if (array_key_exists('transaction_status', $data) && $data['transaction_status'] == 'expire') {
                $midtrans = new CreateSnapTokenService($order);
                $dataMidtrans = $midtrans->getSnapToken();
                $snapToken = $dataMidtrans['snapToken'];


                Order::where('id', '=', $order->id)->update([
                    'snap_token' => $snapToken,
                    'number' =>  $dataMidtrans['orderId']
                ]);
            }
        }

        return view('orders.show', compact('order', 'snapToken'));
    }
}
