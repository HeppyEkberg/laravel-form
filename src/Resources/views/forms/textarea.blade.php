<div class="form-group">
    @if($label ?? false)
        <label for="{{ $id }}">{{$label}}</label>
    @endif
    <textarea class="{{ trim('form-control ' .  $class) }}" name="{{$name}}" {!! $attributes->toHtml() !!}>{!! $slot !!}</textarea>
</div>
