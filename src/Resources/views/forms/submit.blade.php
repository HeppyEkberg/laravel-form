<input {!! $name ? 'name="'.$name.'"' : '' !!} {!! $id ? 'id="'.$id.'"' : '' !!} type="submit" class="{{ trim('btn ' .  $class) }}" value="{{$value}}" {!! $attributes->toHtml() !!}></input>
