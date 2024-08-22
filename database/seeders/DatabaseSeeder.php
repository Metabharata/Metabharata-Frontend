<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Order;
use App\Models\Price;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $datas = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'administrator',
            ],
        ];

        foreach ($datas as $data) {
            User::factory()->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'role' => $data['role'],
            ]);
        }

        $prices = [
            [
                'name_product' => 'Level 6',
                'price' => '10000',
            ],
            [
                'name_product' => 'Level 7',
                'price' => '10000',
            ]
        ];

        foreach ($prices as $price) {
            Price::create([
                'name_product' => $price['name_product'],
                'price' => $price['price'],
            ]);
        }

        // $orders = [
        //     [
        //         'number' => 'ORD12345',
        //         'total_price' => 150.00,
        //         'payment_status' => '2', // Sudah dibayar
        //         'snap_token' => 'token123',
        //     ],
        //     [
        //         'number' => 'ORD67890',
        //         'total_price' => 250.00,
        //         'payment_status' => '1', // Menunggu pembayaran
        //         'snap_token' => null,
        //     ],
        //     // Tambahkan data order lainnya sesuai kebutuhan
        // ];

        // foreach ($orders as $order) {
        //     Order::create($order);
        // }
    }
}
