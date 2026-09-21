@extends('layouts.guest')
@section('title', 'Gallery - ')
@section('meta_description', 'Photographs from food camps, medical camps and community programmes run by Child Life Care Foundation.')

@section('content')

    @include('guest.sections.page-banner', [
        'title' => 'Gallery',
        'subtitle' => 'Moments from our food distribution drives, learning centre and community programmes.',
    ])

    <section class="section">
        <div class="shell">
            <div class="section-head section-head--center" data-reveal>
                <span class="eyebrow">Our Work in Pictures</span>
                <h2 class="title">Moments of <em>Hope</em></h2>
                <p>Tap any photograph to view it full size.</p>
            </div>

            @php
                $photos = [
                    ['file' => 'gallery1.jpeg', 'span' => 'wide', 'alt' => 'Food distribution drive'],
                    ['file' => 'gallery2.jpeg', 'span' => 'tall', 'alt' => 'Children receiving support'],
                    ['file' => 'gallery3.jpeg', 'span' => '',     'alt' => 'Community programme'],
                    ['file' => 'gallery4.jpeg', 'span' => '',     'alt' => 'Volunteers at work'],
                    ['file' => 'gallery5.jpg',  'span' => 'wide', 'alt' => 'Medical camp'],
                    ['file' => 'gallery6.jpeg', 'span' => '',     'alt' => 'Meal service at a hospital'],
                    ['file' => 'gallery7.jpeg', 'span' => '',     'alt' => 'Education programme'],
                    ['file' => 'gallery8.jpeg', 'span' => 'wide', 'alt' => 'Foundation outreach'],
                ];
            @endphp

            <div class="gallery-grid" data-reveal>
                @foreach ($photos as $photo)
                    <a href="{{ asset('front/img/gallery/' . $photo['file']) }}" class="{{ $photo['span'] }}" data-lightbox>
                        <img src="{{ asset('front/img/gallery/' . $photo['file']) }}" alt="{{ $photo['alt'] }}" loading="lazy">
                        <span class="zoom">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5M11 8v6M8 11h6"/></svg>
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section--tight">
        <div class="shell">
            <div class="cta" data-reveal>
                <div class="cta__inner">
                    <h2 class="title title--light">Help Us Fill This Page With <em>More</em></h2>
                    <p>Every meal, class and medical file you see here was made possible by someone who decided to give.</p>
                    <div class="cta__actions">
                        <a class="btn btn--accent" href="{{ config("org.donate_url") }}" target="_blank" rel="noopener">Donate Now</a>
                        <a class="btn btn--outline-light" href="{{ route('medical-help') }}">Medical Support</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
