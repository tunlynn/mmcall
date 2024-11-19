@extends('layouts.app')

@section('content')
<div class="container">
    <h2>MMCall ကိုစတင်အသုံးပြုရန်</h2>

    <h3>အဆင့်(၁) Linphone application ကိုဖုန်းတွင် ထည့်သွင်းပါ။</h3>
    <ol>
        <li>Linphone application ကို အောက်ပါ link များမှတစ်ဆင့် download ရယူပါ။
            <br>
            <a href="https://www.linphone.org/" target="_blank">Official
                website</a>
            <br>
            <a href="https://play.google.com/store/apps/details?id=org.linphone" target="_blank">Android</a>
            <br>
            <a href="https://apps.apple.com/us/app/linphone/id360065638" target="_blank">iOS</a>
        </li>
        <li>သင့်ရဲ့ device တွင် Linphone application ကို install လုပ်ပါ။ (available for Windows, Mac, iOS, Android, and Linux)</li>
    </ol>

    <h3>အဆင့်(၂)  Phone account ကို စတင်အသုံးပြုရန် အချက်အလက်များကို စစ်ဆေးပါ။</h3>
    <p>သင်၏အကောင့်ကို <a href="{{ url("/home") }}">MM-Call service</a> တွင် log in ဝင်ပြီးနောက် phone account အချက်အလက်များကို အောက်မှာဖော်ပြထားတဲ့အတိုင်း မြင်တွေ့ရမှာ ဖြစ်ပါတယ်။</p>
    <ul>
        <li><strong>Account ID</strong>: သည် Linphone account ၏ <em>SIP Username</em> ဖြစ်သည်။</li>
        <li><strong>Password</strong>: သည် Linphone account ၏ <em>SIP Password</em> ဖြစ်သည်။</li>
        <li><strong>Domain</strong>: သည် Linphone account ၏ <em>SIP Domain</em> ဖြစ်သည်။</li>
        <li><strong>Balance</strong>: သည် ဖုန်းခေါ်ဆိုမှုအတွက် သင်၏လက်ကျန်မိနစ်များကို ပြသထားခြင်းဖြစ်သည်။</li>
    </ul>

    <h3>အဆင့်(၃) Linphone Account တွင် အချက်အလက်များကို ထည့်သွင်းပါ။</h3>
    <ol>
        <li>Linphone application ကိုဖွင့်ပြီး <strong>Menu</strong> ထဲမှ <strong>Assistant</strong> ကိုသွားပါ။</li>
        <li><strong>Assistant</strong> ထဲမှ <strong>USE SIP ACCOUNT</strong> ကိုရွေးပါ။</li>
        <li>သင်၏ အချက်အလက်များကို အောက်ပါအတိုင်း ထည့်သွင်းပါ။
            <ul>
                <li><strong>Username</strong> နေရာတွင် <em>Account ID</em> ကိုဖြည့်ပါ။</li>
                <li><strong>Password</strong> နေရာတွင် သင်၏ Account အချက်အလက် ထဲမှ <em>Password</em> ကိုဖြည့်ပါ။</li>
                <li><strong>Domain</strong>: နေရာတွင် သင်၏ Account အချက်အလက် ထဲမှ <em>Domain</em> ကိုဖြည့်ပါ။
                </li>
                <li><strong>Transport</strong> တွင် <em>UDP</em> ကိုရွေးပါ။
                </li>
            </ul>
        </li>
        <li><strong>Login</strong> ကိုနှိပ်ပါ။</li>
    </ol>
    <h3>အဆင့်(၄) ဖုန်းစတင်ခေါ်ဆိုနိုင်ပါပြီ။</h3>
    <p>Linphone အကောင့်ကို အောင်မြင်စွာပြုလုပ်ပြီးသည်နှင့် တစ်ပြိုင်နက် ဖုန်းခေါ်ဆိုမှုများကို စတင်ပြုလုပ်နိုင်မှာ ဖြစ်ပါတယ်။</p>

        <h3>အဆင့်(၅) သင်၏လက်မိနစ်ကို စစ်ဆေးပါ။</h3>
    <p>ဖုန်းခေါ်ဆိုမှုအတွက် လက်ကျန်မိနစ်များကို စစ်ဆေးရန် ကျွန်ပ်တို့ website စာမျက်နှာရှိ  balance section တွင် စစ်‌ဆေးနိုင်ပါသည်။</p>
</div>
<hr>
<div class="container mt-4">
    <h2>How to Set Up and Use Your Softphone Account with Linphone</h2>

    <h3>Step 1: Install Linphone</h3>
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

    <h3>Step 2: Access Your Softphone Account Information</h3>
    <p>After logging in to your account on our service, you’ll find the following Softphone details:</p>
    <ul>
        <li><strong>Account ID</strong>: Used as your <em>SIP Username</em>.</li>
        <li><strong>Password</strong>: Used as your <em>SIP Password</em>.</li>
        <li><strong>Domain</strong>: Used as your <em>SIP Domain</em>.</li>
        <li><strong>Balance</strong>: Shows your remaining minutes for calls.</li>
    </ul>

    <h3>Step 3: Configure Your Account in Linphone</h3>
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
    <h3>Step 4: Start Making Calls</h3>
    <p>Once Linphone registers successfully with your Softphone account, you can start making and receiving
        calls using the app.</p>

        <h3>Step 5: Check Your Remaining Balance</h3>
    <p>To view your remaining minutes, go to the <strong>Balance</strong> section in your account on our
        service’s web interface.</p>
</div>

@endsection