@extends('layouts.guest')
@section('title', 'Home - ')
@section('meta_description', 'Child Life Care Foundation is a government registered charitable trust providing free meals, free education through Udaan Free Learning Center, medical support and emergency relief for underprivileged children in India.')

@section('content')

    <!-- ============ Hero slider ============ -->
    <section class="hero" data-hero>
        <div class="hero__viewport">

            <div class="hero__slide is-active">
                <div class="hero__img hero__img--clean">
                    <img src="{{ asset('front/img/home/hero-feed-smiles.jpg') }}" alt="Children receiving free meals from Child Life Care Foundation — Together We Feed Smiles">
                </div>
                <div class="hero__panel">
                    <div>
                        <span class="kicker">No child should learn on an empty stomach</span>
                        <h1>Sponsor a Meal for a Child</h1>
                        <p>
                            One nutritious plate costs &#8377;{{ config('org.meal_cost') }}. Your contribution helps
                            us serve free meals to poor and underprivileged children.
                        </p>
                        <a class="btn btn--accent btn--lg" href="#food-programme">Sponsor Meals</a>
                    </div>
                </div>
            </div>

            <div class="hero__slide">
                <div class="hero__img">
                    <img src="{{ asset('front/img/gallery/gallery2.jpeg') }}" alt="Children at a free learning centre">
                </div>
                <div class="hero__panel">
                    <div>
                        <span class="kicker">Udaan Free Learning Center</span>
                        <h1>Free Education, Free Tuition</h1>
                        <p>
                            Udaan provides free learning and coaching support to children who cannot easily
                            afford private tuition — along with books and stationery.
                        </p>
                        <a class="btn btn--accent btn--lg" href="{{ route('udaan') }}">Explore Udaan</a>
                    </div>
                </div>
            </div>

            <div class="hero__slide">
                <div class="hero__img">
                    <img src="{{ asset('front/img/home/medical-donation.jpeg') }}" alt="Medical support for children">
                </div>
                <div class="hero__panel">
                    <div>
                        <span class="kicker">Standing with families in crisis</span>
                        <h1>Support a Child's Treatment</h1>
                        <p>
                            We support children facing serious medical conditions, including cancer and
                            other critical illnesses, when their families cannot carry the cost alone.
                        </p>
                        <a class="btn btn--accent btn--lg" href="{{ route('medical-help') }}">View Medical Cases</a>
                    </div>
                </div>
            </div>

            <button class="hero__arrow hero__arrow--prev" type="button" data-hero-prev aria-label="Previous slide">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
            </button>
            <button class="hero__arrow hero__arrow--next" type="button" data-hero-next aria-label="Next slide">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </button>
            <div class="hero__dots"></div>
        </div>
    </section>

    <!-- ============ Identity strip ============ -->
    <section class="section--tight">
        <div class="shell">
            <div class="impact impact--float" data-reveal>
                <div class="impact__item">
                    <span class="impact__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7a3 3 0 0 0 6 0V2"/><path d="M6 9v13"/><path d="M18 2c-2 2-3 4-3 7s1 4 3 4 3-1 3-4-1-5-3-7z"/><path d="M18 13v9"/></svg></span>
                    <div class="impact__n">&#8377;{{ config('org.meal_cost') }}</div>
                    <div class="impact__l">Cost of one nutritious meal</div>
                </div>
                <div class="impact__item">
                    <span class="impact__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="m4 6 8-3 8 3-8 3z"/><path d="M6 10v5c0 1.7 2.7 3 6 3s6-1.3 6-3v-5"/></svg></span>
                    <div class="impact__n">Udaan</div>
                    <div class="impact__l">Free Learning Center for children</div>
                </div>
                <div class="impact__item">
                    <span class="impact__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8v8M8 12h8"/><rect x="3" y="3" width="18" height="18" rx="3"/></svg></span>
                    <div class="impact__n">6</div>
                    <div class="impact__l">Core areas of work</div>
                </div>
                <div class="impact__item">
                    <span class="impact__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 9.4 8 11 4.6-1.6 8-6 8-11V5z"/><path d="m9 12 2 2 4-4"/></svg></span>
                    <div class="impact__n">Registered</div>
                    <div class="impact__l">Government registered charitable trust</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ About ============ -->
    <section class="section section--tight">
        <div class="shell">
            <div class="split">
                <div class="frame frame--blob" data-reveal>
                    <img src="{{ asset('front/img/home/about-collage.jpg') }}" alt="Children supported by Child Life Care Foundation">
                </div>
                <div data-reveal style="--d:100ms">
                    <span class="eyebrow">About Us</span>
                    <h2 class="title">Hands of <em>Hope</em></h2>
                    <p class="lead" style="margin-top:14px">
                        Child Life Care Foundation is a government registered charitable trust working for
                        children and underprivileged communities in India.
                    </p>
                    <p class="justify">
                        We work where the need is most immediate — a hot meal for a child who has not eaten,
                        free tuition for a child whose family cannot afford it, and support for families
                        facing a serious medical crisis. Our approach is built on dignity: help is offered
                        with respect, never in exchange for a family's story.
                    </p>
                    <ul class="checklist">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Compassion</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Transparency</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Dignity</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Hope</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Education &amp; Nutrition</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Child Welfare</li>
                    </ul>
                    <p style="margin-top:26px">
                        <a class="btn btn--primary" href="{{ route('about-us') }}">More About Us</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Our work / focus area ============ -->
    <section class="section section--cream" id="our-work">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">What We Do</span>
                <h2 class="title">Our <em>Work</em></h2>
                <p>Six areas where Child Life Care Foundation supports children and their families.</p>
            </div>

            <div class="grid grid-3">
                <a class="focus-card" href="#food-programme" data-reveal>
                    <div class="focus-card__img"><img src="{{ asset('front/img/home/food-donation.jpg') }}" alt="Free food distribution" loading="lazy"></div>
                    <div class="focus-card__note">Free meals for poor and underprivileged children, served with dignity.</div>
                    <div class="focus-card__bar">
                        <h4>Free Food Distribution</h4>
                        <span class="chev"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></span>
                    </div>
                </a>

                <a class="focus-card" href="{{ route('udaan') }}" data-reveal style="--d:70ms">
                    <div class="focus-card__img"><img src="{{ asset('front/img/gallery/gallery2.jpeg') }}" alt="Udaan Free Learning Center" loading="lazy"></div>
                    <div class="focus-card__note">Free tuition and learning support through our Udaan Free Learning Center.</div>
                    <div class="focus-card__bar">
                        <h4>Udaan Free Learning Center</h4>
                        <span class="chev"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></span>
                    </div>
                </a>

                <a class="focus-card" href="{{ route('medical-help') }}" data-reveal style="--d:140ms">
                    <div class="focus-card__img"><img src="{{ asset('front/img/home/medical-donation.jpeg') }}" alt="Medical support" loading="lazy"></div>
                    <div class="focus-card__note">Support for children facing cancer and other serious medical conditions.</div>
                    <div class="focus-card__bar">
                        <h4>Medical Support</h4>
                        <span class="chev"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></span>
                    </div>
                </a>

                <a class="focus-card" href="{{ route('donation') }}" data-reveal>
                    <div class="focus-card__img"><img src="{{ asset('front/img/gallery/gallery1.jpeg') }}" alt="School bags and stationery" loading="lazy"></div>
                    <div class="focus-card__note">School bags, books and stationery so learning never stops for want of supplies.</div>
                    <div class="focus-card__bar">
                        <h4>Educational Materials</h4>
                        <span class="chev"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></span>
                    </div>
                </a>

                <a class="focus-card" href="{{ route('donation') }}" data-reveal style="--d:70ms">
                    <div class="focus-card__img"><img src="{{ asset('front/img/gallery/gallery6.jpeg') }}" alt="Emergency humanitarian support" loading="lazy"></div>
                    <div class="focus-card__note">Immediate humanitarian relief for families in urgent distress.</div>
                    <div class="focus-card__bar">
                        <h4>Emergency Support</h4>
                        <span class="chev"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></span>
                    </div>
                </a>

                <a class="focus-card" href="{{ route('gallery') }}" data-reveal style="--d:140ms">
                    <div class="focus-card__img"><img src="{{ asset('front/img/gallery/gallery7.jpeg') }}" alt="Community welfare initiatives" loading="lazy"></div>
                    <div class="focus-card__note">Child-focused social initiatives that strengthen the whole community.</div>
                    <div class="focus-card__bar">
                        <h4>Community Welfare</h4>
                        <span class="chev"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ Food programme ============ -->
    <section class="section" id="food-programme">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Food Programme</span>
                <h2 class="title">&#8377;{{ config('org.meal_cost') }} Serves <em>One Plate</em></h2>
                <p>Choose how many meals you would like to sponsor. Each option opens a secure Razorpay payment page.</p>
            </div>

            <div class="split">
                <div class="frame" data-reveal>
                    <img src="{{ asset('front/img/home/donate-birthday-poster.jpg') }}" alt="Donate Food on Your Birthday - Child Life Care Foundation">
                </div>

                <div data-reveal style="--d:100ms">
                    <div class="panel">
                        <div class="panel__head">
                            <div>
                                <h4>Sponsor Meals for Children</h4>
                                <p>&#8377;{{ config('org.meal_cost') }} per plate</p>
                            </div>
                        </div>
                        <div class="table-wrap">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Meals Sponsored</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (config('org.meal_options') as $option)
                                        <tr>
                                            <td class="amount">&#8377;{{ number_format($option['amount']) }}</td>
                                            <td>{{ $option['meals'] }} meals</td>
                                            <td>
                                                <a class="btn btn--primary btn--sm" href="{{ $option['url'] }}" target="_blank" rel="noopener">Sponsor</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="panel__foot">
                            <p>
                                Would you like to sponsor a different amount, or mark your donation for a
                                birthday, festival or emergency distribution? Use the
                                <a href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">donation page</a>
                                and write to us so we can allocate it accordingly.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Ways to sponsor ============ -->
    <section class="section section--tight section--tint">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Sponsorship Options</span>
                <h2 class="title">Ways to <em>Give Meals</em></h2>
            </div>
            <div class="grid grid-4">
                <div class="feature" data-reveal>
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7a3 3 0 0 0 6 0V2"/><path d="M6 9v13"/><path d="M18 2c-2 2-3 4-3 7s1 4 3 4 3-1 3-4-1-5-3-7z"/><path d="M18 13v9"/></svg></span>
                    <h4>Sponsor Meals</h4>
                    <p>Fund a set number of plates for children in our food programme.</p>
                </div>
                <div class="feature" data-reveal style="--d:70ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12v9H4v-9"/><rect x="2" y="7" width="20" height="5" rx="1"/><path d="M12 21V7"/><path d="M12 7S9.5 2 7.5 3.5 9 7 12 7s4.5-2 2.5-3.5S12 7 12 7z"/></svg></span>
                    <h4>Birthday Sponsorship</h4>
                    <p>Celebrate a birthday by serving meals to children in need.</p>
                </div>
                <div class="feature" data-reveal style="--d:140ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v3"/><path d="m5 8 2 2"/><path d="m19 8-2 2"/><path d="M5 21h14"/><path d="M7 21a5 5 0 0 1 10 0"/><circle cx="12" cy="13" r="3"/></svg></span>
                    <h4>Festival Distribution</h4>
                    <p>Share your festival with families who would otherwise go without.</p>
                </div>
                <div class="feature" data-reveal style="--d:210ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M10.3 3.2 1.8 17.5A2 2 0 0 0 3.5 20.5h17a2 2 0 0 0 1.7-3L13.7 3.2a2 2 0 0 0-3.4 0z"/><path d="M12 9v4M12 17h.01"/></svg></span>
                    <h4>Emergency Food Support</h4>
                    <p>Respond quickly when a family faces a sudden crisis.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Udaan ============ -->
    <section class="section section--cream-2">
        <div class="shell">
            <div class="split">
                <div data-reveal>
                    <span class="eyebrow">Education</span>
                    <h2 class="title">Udaan Free <em>Learning Center</em></h2>
                    <p class="lead" style="margin-top:14px">
                        Free learning and coaching support for children who cannot easily afford private tuition.
                    </p>
                    <p class="justify">
                        Udaan is our education initiative. Alongside free tuition classes, we provide books,
                        stationery and school support so that a child's progress never depends on what their
                        family can pay. Volunteer teachers are at the heart of it.
                    </p>
                    <ul class="checklist">
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Free tuition classes</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Books &amp; stationery</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> School support</li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg> Volunteer teachers</li>
                    </ul>
                    <p style="margin-top:26px">
                        <a class="btn btn--primary" href="{{ route('udaan') }}">Learn About Udaan</a>
                    </p>
                </div>
                <div class="frame frame--blob" data-reveal style="--d:100ms">
                    <img src="{{ asset('front/img/gallery/gallery2.jpeg') }}" alt="Children learning at Udaan Free Learning Center">
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Ways to give ============ -->
    <section class="section">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Ways to Give</span>
                <h2 class="title">Support Our <em>Work</em></h2>
                <p>Donate online, transfer directly to our bank account, or pay using any UPI app.</p>
            </div>
            @include('guest.sections.bank-details')
        </div>
    </section>

    <!-- ============ CTA ============ -->
    <section class="section section--tight">
        <div class="shell">
            <div class="cta" data-reveal>
                <div class="cta__inner">
                    <h2 class="title title--light">Become a Hand of <em>Hope</em></h2>
                    <p>
                        A meal, a school bag, a month of tuition — every contribution supports a child
                        who needs it. Write to us if you would like to volunteer or partner with us.
                    </p>
                    <div class="cta__actions">
                        <a class="btn btn--accent" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">Donate Now</a>
                        <a class="btn btn--outline-light" href="{{ route('contact-us') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
