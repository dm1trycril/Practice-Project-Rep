@extends('layout.app')

@section('title-block')

@section('content')

<form method="post" action="{{ route('send_form') }}">
	@csrf
	<br/>
	<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}"><br>
	<div class="help-block"> @if ($errors->has('email'))<ul role="alert"><li>{{ $errors->first('email') }}</li></ul> @endif</div>
	<input type="text" name="password" id="password" class="form-control" value="{{ old('password') }}"><br>
	<div class="help-block"> @if ($errors->has('password'))<ul role="alert"><li>{{ $errors->first('password') }}</li></ul> @endif</div>
	<button type="submit" class="btn btn-success">Send</button>
</form>

@endsection