<!-- resources/views/landing.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affordable Calls to Myanmar - Pay-As-You-Go</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        /* Custom styles for a modern look */
        .hero {
            background: linear-gradient(135deg, #ffffff, #f1f1f1, #e0e0e0);
            color: #333;
            padding: 10rem 0;
        }

        .feature-icon {
            font-size: 1.5rem;
            color: #007bff;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/landing') }}">
                <img src="logo.png" class="img-fluid" alt="MMCall" style= "max-width: 100px;" />
            </a>



            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <a href="{{ auth()->user() ? url('/home') : url('/login') }}"
                    class="btn btn-outline-dark ms-lg-5 mt-2 mt-lg-0">{{ auth()->user() ? 'Go to My Account' : 'Login' }}</a>
            </div>

        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Stay Connected to Myanmar at Affordable Rates</h1>
            <p class="lead">Reliable, low-cost international calling with no hidden fees or contracts. Pay only for
                what you use.</p>
            <a href="{{ url('register') }}" class="btn btn-dark btn-lg mt-3">Get Started</a>
        </div>
    </header>

    <!-- Features Section -->
    <section id="features" class="p-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Choose Our Service?</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="feature-icon mb-3"><i class="bi bi-wallet2"></i></div>
                    <h4 class="fw-bold">Low Rates</h4>
                    <p>Enjoy the best rates for calls to Myanmar. Pay as you go, with no long-term commitments.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-3"><i class="bi bi-clock-history"></i></div>
                    <h4 class="fw-bold">Flexible Minutes</h4>
                    <p>Control your usage with pay-as-you-go minutes. Only pay for the time you use.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-3"><i class="bi bi-shield-lock"></i></div>
                    <h4 class="fw-bold">Secure & Reliable</h4>
                    <p>Our secure platform ensures quality calls without drops or interruptions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="bg-light p-5">
        <div class="container">
            <h2 class="text-center mb-4">Simple, Transparent Pricing</h2>
            <p class="text-center">Our affordable pay-as-you-go model lets you call Myanmar without breaking the bank.
            </p>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-dark mb-4 text-center">
                        <div class="card-header text-dark">
                            <h3 class="fw-bold">Pay-As-You-Go</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="display-4">฿1.0 / Min</h4>
                            <p>Only pay for what you use. No monthly fees or hidden charges.</p>
                            <a href="{{ url('/register') }}" class="btn btn-outline-dark">Start Calling Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="p-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-5">What Our Users Say</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <blockquote class="blockquote">
                        <p>"Affordable and reliable. It’s never been easier to stay in touch with my family."</p>
                        <footer class="blockquote-footer">Aung Myint</footer>
                    </blockquote>
                </div>
                <div class="col-md-4 text-center">
                    <blockquote class="blockquote">
                        <p>"The pay-as-you-go feature gives me full control over my spending. Great service!"</p>
                        <footer class="blockquote-footer">Soe Lwin</footer>
                    </blockquote>
                </div>
                <div class="col-md-4 text-center">
                    <blockquote class="blockquote">
                        <p>"I can make calls to Myanmar without worrying about high costs. Highly recommended!"</p>
                        <footer class="blockquote-footer">Min Thant</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="bg-light p-5">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="text-center mb-5">Frequently Asked Questions</h2>
            {{-- <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How does pay-as-you-go work?
                        </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                        <div class="accordion-body">
                            You simply add funds to your account and pay only for the minutes you use. No monthly fees or contracts.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Are there any hidden fees?
                        </button>
                    </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                            No hidden fees! Our rates are transparent and you only pay for the minutes you use.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How can I check my balance?
                        </button>
                    </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                        <div class="accordion-body">
                            Log into your account to view your current balance and call history.
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="">
                <div class="w-100 mb-4">
                    <h3>How does pay-as-you-go work?</h3>
                    You simply add funds to your account and pay only for the minutes you use. No monthly fees or
                    contracts.
                </div>
                <div class="w-100 mb-4">
                    <h3>Are there any hidden fees?</h3>
                    No hidden fees! Our rates are transparent and you only pay for the minutes you use.
                </div>
                <div class="w-100">
                    <h3>How can I check my balance?</h3>
                    Log into your account to view your current balance and call history.
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="p-5 text-center">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions, feel free to reach out!</p>
            <a href="{{ url('https://m.me/443192478884918') }}" target="_blank" class="btn btn-outline-dark">Contact
                Support</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-3">
        <div class="container">
            <p class="mb-0">© {{ date('Y') }} MMCall Service. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
