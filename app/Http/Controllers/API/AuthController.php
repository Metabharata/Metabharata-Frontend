<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Price;
use App\Models\Story;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $data = $request->all();
            $pricesData = Price::get();
            $validate = Validator::make($data, [
                "name" => "required",
                "email" => "required|unique:users,email",
                "password" => "required",
            ]);
            if ($validate->fails()) {
                $response = [
                    'errors' => $validate->errors()
                ];

                return ResponseFormatter::error($response, 'Bad Request', 400);
            }
            $userData = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role' => 'user',
            ]);

            $storyData = Story::create([
                'user_id' => $userData->id,
                'level_6' => 'locked',
                'level_7' => 'locked',
            ]);

            

            foreach ($pricesData as $priceData) {
                $randomDatetime = now()->format('YmdHis') . mt_rand(100, 999);
            
                $orderData = Order::create([
                    'user_id' => $userData->id,
                    'order_name' => $priceData->name_product,
                    'number' => 'ORD' . $randomDatetime,
                    'total_price' => $priceData->price,
                    'payment_status' => '1', // Menunggu pembayaran
                    'snap_token' => null,
                ]);
            }

            return ResponseFormatter::success("Succeed Register Data.");
        } catch (Exception $e) {
            $response = [
                'errors' => $e->getMessage(),
            ];
            return ResponseFormatter::error($response, 'Something went wrong', 500);
        }
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('email', 'password');
            $validate = Validator::make(
                $credentials,
                [
                    'email' => 'required',
                    'password' => 'required',
                ]
            );
            if ($validate->fails()) {
                $response = [
                    'errors' => $validate->errors()
                ];

                return ResponseFormatter::error($response, 'Bad Request', 400);
            }

            if (!Auth::attempt($credentials)) {
                $messages = 'Email atau sandi yang Anda masukkan salah';

                throw new Exception($messages, 401);
            }

            $user = User::where('email', $request['email'])->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;

            if ($user->role == "administrator") {
                $response = [
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                    'user' => $user,
                ];
                return ResponseFormatter::success($response, 'Authenticated Administrator Success');
            } else {
                $response = [
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                    'user' => $user,
                ];
                return ResponseFormatter::success($response, 'Authenticated Success');
            }
        } catch (Exception $e) {
            $response = [
                'errors' => $e->getMessage(),
            ];
            return ResponseFormatter::error($response, 'Something went wrong', 500);
        }
    }

    public function getUser()
    {
        try {
            $user = User::where('role', '=', 'user')
                ->orderBy('created_at', 'desc')
                ->get();

            $response = $user;

            return ResponseFormatter::success($response, 'Get User Success');
        } catch (Exception $e) {
            $response = [
                'errors' => $e->getMessage(),
            ];
            return ResponseFormatter::error($response, 'Something went wrong', 500);
        }
    }
}
