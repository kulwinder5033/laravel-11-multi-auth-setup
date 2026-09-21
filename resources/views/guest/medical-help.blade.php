@extends('layouts.guest')
@section('title', 'Medical Support - ')
@section('meta_description', 'Child Life Care Foundation supports children facing serious medical conditions, including cancer and other critical illnesses. View current cases and their medical files.')

@section('content')

    @include('guest.sections.page-banner', [
        'title' => 'Medical Support',
        'subtitle' => 'Support for children facing serious medical conditions, including cancer and other critical illnesses.',
    ])

    @php
        $tab = request('tab') === 'past' ? 'past' : 'current';
        $shown = $tab === 'past' ? $past : $current;
    @endphp

    <section class="section" id="cases">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                @if ($tab === 'past')
                    <span class="eyebrow">Past Cases</span>
                    <h2 class="title">Cases We Have <em>Supported</em></h2>
                    <p>Children whose treatment support has been completed, thanks to our donors.</p>
                @else
                    <span class="eyebrow">Current Cases</span>
                    <h2 class="title">Children Awaiting <em>Support</em></h2>
                    <p>Each case is published with the medical documents shared with us by the family. Open a case to read the details before contributing.</p>
                @endif
            </div>

            <nav class="tabs" aria-label="Case status" data-reveal>
                <a class="tabs__tab {{ $tab === 'current' ? 'is-active' : '' }}"
                   href="{{ route('medical-help') }}#cases"
                   @if ($tab === 'current') aria-current="page" @endif>
                    Current Cases <span class="tabs__count">{{ $current->count() }}</span>
                </a>
                <a class="tabs__tab {{ $tab === 'past' ? 'is-active' : '' }}"
                   href="{{ route('medical-help', ['tab' => 'past']) }}#cases"
                   @if ($tab === 'past') aria-current="page" @endif>
                    Past Cases <span class="tabs__count">{{ $past->count() }}</span>
                </a>
            </nav>

            @if ($shown->isEmpty())
                <div class="panel" data-reveal style="max-width:760px;margin-inline:auto">
                    <div class="panel__foot" style="border-top:0">
                        <p style="text-align:center">
                            @if ($tab === 'past')
                                No past cases have been published yet.
                            @else
                                There are no current medical cases listed at the moment. If you know a child
                                who needs support, please <a href="{{ route('contact-us') }}">get in touch with us</a>.
                            @endif
                        </p>
                    </div>
                </div>
            @else
                <div class="grid grid-3">
                    @foreach ($shown as $case)
                        @include('guest.sections.case-card', [
                            'case'  => $case,
                            'delay' => ($loop->index % 3) * 70,
                        ])
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section class="section section--tight section--cream">
        <div class="shell">
            <div class="grid grid-3">
                <div class="step" data-reveal>
                    <span class="step__n">1</span>
                    <h4>Read the Case File</h4>
                    <p>Every listed case carries the medical documents we received from the family.</p>
                </div>
                <div class="step" data-reveal style="--d:80ms">
                    <span class="step__n">2</span>
                    <h4>Contribute</h4>
                    <p>Donate online, by bank transfer or through UPI — and tell us which case it is for.</p>
                </div>
                <div class="step" data-reveal style="--d:160ms">
                    <span class="step__n">3</span>
                    <h4>Receive Your E-Receipt</h4>
                    <p>Share your name, address and PAN details and an e-receipt can be issued where applicable.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Contribute</span>
                <h2 class="title">Support a Child's <em>Treatment</em></h2>
                <p>Please write to {{ config('org.email') }} mentioning the case you wish to support.</p>
            </div>
            @include('guest.sections.bank-details')
        </div>
    </section>

@endsection
