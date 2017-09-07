@extends('General__Layout.principal')

@section('content')
	<div class="container center-block">
		<h1 class="text-center">{{$foto->titulo}}</h1>
		<img src="{{$foto->imagen}}" alt="">
		<p class="text-center">{{$foto->descripcion}}</p>
	</div>
@endsection