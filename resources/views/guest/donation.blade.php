@extends('layouts.guest')
@section('title', 'Ways to Give - ')
@section('meta_description', 'Donate to Child Life Care Foundation by UPI, card, net banking or direct bank transfer. Sponsor meals at ₹65 per plate, support education or medical care.')

@section('content')

    @include('guest.sections.page-banner', [
        'title' => 'Ways to Give',
        'subtitle' => 'Sponsor meals, support a child\'s education, or contribute towards medical care.',
    ])

    <section class="section">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Food Programme</span>
                <h2 class="title">&#8377;{{ config('org.meal_cost') }} Serves <em>One Plate</em></h2>
                <p>Choose an amount below. Payments are processed securely through Razorpay — no account needed.</p>
            </div>

            <div class="panel" data-reveal style="max-width:840px;margin-inline:auto">
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
                                    <td><a class="btn btn--primary btn--sm" href="{{ $option['url'] }}" target="_blank" rel="noopener">Sponsor</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel__foot">
                    <p>
                        To give a different amount, use our
                        <a href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">donation page</a>
                        and enter any sum you wish.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--cream">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Choose a Cause</span>
                <h2 class="title">Where Your Donation <em>Can Go</em></h2>
                <p>Tell us which cause you would like to support at {{ config('org.email') }} and we will allocate your contribution accordingly.</p>
            </div>
            <div class="grid grid-3">
                <div class="feature" data-reveal>
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 2v7a3 3 0 0 0 6 0V2"/><path d="M6 9v13"/><path d="M18 2c-2 2-3 4-3 7s1 4 3 4 3-1 3-4-1-5-3-7z"/><path d="M18 13v9"/></svg></span>
                    <h4>Sponsor Meals</h4>
                    <p>Free meals for poor and underprivileged children at &#8377;{{ config('org.meal_cost') }} per plate.</p>
                </div>
                <div class="feature" data-reveal style="--d:60ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12v9H4v-9"/><rect x="2" y="7" width="20" height="5" rx="1"/><path d="M12 21V7"/><path d="M12 7S9.5 2 7.5 3.5 9 7 12 7s4.5-2 2.5-3.5S12 7 12 7z"/></svg></span>
                    <h4>Birthday Meal Sponsorship</h4>
                    <p>Mark a birthday by serving meals to children in our food programme.</p>
                </div>
                <div class="feature" data-reveal style="--d:120ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v3"/><path d="m5 8 2 2"/><path d="m19 8-2 2"/><path d="M5 21h14"/><path d="M7 21a5 5 0 0 1 10 0"/><circle cx="12" cy="13" r="3"/></svg></span>
                    <h4>Festival Meal Distribution</h4>
                    <p>Share a festival with families who would otherwise go without.</p>
                </div>
                <div class="feature" data-reveal>
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M10.3 3.2 1.8 17.5A2 2 0 0 0 3.5 20.5h17a2 2 0 0 0 1.7-3L13.7 3.2a2 2 0 0 0-3.4 0z"/><path d="M12 9v4M12 17h.01"/></svg></span>
                    <h4>Emergency Food Support</h4>
                    <p>Rapid help for a family facing a sudden crisis.</p>
                </div>
                <div class="feature" data-reveal style="--d:60ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2h12a1 1 0 0 1 1 1v3H5V3a1 1 0 0 1 1-1z"/><rect x="3" y="6" width="18" height="15" rx="2"/><path d="M9 11h6"/></svg></span>
                    <h4>School Bag &amp; Stationery</h4>
                    <p>Books, stationery and a school bag for a child at Udaan Free Learning Center.</p>
                </div>
                <div class="feature" data-reveal style="--d:120ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8v8M8 12h8"/><rect x="3" y="3" width="18" height="18" rx="3"/></svg></span>
                    <h4>Medical Support</h4>
                    <p>Contribute towards the treatment of a child facing a serious illness.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Bank &amp; UPI</span>
                <h2 class="title">Transfer <em>Directly</em></h2>
            </div>
            @include('guest.sections.bank-details')
        </div>
    </section>

    <section class="section section--tight section--tint">
        <div class="shell">
            <div class="grid grid-3">
                <div class="feature" data-reveal>
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><path d="M7 11V8a5 5 0 0 1 10 0v3"/></svg></span>
                    <h4>Secure Payments</h4>
                    <p>Cards, UPI and net banking are handled by Razorpay. We never see your card details.</p>
                </div>
                <div class="feature" data-reveal style="--d:70ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="m9 15 2 2 4-4"/></svg></span>
                    <h4>Donation E-Receipt</h4>
                    <p>Share your name, address and PAN details and an e-receipt can be issued where applicable.</p>
                </div>
                <div class="feature" data-reveal style="--d:140ms">
                    <span class="feature__ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 9.4 8 11 4.6-1.6 8-6 8-11V5z"/><path d="m9 12 2 2 4-4"/></svg></span>
                    <h4>Registered Trust</h4>
                    <p>Reg. No. {{ config('org.reg_no') }} &middot; PAN {{ config('org.pan') }}</p>
                </div>
            </div>
        </div>
    </section>

@endsection
