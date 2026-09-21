<div class="split">
    <div class="panel" data-reveal>
        <div class="panel__head">
            <div>
                <h4>Bank Account Details</h4>
                <p>Direct transfer / NEFT / IMPS</p>
            </div>
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 9-6 9 6"/><path d="M5 10v9h14v-9"/><path d="M3 19h18"/><path d="M9 19v-5h6v5"/></svg>
        </div>
        <ul class="bank-list">
            <li><span class="k">Account Name</span><span class="v">{{ config('org.bank.account_name') }}</span></li>
            <li><span class="k">Account No.</span><span class="v">{{ config('org.bank.account_no') }}</span></li>
            <li><span class="k">IFSC</span><span class="v">{{ config('org.bank.ifsc') }}</span></li>
            <li><span class="k">SWIFT Code</span><span class="v">{{ config('org.bank.swift') }}</span></li>
            <li><span class="k">Account Type</span><span class="v">{{ config('org.bank.type') }}</span></li>
            <li><span class="k">Branch</span><span class="v">{{ config('org.bank.branch') }}</span></li>
            <li><span class="k">UPI ID</span><span class="v">{{ config('org.upi_id') }}</span></li>
        </ul>
        <div class="panel__foot">
            <p>
                After donating, please share your name, address and PAN details with us at
                <a href="mailto:{{ config('org.email') }}">{{ config('org.email') }}</a>
                so that a donation e-receipt can be issued where applicable.
            </p>
        </div>
    </div>

    <div class="qr-card" data-reveal style="--d:120ms">
        <span class="eyebrow">Scan &amp; Pay</span>
        <img src="{{ asset('front/img/qr.jpeg') }}" alt="UPI QR code for {{ config('org.name') }}">
        <h4>Pay using any UPI app</h4>
        <p>Google Pay, PhonePe, Paytm, BHIM or your banking app.</p>
        <p class="muted" style="font-size:.85rem;word-break:break-all">
            <strong>UPI ID:</strong> {{ config('org.upi_id') }}
        </p>
        <a class="btn btn--accent" href="{{ config('org.donate_url') }}" target="_blank" rel="noopener">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.5-1.5 3-3.3 3-5.5A5.5 5.5 0 0 0 12 5.4 5.5 5.5 0 0 0 2 8.5c0 2.2 1.5 4 3 5.5l7 7z"/></svg>
            Donate Online
        </a>
    </div>
</div>
