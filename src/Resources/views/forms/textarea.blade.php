<div class="form-group">
    <textarea  class="{{ trim('form-control' .  $class) }}" name="{{$name}}" {!! $attributes->toHtml() !!}>{!! $slot !!}</textarea>
</div>


