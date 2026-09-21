<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') Child Life Care Foundation</title>
    <meta name="description" content="@yield('meta_description', 'Child Life Care Foundation provides food, medical aid, education and essential care to underprivileged children and families across India.')">
    <meta name="theme-color" content="#31259e">

    <link rel="icon" type="image/png" href="{{ asset('front/img/favicon-clcf.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('front/img/logo-clcf-240.png') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Child Life Care Foundation">
    <meta property="og:title" content="@yield('title') Child Life Care Foundation">
    <meta property="og:image" content="{{ asset('front/img/logo-clcf.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('front/css/modern.css') }}?v=3">
    @stack('styles')
</head>

<body>
    <a class="skip-link" href="#main">Skip to content</a>

    @include('guest.sections.header')

    <main id="main">
        @yield('content')
    </main>

    @include('guest.sections.footer')

    <div class="float-stack">
        <a class="float-btn float-btn--wa" href="https://wa.me/917011389643" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.7-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-.9 1.2-.2.2-.3.2-.6.1-.3-.2-1.2-.5-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.5-.5c.1-.2.2-.3.3-.5 0-.2 0-.4 0-.5 0-.2-.7-1.6-.9-2.2-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.2 5.1 4.4.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 2-1.4.2-.7.2-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/><path d="M12 2a10 10 0 0 0-8.6 15L2 22l5.1-1.3A10 10 0 1 0 12 2zm0 18.2c-1.5 0-3-.4-4.3-1.2l-.3-.2-3 .8.8-3-.2-.3A8.2 8.2 0 1 1 12 20.2z"/></svg>
        </a>
        <button class="float-btn float-btn--top to-top" type="button" aria-label="Back to top">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
        </button>
    </div>

    <script src="{{ asset('front/js/modern.js') }}?v=3"></script>
    @stack('scripts')
</body>

</html>
