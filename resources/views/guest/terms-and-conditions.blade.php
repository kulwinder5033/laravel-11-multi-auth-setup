@extends('layouts.guest')
@section('title', 'Terms & Conditions - ')
@section('meta_description', 'The terms that apply when you use the Child Life Care Foundation website or make a donation.')

@section('content')

    @include('guest.sections.page-banner', [
        'title' => 'Terms & Conditions',
        'subtitle' => 'The terms that apply when you use this website or make a donation.',
    ])

    <section class="section">
        <div class="shell shell--narrow prose" data-reveal>
            <ol>
                <li>
                    <strong>Acceptance of Terms</strong>
                    <p>By accessing and using our website, you agree to comply with these Terms &amp; Conditions. If you do not agree, please refrain from using the site.</p>
                </li>
                <li>
                    <strong>Use of Website</strong>
                    <p>You agree to use the website for lawful purposes only. You may not engage in activities that disrupt or damage the website's functionality.</p>
                </li>
                <li>
                    <strong>Donations</strong>
                    <p>Donations made through the website are final and non-refundable. The Child Life Care Foundation ensures transparency in the use of funds.</p>
                </li>
                <li>
                    <strong>Intellectual Property</strong>
                    <p>All content on the website, including text, images, and logos, are owned by the Child Life Care Foundation and protected by copyright law.</p>
                </li>
                <li>
                    <strong>Privacy Policy</strong>
                    <p>By using the website, you consent to the collection and use of your personal data as outlined in our <a href="{{ route('privacy-policy') }}">Privacy Policy</a>.</p>
                </li>
                <li>
                    <strong>Limitation of Liability</strong>
                    <p>The Child Life Care Foundation is not liable for any direct or indirect damages arising from the use of the website.</p>
                </li>
                <li>
                    <strong>Changes to Terms</strong>
                    <p>We reserve the right to update or modify these Terms &amp; Conditions at any time. Changes will be posted on this page.</p>
                </li>
                <li>
                    <strong>Contact Us</strong>
                    <p>For any questions about these terms, please <a href="mailto:{{ config('org.email') }}">{{ config('org.email') }}</a> or visit our <a href="{{ route('contact-us') }}">contact page</a>.</p>
                </li>
            </ol>
        </div>
    </section>

@endsection
