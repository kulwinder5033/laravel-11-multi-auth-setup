<section class="page-banner">
    <div class="shell">
        <h1>{{ $title }}</h1>
        @isset($subtitle)
            <p>{{ $subtitle }}</p>
        @endisset
        <ul class="crumbs">
            <li><a href="{{ route('index') }}">Home</a></li>
            <li>{{ $title }}</li>
        </ul>
    </div>
</section>
