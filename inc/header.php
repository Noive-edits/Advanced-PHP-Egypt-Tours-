<!DOCTYPE html>
<html lang="en">

<head>

    <script>
        (function () {
            var stored = localStorage.getItem('theme');
            var prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            var theme = stored || (prefersDark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-bs-theme', theme);
        })();
    </script>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo htmlspecialchars($title ?? "Egypt Tour"); ?>
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            scroll-behavior: smooth;
            font-family: "Poppins", sans-serif;
        }

        html {
            color-scheme: light dark;
        }

        body {
            transition: background-color 0.35s ease, color 0.35s ease;
        }

        .navbar,
        .card,
        footer,
        header {
            transition: background-color 0.35s ease, color 0.35s ease,
                border-color 0.35s ease;
        }

        [data-bs-theme="dark"] .card:hover {
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.55);
        }

        .theme-toggle {
            min-width: 2.75rem;
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .theme-toggle:hover {
            transform: scale(1.05);
        }

        header h1 {
            animation: fadeDown 0.7s ease-out both;
        }

        main {
            animation: fadeUp 0.65s ease-out 0.1s both;
        }

        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-16px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .navbar-brand {
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .navbar-brand:hover {
            color: #ffc107 !important;
            transform: scale(1.03);
        }

        .nav-link {
            position: relative;
            transition: color 0.25s ease, transform 0.25s ease;
        }

        .nav-link:hover {
            color: #ffc107 !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0.5rem;
            right: 0.5rem;
            bottom: 0.25rem;
            height: 2px;
            background: #ffc107;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: scaleX(1);
        }

        .card {
            overflow: hidden;
            transition: transform 0.35s ease, box-shadow 0.35s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.12);
        }

        .card-img-top,
        .img-fluid.rounded {
            transition: transform 0.45s ease;
        }

        .card:hover .card-img-top {
            transform: scale(1.06);
        }

        .btn {
            transition: transform 0.25s ease, box-shadow 0.25s ease,
                background-color 0.25s ease, border-color 0.25s ease, color 0.25s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.35rem 0.85rem rgba(255, 193, 7, 0.4);
        }

        .btn:active {
            transform: translateY(0);
            transition-duration: 0.1s;
        }

        .form-control,
        .form-select {
            transition: border-color 0.25s ease, box-shadow 0.25s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
        }

        .alert {
            animation: fadeUp 0.5s ease-out both;
        }

        .carousel-item img {
            transition: transform 8s ease;
        }

        .carousel-item.active img {
            transform: scale(1.04);
        }

        .carousel-control-prev,
        .carousel-control-next {
            transition: opacity 0.3s ease;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            opacity: 0.85;
        }

        footer {
            transition: background-color 0.3s ease;
        }

        .egypt-flag-text {
            display: inline-block;
            cursor: default;
            transition: background 0.35s ease, color 0.35s ease,
                -webkit-text-fill-color 0.35s ease, filter 0.35s ease;
        }

        .egypt-flag-text:hover {
            background-image: linear-gradient(
                180deg,
                #ce1126 0%,
                #ce1126 33.333%,
                #ffffff 33.333%,
                #ffffff 66.666%,
                #000000 66.666%,
                #000000 100%
            );
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
        }

        .navbar-brand .egypt-flag-text:hover {
            filter: drop-shadow(0 0 0.35px rgba(0, 0, 0, 0.85));
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-warning border-3">

    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            Discover <span class="egypt-flag-text">Egypt</span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">

                    <a
                        class="nav-link <?php echo ($page == 'home') ? 'active fw-bold' : ''; ?>"
                        href="index.php"
                    >
                        Home
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link <?php echo ($page == 'Details') ? 'active fw-bold' : ''; ?>"
                        href="index.php#cities"
                    >
                        Cities
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link <?php echo ($page == 'contact') ? 'active fw-bold' : ''; ?>"
                        href="contacts.php"
                    >
                        Contact
                    </a>

                </li>

                <li class="nav-item">

                    <a
                        class="nav-link <?php echo ($page == 'about') ? 'active fw-bold' : ''; ?>"
                        href="about-us.php"
                    >
                        About Us
                    </a>

                </li>

                <li class="nav-item d-flex align-items-center ms-lg-3 mt-3 mt-lg-0">

                    <button
                        type="button"
                        class="btn btn-outline-warning btn-sm theme-toggle"
                        id="themeToggle"
                        aria-label="Toggle dark mode"
                        title="Toggle dark mode"
                    >
                        <span class="theme-icon-sun d-none" aria-hidden="true">&#9728;</span>
                        <span class="theme-icon-moon" aria-hidden="true">&#9790;</span>
                    </button>

                </li>

            </ul>

        </div>

    </div>

</nav>

<header class="py-5 bg-dark text-white">

    <div class="container text-center">

        <h1 class="display-4 fw-bold text-uppercase text-warning">
            Discover <span class="egypt-flag-text">Egypt</span>
        </h1>

    </div>

</header>

<main class="container my-4">