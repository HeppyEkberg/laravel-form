<div {{ $attributes->merge(['class' => 'card']) }}>
    @if($title ?? false)
        <div class="card-header">
            {!! $title ?? '' !!}
        </div>
    @endif

    @if($body ?? true)
        <div class="card-body">
            {!! $slot !!}
        </div>
    @else
        {!! $slot !!}
    @endif
</div>
