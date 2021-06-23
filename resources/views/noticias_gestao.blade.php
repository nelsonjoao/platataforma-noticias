@extends('layouts.app')

@section('conteudo')
	@if(count($noticias)==0)
	<p class="alert alert-danger">Nao foram encontradas noticias</p>
	@else
		@foreach($noticias as $noticia)
			@include('inc.row_noticia')
		@endforeach
	@endif
@endsection