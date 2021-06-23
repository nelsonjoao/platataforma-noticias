<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{
   
    public function index()
    {
		$dados = noticias::all();
		
        return view('noticias_index', compact('dados'));
    }

    
    public function create()
    {
        return view('noticias_create');
    }

    
    public function store(Request $request)
    {
        $noticia = new noticias;
		$noticia->titulo = $request->txt_titulo;
		$noticia->texto = $request->txt_texto;
		$noticia->autor = $request->txt_autor;
		
		if(isset($request->check_visivel))
		$noticia->visivel = 1;
		else
		$noticia->visivel = 0;
		
		 $noticia->save();
		return redirect('index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $noticia = noticias::find($id);
		return view('noticias_edit', compact('noticia'));
    }

    
    public function update(Request $request, $id)
    {
		return 'OKEY';
        $noticia = noticias::find($id);
		$noticia->titulo = $request->txt_titulo;
		$noticia->texto = $request->txt_texto;
		$noticia->autor = $request->txt_autor;
		
		if(isset($request->check_visivel))
		$noticia->visivel = 1;
		else
		$noticia->visivel = 0;
		
		 $noticia->save();
		//return redirect('index');
    }

   public function apresentaTabelaGestao()
   {
	$noticias = noticias::all();
	return view('noticias_gestao', compact('noticias'));
   }
   
   public function colocarVisivel($id)
   {
		$noticia = noticias::find($id);
		$noticia->visivel = 1;
		$noticia->save();
		return redirect('gerir_noticia');
   }
   
   public function colocarInvisivel($id)
   {
		$noticia = noticias::find($id);
		$noticia->visivel = 0;
		$noticia->save();
		return redirect('gerir_noticia');
   } 
   
    public function destroy($id)
    {
        noticias::destroy($id);
		return redirect('gerir_noticia ');
    }
}
