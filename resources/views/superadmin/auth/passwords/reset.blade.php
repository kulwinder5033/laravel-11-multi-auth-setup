<!DOCTYPE html>

<html lang="en">

<head>
    <base href="../../../" />
    <title>Reset Password | Superadmin</title>
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
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
    <!--begin::Theme mode setup on page load-->
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
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('assets/media/auth/bg4.jpg');
            }

            [data-bs-theme="dark"] body {
                background-image: url('assets/media/auth/bg4-dark.jpg');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                <!--begin::Aside-->
                <div class="d-flex flex-center flex-lg-start flex-column">
                    <!--begin::Logo-->
                    <a href="{{ route("index") }}" class="mb-7">
                        <img alt="Logo" src="{{ asset('assets/media/logos/custom-3.svg') }}" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Title-->
                    <h2 class="text-white fw-normal m-0">Your All-in-One Tech Marketplace</h2>
                    <!--end::Title-->
                </div>
                <!--begin::Aside-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div
                class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
                <!--begin::Card-->
                <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                        <!--begin::Form-->
                        <form action="{{ route('superadmin.password.update') }}" method="POST" id="kt_new_password_form">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 fw-bolder mb-3">Setup New Password</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-500 fw-semibold fs-6">Have you already reset the password ?
									<a href="{{ route("superadmin.login") }}" class="link-primary fw-bold">Sign in</a></div>
                                <!--end::Link-->
                            </div>
                            @if (session('status'))
                            <!--begin::Alert-->
                            <div class="alert alert-success d-flex align-items-center p-5">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span class="path1"></span><span class="path2"></span></i>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column">
                                    <!--begin::Title-->
                                    <h5 class="mb-1 text-dark">{{ session('status') }}</h5>
                                    <!--end::Title-->


                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Alert-->
                            @endif
                            <!--begin::Heading-->
                            <!--begin::Login options-->

                            <!--end::Login options-->
                            <!--begin::Separator-->
                            <div class="separator separator-content my-1">
                                <span class="w-400px text-gray-500 fw-semibold fs-7"></span>
                            </div>
                            <div class="fv-row mb-2 fv-plugins-icon-container">
                                <!--begin::Email-->
                                <label class="fs-6 fw-semibold form-label mt-3" for="email">
                                    <span class="required">Email Address</span>
                                </label>
                                <input type="text" placeholder="Email" name="email" id="email" autocomplete="off"
                                    class="form-control bg-transparent" value="{{ $email ?? old('email') }}" readonly/>
                                    @error('email')
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        <div data-field="text_input" data-validator="notEmpty">{{ $message }}</div>
                                    </div>
                                    @enderror
                                <!--end::Email-->
                            </div>
                            <div class="fv-row mb-3">
                                <label class="fs-6 fw-semibold form-label mt-3" for="password">
                                    <span class="required">New Password</span>
                                </label>
                                <input type="password" placeholder="New Password" name="password" id="password"  autocomplete="off"
                                    class="form-control bg-transparent" />
                                    @error('password')
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        <div data-field="text_input" data-validator="notEmpty">{{ $message }}</div>
                                    </div>
                                    @enderror
                                <!--end::Password-->
                            </div>
                            <div class="fv-row mb-3">
                                <label class="fs-6 fw-semibold form-label mt-3" for="password_confirmation">
                                    <span class="required">Confirm Password</span>
                                </label>
                                <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation"  autocomplete="off"
                                    class="form-control bg-transparent" />

                                <!--end::Password-->
                            </div>
                            <div class="d-grid pb-lg-0">
                                <button type="submit" class="btn btn-primary me-4" form="kt_new_password_form">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Submit</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>

                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Footer-->

                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
