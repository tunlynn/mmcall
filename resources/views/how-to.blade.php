@extends('layouts.app')

@section('content')
<div class="container">
    <h1>How to Set Up and Use Your Softphone Account with Linphone</h1>

    <h2>Step 1: Install Linphone</h2>
    <ol>
        <li>Download Linphone from:
            <br>
            <a href="https://www.linphone.org/" target="_blank">Official
                website</a>
            <br>
            <a href="https://play.google.com/store/apps/details?id=org.linphone" target="_blank">Android</a>
            <br>
            <a href="https://apps.apple.com/us/app/linphone/id360065638" target="_blank">iOS</a>
        </li>
        <li>Install Linphone on your device (available for Windows, Mac, iOS, Android, and Linux).</li>
    </ol>

    <h2>Step 2: Access Your Softphone Account Information</h2>
    <p>After logging in to your account on our service, you’ll find the following Softphone details:</p>
    <ul>
        <li><strong>Account ID</strong>: Used as your <em>SIP Username</em>.</li>
        <li><strong>Password</strong>: Used as your <em>SIP Password</em>.</li>
        <li><strong>Domain</strong>: Used as your <em>SIP Domain</em>.</li>
        <li><strong>Balance</strong>: Shows your remaining balance for calls.</li>
    </ul>

    <h2>Step 3: Configure Your Account in Linphone</h2>
    <ol>
        <li>Open the Linphone app and go to <strong>Menu > Assistant</strong>.</li>
        <li>Navigate to <strong>USE SIP ACCOUNT</strong></li>
        <li>Enter your Softphone details:
            <ul>
                <li><strong>Username</strong>: Enter the <em>Account ID</em> provided in your account.</li>
                <li><strong>Password</strong>: Use the <em>Password</em> provided in your account.</li>
                <li><strong>Domain</strong>: Enter the <em>Domain</em> listed in your account information.
                </li>
                <li><strong>Transport</strong>: Select <em>UDP</em> from the options.
                </li>
            </ul>
        </li>
        <li>Tap <strong>Login</strong> to complete the setup.</li>
    </ol>

    <h2>Step 4: Check Your Balance</h2>
    <p>To view your remaining balance, go to the <strong>Balance</strong> section in your account on our
        service’s web interface.</p>

    <h2>Step 5: Start Making Calls</h2>
    <p>Once Linphone registers successfully with your Softphone account, you can start making and receiving
        calls using the app.</p>
</div>
@endsection