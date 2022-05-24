<div class="card {{ $class ?? '' }}" {!!  isset($style) ? ' style="'. $style .'"' : ''  !!}>
    @if($header ?? false)
        <div class="card-header">
            {!! $header ?? '' !!}
        </div>
    @endif

    @if($body ?? true)
        <div class="card-body">
            @if($title ?? false)
                <h5 class="card-title">{{$title}}</h5>
            @endif

            {!! $slot !!}
        </div>
    @else
        {!! $slot !!}
    @endif
</div>
