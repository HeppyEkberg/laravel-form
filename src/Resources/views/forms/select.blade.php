<div class="form-group">
    @if($label ?? false)
        <label for="{{$id}}">{{$label}}</label>
    @endif

    <select id="{{$id}}" class="{{ trim('form-control ' . $class) }}" name="{{$name}}">
        {!! $slot !!}
    </select>
</div>
