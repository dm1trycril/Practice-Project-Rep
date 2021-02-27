@extends('layout.app')

@section('title-block')

@section('content')

<form method="post" action="{{ route('add_post') }}">
	@csrf
	<br>
	<input type="text" name="title"	placeholder="Title" id="title" class="form-control" value="{{ old('title')}}"><br>
	<textarea name="body" placeholder="Body" id="body" class="form-control" value="{{ old('body')}}"></textarea><br>
	<button type="submit" class="btn btn-success">Send</button>
</form>

@endsection