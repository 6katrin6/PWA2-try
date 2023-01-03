{!! Form::open(['url' => 'send']) !!} 
{{ Form::text('email', 'example@gmail.com') }}
{{ Form::submit('Submit button') }}
{!! Form::close() !!}

<hr>

<p>Returned from the controller: <b>{{$email ?? 'unknown'}}</b></p>
<p>
    Undefined variable in BLADE<br>
    Returned from the controller: <b>{{$var ?? '0'}}</b>
</p>