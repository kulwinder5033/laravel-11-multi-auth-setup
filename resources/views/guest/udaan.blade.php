@extends('layouts.guest')
@section('title', 'Udaan Free Learning Center - ')
@section('meta_description', 'Udaan Free Learning Center by Child Life Care Foundation provides free tuition, books and stationery to children who cannot easily afford private coaching.')

@section('content')

    @include('guest.sections.page-banner', [
        'title' => 'Udaan Free Learning Center',
        'subtitle' => 'Free learning and coaching support for children who cannot easily afford private tuition.',
    ])

    <section class="section">
        <div class="shell">
            <div class="split">
                <div class="frame frame--blob" data-reveal>
                    <img src="{{ asset('front/img/gallery/gallery2.jpeg') }}" alt="Children learning at Udaan Free Learning Center">
                </div>
                <div data-reveal style="--d:100ms">
                    <span class="eyebrow">Our Education Initiative</span>
                    <h2 class="title">Every Child Deserves a <em>Fair Start</em></h2>
                    <p class="lead" style="margin-top:14px">
                        Udaan Free Learning Center is the education initiative of Child Life Care Foundation.
                    </p>
                    <p class="justify">
                        Many children fall behind not because they lack ability, but because private coaching
                        sits far outside what their family can afford. Udaan closes that gap. We provide free
                        tuition classes, along with the books and stationery a child needs to keep up — so that
                        progress depends on effort, not on income.
                    </p>
                    <p class="justify">
                        Volunteer teachers make this possible. If you can give a few hours a week, or would
                        like to sponsor a child's learning materials, we would be glad to hear from you.
                    </p>
                    <p style="margin-top:26px">
                        <a class="btn btn--accent" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">Support Udaan</a>
                        <a class="btn btn--ghost" href="{{ route('contact-us') }}" style="margin-left:8px">Volunteer With Us</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--cream">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">What Udaan Provides</span>
                <h2 class="title">Learning Without <em>Barriers</em></h2>
            </div>
            <div class="grid grid-4">
                <div class="feature" data-reveal>
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m4 6 8-3 8 3-8 3z"/><path d="M6 10v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg></span>
                    <h4>Free Tuition Classes</h4>
                    <p>Regular coaching support for children who cannot afford private tuition.</p>
                </div>
                <div class="feature" data-reveal style="--d:70ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg></span>
                    <h4>Books &amp; Stationery</h4>
                    <p>Notebooks, textbooks and supplies provided at no cost to the family.</p>
                </div>
                <div class="feature" data-reveal style="--d:140ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2h12a1 1 0 0 1 1 1v3H5V3a1 1 0 0 1 1-1z"/><rect x="3" y="6" width="18" height="15" rx="2"/><path d="M9 11h6"/></svg></span>
                    <h4>School Support</h4>
                    <p>School bags and essentials so a child can attend without hesitation.</p>
                </div>
                <div class="feature" data-reveal style="--d:210ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.9"/><path d="M16 3.1a4 4 0 0 1 0 7.8"/></svg></span>
                    <h4>Volunteer Teachers</h4>
                    <p>Teachers who give their time so classes stay free for every child.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Support Education</span>
                <h2 class="title">Sponsor a Child's <em>Learning</em></h2>
                <p>Contributions towards Udaan go into tuition support, books, stationery and school materials.</p>
            </div>
            <div class="grid grid-3">
                <div class="step" data-reveal>
                    <span class="step__n">1</span>
                    <h4>Choose to Give</h4>
                    <p>Donate online, by bank transfer or through UPI — whichever suits you best.</p>
                </div>
                <div class="step" data-reveal style="--d:80ms">
                    <span class="step__n">2</span>
                    <h4>Tell Us It's for Udaan</h4>
                    <p>Write to us at {{ config('org.email') }} so your contribution is allocated to education support.</p>
                </div>
                <div class="step" data-reveal style="--d:160ms">
                    <span class="step__n">3</span>
                    <h4>Receive Your E-Receipt</h4>
                    <p>Share your name, address and PAN details and a donation e-receipt can be issued where applicable.</p>
                </div>
            </div>

            <div style="margin-top:clamp(36px,5vw,56px)">
                @include('guest.sections.bank-details')
            </div>
        </div>
    </section>

    <section class="section section--tight">
        <div class="shell">
            <div class="cta" data-reveal>
                <div class="cta__inner">
                    <h2 class="title title--light">Give a Child the Gift of <em>Learning</em></h2>
                    <p>Sponsor learning materials, or volunteer a few hours a week as a teacher at Udaan.</p>
                    <div class="cta__actions">
                        <a class="btn btn--accent" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">Donate Now</a>
                        <a class="btn btn--outline-light" href="{{ route('contact-us') }}">Become a Volunteer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
