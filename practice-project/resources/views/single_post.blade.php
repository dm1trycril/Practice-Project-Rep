@extends('layout.app')

@section('title-block')Post{!! $posts->id !!}@endsection

@section('content')
	<div class="alert alert-primary text-center">
		<h2>{!! $posts->title !!} {!! $posts->views !!}</h2>
		<br/>
		<p>{!! $posts->body !!}</p>
	</div>
@endsection