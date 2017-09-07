@extends('General__Layout.principal')

@section('content')
	<div class="container">
		@forelse($fotos as $foto)
			<div class="col-md-6">
				<h1>{{$foto->titulo}}</h1>
				<img src="{{$foto->imagen}}" alt="">
				<p class="text-center">{{$foto->descripcion}}</p>
			</div>
		@empty
			<h1>no hay mensajes</h1>
		@endforelse
	</div>
@endsection