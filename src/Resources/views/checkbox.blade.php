<div class="form-check">
    <input class="{{ trim('form-check-input ' . $class) }}" name="{{$name}}" type="checkbox" value="{{$value}}" id="{{$id}}" {!! $attributes->toHtml() !!} @checked($checked)>

    @if($label ?? false)
        <label class="form-check-label" for="{{$id}}">{{$label}}</label>
    @endif
</div>




