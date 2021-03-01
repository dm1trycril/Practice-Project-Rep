@extends('layout.app')

@section('title-block')
News
@endsection

@section('content')
	@foreach ($posts as $post)
            <div class="alert alert-dark text-center col-4 offset-4">
                {!! $post->title !!}
                <br/>
                <a href="{{ route('show_post',  $post->id) }}" class="btn btn-dark btn" role="button" aria-pressed="true">Подробнее</a>
            </div>
    @endforeach
@endsection