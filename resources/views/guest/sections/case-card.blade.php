<article class="card {{ $case->status === 'Past' ? 'card--past' : '' }}" data-reveal @isset($delay) style="--d:{{ $delay }}ms" @endisset>
    <a class="card__media" href="{{ route('case-detail', $case->id) }}">
        @if ($case->image)
            <img src="{{ asset('storage/uploads/case/image/' . $case->image) }}" alt="{{ $case->title }}" loading="lazy">
        @else
            <img src="{{ asset('front/img/home/medical-donation.jpeg') }}" alt="{{ $case->title }}" loading="lazy">
        @endif
        <span class="chip">{{ $case->status === 'Past' ? 'Completed' : 'Case ' . $case->id }}</span>
    </a>
    <div class="card__body">
        <h4><a href="{{ route('case-detail', $case->id) }}">{{ $case->title }}</a></h4>
        @if (filled($case->content))
            <p>{{ Str::limit(strip_tags($case->content), 110) }}</p>
        @endif
        <div class="card__actions">
            <a class="btn btn--primary btn--sm" href="{{ route('case-detail', $case->id) }}">View Case</a>
            @if ($case->pdf_file)
                <a class="btn btn--ghost btn--sm" href="{{ asset('storage/uploads/case/pdf_file/' . $case->pdf_file) }}" target="_blank" rel="noopener">Medical File</a>
            @endif
        </div>
    </div>
</article>
