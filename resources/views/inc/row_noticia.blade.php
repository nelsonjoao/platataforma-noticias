<div class="row pb-4">
	<div class="col-md-6">
		<strong>  {{ $noticia->titulo }} </strong>
	</div> 
	
	<div class="col-md-4">
		{{ $noticia->autor }}
	</div>
	
	<div class="col-md-2">
	@if($noticia->visivel == 1)
		<a href="colocar_invisivel/{{$noticia->id_noticia}}" class="m-1"><i class="fa fa-eye"></i></a>
	@else
		<a href="colocar_visivel/{{$noticia->id_noticia}}" class="m-1"><i class="fa fa-eye text-muted"></i></a>
	@endif
		<a href="editar_noticia/{{$noticia->id_noticia}}" class="m-1"><i class="fa fa-edit"></i></a>
        <a href="eliminar_noticia/{{$noticia->id_noticia}}" class="m-1"><i class="fa fa-trash"></i></a>
	</div>
</div> 