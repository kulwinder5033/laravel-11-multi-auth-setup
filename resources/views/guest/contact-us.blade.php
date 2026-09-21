@extends('layouts.guest')
@section('title', 'Contact Us - ')
@section('meta_description', 'Contact Child Life Care Foundation, New Delhi, India. Email Info@childlifecarefoundation.org or call 7011389643.')

@section('content')

    @include('guest.sections.page-banner', [
        'title' => 'Contact Us',
        'subtitle' => 'To donate, volunteer, partner with us or refer a child who needs support — please get in touch.',
    ])

    <section class="section">
        <div class="shell">
            <div class="split">
                <div data-reveal>
                    <span class="eyebrow">Get In Touch</span>
                    <h2 class="title">We'd Be Glad to <em>Hear From You</em></h2>
                    <p class="lead" style="margin-top:14px">
                        Whether you would like to sponsor meals, support a child's education, volunteer as a
                        teacher at Udaan, or refer a family who needs help — write to us or call.
                    </p>
                    <p class="justify">
                        If you are writing about a child who needs medical or humanitarian support, please
                        share the details you have. We treat every enquiry confidentially and respect the
                        privacy of the child and family involved.
                    </p>
                    <p style="margin-top:26px">
                        <a class="btn btn--accent" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">Donate Now</a>
                        <a class="btn btn--ghost" href="https://wa.me/{{ config('org.phone_e164') }}" target="_blank" rel="noopener" style="margin-left:8px">WhatsApp Us</a>
                    </p>
                </div>

                <div class="grid" data-reveal style="--d:100ms">
                    <div class="contact-card">
                        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg></span>
                        <div>
                            <h4>Our Location</h4>
                            <p>{{ config('org.address') }}</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/></svg></span>
                        <div>
                            <h4>Phone / WhatsApp</h4>
                            <a href="tel:+{{ config('org.phone_e164') }}">{{ config('org.phone') }}</a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg></span>
                        <div>
                            <h4>Email</h4>
                            <a href="mailto:{{ config('org.email') }}">{{ config('org.email') }}</a>
                            <p class="muted" style="font-size:.85rem">Send us your query anytime.</p>
                        </div>
                    </div>
                    <div class="contact-card">
                        <span class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg></span>
                        <div>
                            <h4>Registration</h4>
                            <p>Reg. No. {{ config('org.reg_no') }}<br>PAN {{ config('org.pan') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--cream">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Ways to Give</span>
                <h2 class="title">Prefer a Direct <em>Transfer?</em></h2>
            </div>
            @include('guest.sections.bank-details')
        </div>
    </section>

@endsection
