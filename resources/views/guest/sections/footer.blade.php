<!-- footer -->
<footer class="site-footer">
    <div class="shell">
        <div class="site-footer__grid">
            <div>
                <div class="footer-brand">
                    <img src="{{ asset('front/img/logo-clcf-240.png') }}" alt="{{ config('org.name') }}">
                    <strong>Child Life Care<br>Foundation</strong>
                </div>
                <p>
                    A government registered charitable trust working for children and underprivileged
                    communities in India — through nutrition, free education, medical support and
                    emergency humanitarian relief.
                </p>
                <div class="footer-reg">
                    <span>Reg. No. {{ config('org.reg_no') }}</span>
                    <span>PAN {{ config('org.pan') }}</span>
                </div>
            </div>

            <div>
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about-us') }}">About Us</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('donation') }}">Ways to Give</a></li>
                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms-and-conditions') }}">Terms &amp; Conditions</a></li>
                </ul>
            </div>

            <div>
                <h4>Our Work</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('index') }}#food-programme">Food Programme</a></li>
                    <li><a href="{{ route('udaan') }}">Udaan Free Learning Center</a></li>
                    <li><a href="{{ route('medical-help') }}">Medical Support</a></li>
                    <li><a href="{{ route('index') }}#our-work">Educational Materials</a></li>
                    <li><a href="{{ route('index') }}#our-work">Emergency Support</a></li>
                    <li><a href="{{ route('index') }}#our-work">Community Welfare</a></li>
                </ul>
            </div>

            <div>
                <h4>Reach Us</h4>
                <ul class="footer-contact">
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>{{ config('org.address') }}</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/></svg>
                        <a href="tel:+{{ config('org.phone_e164') }}">{{ config('org.phone') }}</a>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg>
                        <a href="mailto:{{ config('org.email') }}">{{ config('org.email') }}</a>
                    </li>
                </ul>
                <a class="btn btn--accent btn--sm" style="margin-top:18px" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">Donate Now</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} {{ config('org.name') }}. All rights reserved.</p>
            <ul>
                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('terms-and-conditions') }}">Terms &amp; Conditions</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- /footer -->
