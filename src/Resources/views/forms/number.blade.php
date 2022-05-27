<div class="form-group">
    @if($label ?? false)
        <label for="{{$id}}">{{$label}}</label>
    @endif

    <input id="{{$id}}" name="{{$name}}" type="number" value="{{ $value }}" class="{{ trim('form-control ' .  $class) }}" {!! $attributes->toHtml() !!}>

    @if($hasError)
        <div class="invalid-feedback">{{ $showErrors() }}</div>
    @endif
</div>
