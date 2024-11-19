<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\PhoneAccount;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Services\MagnusBillingService;
// use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
        if (!$phone_account) {
            $username = null;

            do {
                $username = random_int(1000000000, 9999999999);
            } while (PhoneAccount::where('username', $username)->exists());


            $data = [
                'username' => $username,
                'password' => Str::random(8),
                'email' => auth()->user()->email,
                'active' => '1',
                'firstname' => auth()->user()->name,
                'id_group' => 3,
                'id_plan' => 1,
                'credit' => 1,
                'callingcard_pin' => random_int(100000, 999999),
                'calllimit' => 1,
                'cpslimit' => 1,
            ];
            $response = $magnus->createAccount($data);
            $new_phone_account = new PhoneAccount;
            $new_phone_account->username = $data['username'];
            $new_phone_account->password = $data['password'];
            $new_phone_account->user_id = auth()->user()->id;
            $new_phone_account->save();
            $phone_account = $new_phone_account;
            Mail::send([], [], function ($message) use ($data) {
                $message->to('tunlynnag@gmail.com') // Replace with the admin email
                    ->subject('MMCall - New User Signup')
                    ->html(
                        '<h1>New User Signup</h1>
                        <p>A new user has signed up:</p>
                        <ul>
                            <li>Name: ' . $data['firstname'] . '</li>
                            <li>Account ID: ' . $data['username'] . '</li>
                            <li>Email: ' . $data['email'] . '</li>
                        </ul>',
                        'text/html'
                    );
            });
        }

        $credit_response = $magnus->getCreditByUsername($phone_account->username);
        if ($credit_response == "Error: No phone account found") {
            return ("Something went wrong while fetching your data. Please contact our support at Telegram @telegram_username.php ");
        }
        return view('home', [
            'phoneaccount' => $phone_account,
            'credit' => $credit_response,
        ]);
    }
}
