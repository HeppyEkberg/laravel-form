<div class="form-group">
    @if($label ?? false)
        <label for="{{$id}}">{{$label}}</label>
    @endif

    <input id="{{$id}}" class="{{$class}} {{ isset($placeholder) ? "placeholder=$placeholder" : '' }}" name="{{$name}}" value="{{$value}}" type="text">

        @if($hasError ?? false)
            <div class="invalid-feedback">{{collect($error)->implode('<br>')}}</div>
        @endif
</div>
