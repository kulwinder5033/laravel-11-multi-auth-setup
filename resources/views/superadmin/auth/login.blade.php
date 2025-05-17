<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../../" />
    <title>Login | Superadmin</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Sell your old mobile phones, laptops, and gadgets for the best price online or get them professionally repaired at your doorstep. Instant price quotes, free pickup, expert technicians, and quick cash payments. Trusted service across India." />
    <meta name="keywords"
        content="sell old phone, repair mobile phone, sell used gadgets, phone repair online, gadget repair service, sell old laptop, mobile screen repair, doorstep phone repair, cash for used devices, electronics repair India" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Sell & Repair Old Phones & Gadgets Online | Instant Cash & Expert Service" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="Electronics Repair | Sell | Shop" />

    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>


<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">

    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>

    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <style>
            body {
                background-image: url('assets/media/auth/bg4.jpg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg4-dark.jpg');
            }
        </style>

        <div class="d-flex flex-column flex-column-fluid flex-lg-row">

            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">

                <div class="d-flex flex-center flex-lg-start flex-column">

                    <a href="{{ route("index") }}" class="mb-7">
                        <img alt="Logo" src="{{ asset('assets/media/logos/custom-3.svg') }}" />
                    </a>

                    <h2 class="text-white fw-normal m-0">Your All-in-One Tech Marketplace</h2>

                </div>

            </div>

            <div
                class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">

                <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">

                    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">

                        <form action="{{ route('superadmin.login') }}" method="POST">
                            @csrf

                            <div class="text-center mb-11">

                                <h1 class="text-gray-900 fw-bolder mb-3">Superadmin Login</h1>

                                <div class="text-gray-500 fw-semibold fs-6">Welcome to Metronic</div>

                            </div>

                            <div class="separator separator-content my-1">
                                <span class="w-400px text-gray-500 fw-semibold fs-7"></span>
                            </div>

                            <div class="fv-row mb-2 fv-plugins-icon-container">

                                <label class="fs-6 fw-semibold form-label mt-3" for="email">
                                    <span class="required">Email Address</span>
                                </label>
                                <input type="text" placeholder="Email" name="email" id="email" autocomplete="off" value="admin@admin.com"
                                    class="form-control bg-transparent" />
                                    @error('email')
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        <div data-field="text_input" data-validator="notEmpty">{{ $message }}</div>
                                    </div>
                                    @enderror

                            </div>

                            <div class="fv-row mb-3">
                                <label class="fs-6 fw-semibold form-label mt-3" for="password">
                                    <span class="required">Password</span>
                                </label>
                                <input type="password" placeholder="Password" name="password" id="password" value="password"  autocomplete="off"
                                    class="form-control bg-transparent" />
                                    @error('password')
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        <div data-field="text_input" data-validator="notEmpty">{{ $message }}</div>
                                    </div>
                                    @enderror

                            </div>
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                <a href="{{ route('superadmin.password.request') }}"
                                    class="link-primary">Forgot Password ?</a>
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">Sign In</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        var hostUrl = "assets/";
    </script>

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>

</body>


</html>
