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


	<div>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" >
  			Запустить статический фон модального окна
		</button>
	</div>


	<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
						<!-- <iframe width="auto" height="auto" src="https://www.youtube.com/embed/N1FuK9KC1vc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						<div class="embed-responsive embed-responsive-16by9" id="staticBackdrop">
					 		<iframe width="auto" height="auto" src="https://www.youtube.com/embed/N1FuK9KC1vc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
@endsection