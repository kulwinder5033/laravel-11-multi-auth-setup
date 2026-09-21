<!-- topbar -->
<div class="topbar">
    <div class="shell topbar__inner">
        <ul class="topbar__list">
            <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>
                Reg. No. {{ config('org.reg_no') }}
            </li>
            <li class="topbar__sep">|</li>
            <li>PAN {{ config('org.pan') }}</li>
        </ul>
        <ul class="topbar__list">
            <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg>
                <a href="mailto:{{ config('org.email') }}">{{ config('org.email') }}</a>
            </li>
            <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/></svg>
                <a href="tel:+{{ config('org.phone_e164') }}">{{ config('org.phone') }}</a>
            </li>
        </ul>
    </div>
</div>
<!-- /topbar -->

<!-- header -->
<header class="site-header">
    <div class="shell">
        <nav class="nav" aria-label="Main navigation">
            <a class="brand" href="{{ route('index') }}">
                <img src="{{ asset('front/img/logo-clcf-240.png') }}" alt="{{ config('org.name') }}">
                <span class="brand__text">
                    <span class="brand__name">Child Life Care Foundation</span>
                    <span class="brand__tag">{{ config('org.tagline') }}</span>
                </span>
            </a>

            <ul class="nav__menu" id="primary-menu">
                <li><a href="{{ route('index') }}" class="{{ request()->routeIs('index') ? 'is-active' : '' }}">Home</a></li>
                <li><a href="{{ route('about-us') }}" class="{{ request()->routeIs('about-us') ? 'is-active' : '' }}">About Us</a></li>
                <li>
                    <a href="{{ route('udaan') }}" class="{{ request()->routeIs(['udaan', 'medical-help']) ? 'is-active' : '' }}">
                        Our Work
                        <svg class="caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('index') }}#food-programme">Food Programme</a></li>
                        <li><a href="{{ route('udaan') }}">Udaan Free Learning Center</a></li>
                        <li><a href="{{ route('medical-help') }}">Medical Support</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'is-active' : '' }}">Gallery</a></li>
                <li><a href="{{ route('contact-us') }}" class="{{ request()->routeIs('contact-us') ? 'is-active' : '' }}">Contact Us</a></li>
            </ul>

            <div class="nav__cta">
                <a class="btn btn--ghost btn--sm" href="{{ route('donation') }}">Ways to Give</a>
                <a class="btn btn--accent" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.5-1.5 3-3.3 3-5.5A5.5 5.5 0 0 0 12 5.4 5.5 5.5 0 0 0 2 8.5c0 2.2 1.5 4 3 5.5l7 7z"/></svg>
                    Donate Now
                </a>
                <button class="nav__toggle" type="button" aria-label="Menu" aria-expanded="false" aria-controls="primary-menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </nav>
        <p class="tax-note">Please share your address and PAN details after donating so that a donation e-receipt can be issued where applicable.</p>
    </div>
</header>
<!-- /header -->
