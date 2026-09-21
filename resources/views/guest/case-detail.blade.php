@extends('layouts.guest')
@section('title', $case->title . ' - ')
@section('meta_description', Str::limit(strip_tags($case->content ?? $case->title), 155))

@section('content')

    <section class="page-banner">
        <div class="shell">
            <h1>{{ $case->title }}</h1>
            <p>Supported by Child Life Care Foundation under our medical support programme.</p>
            <ul class="crumbs">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="{{ route('medical-help') }}">Medical Support</a></li>
                <li>Case {{ $case->id }}</li>
            </ul>
        </div>
    </section>

    <section class="section">
        <div class="shell">
            <div class="case-layout">

                <article data-reveal>
                    @if ($case->image)
                        <div class="case-hero">
                            <img src="{{ asset('storage/uploads/case/image/' . $case->image) }}" alt="{{ $case->title }}">
                            <span class="case-status case-status--{{ strtolower($case->status) }}">
                                {{ $case->status === 'Past' ? 'Completed' : 'Ongoing' }}
                            </span>
                        </div>
                    @endif

                    <h2 class="title" style="margin-top:28px">{{ $case->title }}</h2>

                    <div class="case-body">
                        @if (filled($case->content))
                            {!! nl2br(e($case->content)) !!}
                        @else
                            <p class="muted">
                                The full details of this case are available in the medical file below,
                                which has been shared with us by the family.
                            </p>
                        @endif
                    </div>

                    @if ($case->pdf_file)
                        <div class="case-file" data-reveal>
                            <span class="case-file__ic">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg>
                            </span>
                            <div class="case-file__text">
                                <h4>Medical File</h4>
                                <p>The supporting medical documents shared with us for this case.</p>
                            </div>
                            <a class="btn btn--primary btn--sm" href="{{ asset('storage/uploads/case/pdf_file/' . $case->pdf_file) }}" target="_blank" rel="noopener">
                                View File
                            </a>
                        </div>
                    @endif

                    <p class="case-note">
                        Child Life Care Foundation publishes only the information shared with us by the
                        family. We do not disclose any further personal or medical details in order to
                        protect the privacy and dignity of the child.
                    </p>
                </article>

                <aside class="case-aside">
                    @if ($case->status === 'Past')
                    <div class="case-cta" data-reveal>
                        <h3>This Case Is Completed</h3>
                        <p>
                            Support for this child has been completed, thanks to our donors. Other children
                            are still waiting for help with their treatment.
                        </p>
                        <a class="btn btn--accent btn--block" href="{{ route('medical-help') }}#cases">View Current Cases</a>
                        <a class="btn btn--outline-light btn--block" style="margin-top:10px" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">Donate to Medical Support</a>
                    </div>
                    @else
                    <div class="case-cta" data-reveal>
                        <h3>Support This Case</h3>
                        <p>
                            Donate online, by bank transfer or through UPI — and mention
                            <strong>Case {{ $case->id }}</strong> so we can allocate your contribution to this child.
                        </p>
                        <a class="btn btn--accent btn--block" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.5-1.5 3-3.3 3-5.5A5.5 5.5 0 0 0 12 5.4 5.5 5.5 0 0 0 2 8.5c0 2.2 1.5 4 3 5.5l7 7z"/></svg>
                            Donate Now
                        </a>
                        <a class="btn btn--outline-light btn--block" style="margin-top:10px" href="https://wa.me/{{ config('org.phone_e164') }}?text={{ urlencode('I would like to support Case ' . $case->id . ': ' . $case->title) }}" target="_blank" rel="noopener">
                            Enquire on WhatsApp
                        </a>
                        <ul class="case-cta__meta">
                            <li><span>UPI ID</span><strong>{{ config('org.upi_id') }}</strong></li>
                            <li><span>Account No.</span><strong>{{ config('org.bank.account_no') }}</strong></li>
                            <li><span>IFSC</span><strong>{{ config('org.bank.ifsc') }}</strong></li>
                        </ul>
                        <p class="case-cta__fine">
                            Share your name, address and PAN details at
                            <a href="mailto:{{ config('org.email') }}">{{ config('org.email') }}</a>
                            so a donation e-receipt can be issued where applicable.
                        </p>
                    </div>
                    @endif

                    <div class="case-help" data-reveal style="--d:90ms">
                        <h4>Know a child who needs help?</h4>
                        <p>If you would like to refer a case to us, please get in touch.</p>
                        <a class="link-arrow" href="{{ route('contact-us') }}">
                            Contact Us
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </section>

    @if ($related->isNotEmpty())
        <section class="section section--cream">
            <div class="shell">
                <div class="section-head section-head--row" data-reveal>
                    <div>
                        <span class="eyebrow">More Cases</span>
                        <h2 class="title">Other Children Awaiting <em>Support</em></h2>
                    </div>
                    <a class="btn btn--ghost" href="{{ route('medical-help') }}">View All Cases</a>
                </div>

                <div class="grid grid-3">
                    @foreach ($related as $item)
                        @include('guest.sections.case-card', ['case' => $item])
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection
