@extends('layout.app')

@section('title-block')
News
@endsection

@section('slick-cdn')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection

@section('content')
	<div class="slider">
		@foreach ($posts as $post)
            <div class="alert alert-dark text-center slider-item">
                {!! $post->title !!}
                <br/>
                <a href="{{ route('show_post',  $post->id) }}" class="btn btn-dark btn" role="button" aria-pressed="true">Подробнее</a>
            </div>
    	@endforeach
	</div>
	<script>
		$(document).ready(function(){
			$('.slider').slick();
		})
	</script>
@endsection