@php($formMethod = in_array($method, ['post', 'get']) ? $method : 'post')
<form method="{{$formMethod}}" {!! isset($action) ? 'action="' . $action . '"' : '' !!}>
    @csrf
    @if(! in_array($method, ['post', 'get']))
        @method($method)
    @endif

    {!! $slot !!}
</form>
