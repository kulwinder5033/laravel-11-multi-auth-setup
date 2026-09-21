@extends('layouts.guest')
@section('title', 'Privacy Policy - ')
@section('meta_description', 'How Child Life Care Foundation collects, uses and protects your personal information.')

@section('content')

    @include('guest.sections.page-banner', [
        'title' => 'Privacy Policy',
        'subtitle' => 'How we collect, use and safeguard the information you share with us.',
    ])

    <section class="section">
        <div class="shell shell--narrow prose" data-reveal>
            <ol>
                <li>
                    <strong>Introduction</strong>
                    <p>We value your privacy and are committed to protecting your personal information. This policy explains how we collect, use, and safeguard your data.</p>
                </li>
                <li>
                    <strong>Information Collection</strong>
                    <p>We collect personal information such as name, email, and phone number when you interact with our website, donate, or sign up for our newsletters.</p>
                </li>
                <li>
                    <strong>Use of Information</strong>
                    <p>Your information helps us to process donations, communicate updates, and improve our services.</p>
                </li>
                <li>
                    <strong>Data Protection</strong>
                    <p>We use industry-standard security measures to protect your data from unauthorized access, alteration, or destruction.</p>
                </li>
                <li>
                    <strong>Third-Party Sharing</strong>
                    <p>We do not share your personal information with third parties, except as necessary for processing donations or as required by law.</p>
                </li>
                <li>
                    <strong>Cookies</strong>
                    <p>Our website uses cookies to enhance user experience. You can control cookie settings through your browser.</p>
                </li>
                <li>
                    <strong>Changes to Policy</strong>
                    <p>We may update this policy periodically. Any changes will be posted on this page.</p>
                </li>
                <li>
                    <strong>Contact Us</strong>
                    <p>For any privacy concerns, please <a href="mailto:{{ config('org.email') }}">{{ config('org.email') }}</a> or visit our <a href="{{ route('contact-us') }}">contact page</a>.</p>
                </li>
            </ol>
        </div>
    </section>

@endsection
