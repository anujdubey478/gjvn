    <!-- Navigation -->
    <style>
        /* Highlight + blinking effect */
.admission-blink {
    color: #fff !important;
    background: #3942e6;
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: 600;
    animation: blinkGlow 1.5s infinite;
}

/* Glow + blink animation */
@keyframes blinkGlow {
    0% {
        box-shadow: 0 0 5px #e63946;
        opacity: 1;
    }
    50% {
        box-shadow: 0 0 20px #ff6b6b;
        opacity: 0.6;
    }
    100% {
        box-shadow: 0 0 5px #e63946;
        opacity: 1;
    }
}

/* Hover stays solid */
.admission-blink:hover {
    background: #c1121f;
    color: #fff !important;
    animation: none;
}

    </style>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home">
                <img src="{{ asset('template/image/logo.png') }}" class="img-fluid logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home#principal">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home#programs">Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home#campus">Campus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home#faculty">Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link admission-blink" href="admission-form">Admission</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>