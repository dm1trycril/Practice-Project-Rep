@extends('layout.app')

@section('title-block')
News
@endsection

@section('content')
	@foreach ($posts as $post)
            <div class="alert alert-primary text-center">
                {!! $post->title !!}
                <br/>
                <a href="{{ route('show_post',  $post->id) }}" class="btn btn-primary btn" role="button" aria-pressed="true">Подробнее</a>
            </div>
    @endforeach
@endsection