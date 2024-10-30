<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\PhoneAccount;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;

use App\Services\MagnusBillingService;
use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $magnus = new MagnusBillingService;
        $phone_account = auth()->user()->phoneaccount;
        if(!$phone_account){
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
            $response = $magnus->createAccount($data);
            $new_phone_account = new PhoneAccount;
            $new_phone_account->username = $data['username'];
            $new_phone_account->password = $data['password'];
            $new_phone_account->user_id = auth()->user()->id;
            $new_phone_account->save();
            $phone_account = $new_phone_account;
        }
        
        $credit = $magnus->getCreditByUsername($phone_account->username);
        return view('home', [
            'phoneaccount' => $phone_account,
            'credit' => $credit,
        ]);
    }
}
