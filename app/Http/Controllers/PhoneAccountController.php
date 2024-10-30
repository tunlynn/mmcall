<?php

namespace App\Http\Controllers;

use App\Models\PhoneAccount;
use Illuminate\Http\Request;
use App\Services\MagnusBillingService;
use Illuminate\Support\Str;

class PhoneAccountController extends Controller
{
    public function index()
    {
        $magnus = new MagnusBillingService;
        $data = [
            'username' => 'apitestuser',
            'password' => 'password',
            'active' => '1',
            'firstname' => 'my name',
            'email' => 'apiuser@email.com',
            'id_group' => 3, //DEFAULT: GROUP IS USER
            'id_plan' => 2, //DEFAULT: GET THE FIRST PLAN THAT YOU SET TO USE IN SIGNUP      
            'credit' => 0,
            'callingcard_pin' => 1234,
        ];
        $response = $magnus->createAccount($data);
        // $response = $magnus->getAccount();

        return $response;
    }

    public function store()
    {
        $phoneaccount = auth()->user()->phoneaccount;
        if (!$phoneaccount) {
            $data = [
                'username' => random_int(10000, 99999),
                'password' => Str::random(10),
                'email' => auth()->user()->email,
                'active' => '1',
                'firstname' => auth()->user()->name,
                'id_group' => 3,
                'id_plan' => 2,
                'credit' => 0,
                'callingcard_pin' => random_int(100000, 999999),
            ];

            $magnus = new MagnusBillingService;

            $response = $magnus->createAccount($data);

            $phoneaccount = new PhoneAccount;
            $phoneaccount->username = $data['username'];
            $phoneaccount->password = $data['password'];
            $phoneaccount->user_id = auth()->user()->id;
            $phoneaccount->save();
        }


        return redirect('/home');
    }
}
