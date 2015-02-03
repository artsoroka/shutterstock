@if( $errors->any() )
	@foreach($errors->all('<li>:message</li>') as $message)
		{{ $message }} 
	@endforeach 
@endif  
{{ Form::open(array('url' => 'login')) }}
<ul>
    {{ Form::text('login', Input::old('login'), array('placeholder' => 'your username')) }}
    {{ Form::password('password') }}
    {{ Form::submit('Login') }}
</ul>
{{ Form::close() }}