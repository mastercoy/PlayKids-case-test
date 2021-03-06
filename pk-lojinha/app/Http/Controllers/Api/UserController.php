<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller {

    public function purchase(Request $request) {
        $user = User::firstOrCreate(
            [
                'email' => $request->input('email')
            ],
            [
                'password' => Hash::make(Str::random(12)),
                'name' => $request->input('first_name') . ' ' . $request->input('last_name'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'zip_code' => $request->input('zip_code')
            ]
        );

        try {
            $payment = $user->charge(
                $request->input('amount'),
                $request->input('payment_method_id')
            );

            $payment = $payment->asStripePaymentIntent();

            $order = $user->orders()
                          ->create([
                                       'transaction_id' => $payment->charges->data[0]->id,
                                       'total' => $payment->charges->data[0]->amount
                                   ]);

            foreach (json_decode($request->input('cart'), true) as $item) {
                $order->products()
                      ->attach($item['id'], ['quantity' => $item['quantity']]);
            }

            $order->load('products');
            return $order;

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }

    }

    public function login(Request $request) {

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                                'message' => ['Usuário e/ou senha incorretos.']
                            ], 404);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);


    }

    public function register(Request $request) {
        $request['password'] = bcrypt($request['password']);
        $data = $request->all();

        $user = User::firstOrCreate($data);
        return $user;

    }

}
