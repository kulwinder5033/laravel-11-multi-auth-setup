@extends('layouts.guest')
@section('title', 'About Us - ')
@section('meta_description', 'Child Life Care Foundation is a government registered charitable trust working for children and underprivileged communities in India through nutrition, education, medical support and emergency relief.')

@section('content')

    @include('guest.sections.page-banner', [
        'title' => 'About Us',
        'subtitle' => 'A government registered charitable trust working for children and underprivileged communities in India.',
    ])

    <section class="section">
        <div class="shell">
            <div class="split">
                <div class="frame frame--blob" data-reveal>
                    <img src="{{ asset('front/img/home/children.jpg') }}" alt="Children supported by Child Life Care Foundation">
                </div>
                <div data-reveal style="--d:100ms">
                    <span class="eyebrow">Who We Are</span>
                    <h2 class="title">Hands of <em>Hope</em></h2>
                    <p class="lead" style="margin-top:14px">
                        Child Life Care Foundation works for children and underprivileged communities
                        across India — with nutrition, education, medical support and emergency relief.
                    </p>
                    <p class="justify">
                        We began with a simple conviction: no child should go hungry, drop out of school for
                        want of a book, or lose access to treatment because their family cannot carry the cost.
                        Our work is practical and immediate — a hot meal today, a tuition class this evening,
                        support for a treatment that cannot wait.
                    </p>
                    <p class="justify">
                        Just as important is how that help is given. Families are never asked to perform their
                        hardship. We protect the privacy and dignity of every child and patient we support, and
                        we are open with our donors about where their contribution goes.
                    </p>
                    <div class="footer-reg" style="margin-top:22px">
                        <span style="border-color:var(--ink-200);color:var(--ink-600)">Reg. No. {{ config('org.reg_no') }}</span>
                        <span style="border-color:var(--ink-200);color:var(--ink-600)">PAN {{ config('org.pan') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--cream">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">What We Do</span>
                <h2 class="title">Our Core <em>Work</em></h2>
                <p>Six areas in which Child Life Care Foundation supports children and their families.</p>
            </div>
            <div class="grid grid-3">
                <div class="feature" data-reveal>
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7a3 3 0 0 0 6 0V2"/><path d="M6 9v13"/><path d="M18 2c-2 2-3 4-3 7s1 4 3 4 3-1 3-4-1-5-3-7z"/><path d="M18 13v9"/></svg></span>
                    <h4>Free Food Distribution</h4>
                    <p>Nutritious meals for poor and underprivileged children, at a cost of &#8377;{{ config('org.meal_cost') }} per plate.</p>
                </div>
                <div class="feature" data-reveal style="--d:70ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m4 6 8-3 8 3-8 3z"/><path d="M6 10v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg></span>
                    <h4>Free Education &amp; Tuition</h4>
                    <p>Udaan Free Learning Center offers free coaching to children who cannot afford private tuition.</p>
                </div>
                <div class="feature" data-reveal style="--d:140ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8v8M8 12h8"/><rect x="3" y="3" width="18" height="18" rx="3"/></svg></span>
                    <h4>Medical Support</h4>
                    <p>Support for children facing serious medical conditions, including cancer and other critical illnesses.</p>
                </div>
                <div class="feature" data-reveal>
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2h12a1 1 0 0 1 1 1v3H5V3a1 1 0 0 1 1-1z"/><rect x="3" y="6" width="18" height="15" rx="2"/><path d="M9 11h6"/></svg></span>
                    <h4>Educational Materials</h4>
                    <p>School bags, books and stationery so a child can attend class fully equipped.</p>
                </div>
                <div class="feature" data-reveal style="--d:70ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M10.3 3.2 1.8 17.5A2 2 0 0 0 3.5 20.5h17a2 2 0 0 0 1.7-3L13.7 3.2a2 2 0 0 0-3.4 0z"/><path d="M12 9v4M12 17h.01"/></svg></span>
                    <h4>Emergency Humanitarian Support</h4>
                    <p>Rapid assistance for families facing a sudden crisis.</p>
                </div>
                <div class="feature" data-reveal style="--d:140ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.9"/><path d="M16 3.1a4 4 0 0 1 0 7.8"/></svg></span>
                    <h4>Community Welfare</h4>
                    <p>Child-focused social initiatives that strengthen the wider community.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">What We Stand For</span>
                <h2 class="title">Our <em>Values</em></h2>
            </div>
            <div class="grid grid-3">
                <div class="step" data-reveal>
                    <span class="step__n"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.5-1.5 3-3.3 3-5.5A5.5 5.5 0 0 0 12 5.4 5.5 5.5 0 0 0 2 8.5c0 2.2 1.5 4 3 5.5l7 7z"/></svg></span>
                    <h4>Compassion &amp; Dignity</h4>
                    <p>Help is offered with respect. No family is asked to prove or perform their hardship.</p>
                </div>
                <div class="step" data-reveal style="--d:80ms">
                    <span class="step__n"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg></span>
                    <h4>Transparency</h4>
                    <p>We tell donors what their contribution supports, and issue an e-receipt where applicable.</p>
                </div>
                <div class="step" data-reveal style="--d:160ms">
                    <span class="step__n"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18M5 10l7-7 7 7"/></svg></span>
                    <h4>Hope &amp; Child Welfare</h4>
                    <p>Nutrition and education are the foundation of a child's future — we start there.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--tight">
        <div class="shell">
            <div class="cta" data-reveal>
                <div class="cta__inner">
                    <h2 class="title title--light">Stand With Us</h2>
                    <p>Donate, volunteer, or partner with us. Every form of support helps a child.</p>
                    <div class="cta__actions">
                        <a class="btn btn--accent" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">Donate Now</a>
                        <a class="btn btn--outline-light" href="{{ route('contact-us') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
