@extends('layouts.app')

@section('conteudo')
	<form method="post" action="update_noticia/{{ $noticia->id_noticia }}" >
		{{ csrf_field() }}
		<h4>Editar noticia</h4>

			<div class="form-group">
				<label>Titulo</label>
				<input type="text" name="txt_titulo" class="form-control" value="{{ $noticia->titulo }}">
			</div>
			
			<div class="form-group">
				<label>Texto</label>
				<textarea class="form-control" name="txt_texto" rows="5"> {{ $noticia->texto }} </textarea>
			</div>
			
			<div class="form-group">
				<label>Autor</label>
				<input type="text" name="txt_autor" class="form-control" value="{{ $noticia->autor }}">
			</div>
			
			<div class="form-group text-center">
				@if($noticia->visivel == 1)
					<input type="checkbox" name="check_visivel" checked> Niticia visivel
				@else
					<input type="checkbox" name="check_visivel"> Niticia visivel
				@endif
			</div>
			
			<div class="form-group text-center">
				<button class="btn btn-info btn-md" role="submit"> Salvar </button>
			</div>
	</form>
@endsection