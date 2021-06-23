
@extends('layouts.app')

@section('conteudo')
	@if(count($dados)==0)
	<p class="alert alert-danger">Nao foram encontradas noticias</p>
	@else
		@foreach($dados as $noticia)
			@if($noticia->visivel == 1)
					<div class="row bg-secondary text-white">
						<div class="col-md-9">
							<h3> {{ $noticia->titulo}} </h3>
						</div>
						
						<div class="col-md-3 text-right py-2">
							<small> <span class="fa fa-pencil"></span> {{ $noticia->autor}} |
							  <span class="fa fa-calendar-minus-o"></span> {{ $noticia->updated_at->diffForHumans() }}</small>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 py-3">
							{{ $noticia->texto }}
						</div>
					</div> 
						@endif
		@endforeach
	@endif
@endsection