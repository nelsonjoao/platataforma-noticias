@extends('layouts.app')
 
@section('conteudo')
	<form action="salvar_noticia" method="post">
		{{ csrf_field() }}
		<h4>Editar noticia</h4>

			<div class="form-group">
				<label>Titulo</label>
				<input type="text" name="txt_titulo" class="form-control">
			</div>
			
			<div class="form-group">
				<label>Texto</label>
				<textarea class="form-control" name="txt_texto" rows="5"> </textarea>
			</div>
			
			<div class="form-group">
				<label>Autor</label>
				<input type="text" name="txt_autor" class="form-control">
			</div>
			
			<div class="form-group text-center">
				<input type="checkbox" name="check_visivel" checked> Niticia visivel
			</div>
			
			<div class="form-group text-center">
				<button class="btn btn-info btn-md" role="submit"> Salvar </button>
			</div>
	</form>
@endsection