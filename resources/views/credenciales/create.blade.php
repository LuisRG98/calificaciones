@extends('layout')

@section('content')
<div class="container">
	<div style="overflow-x:auto;" class="mx-auto mb-3">
		<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{route('carnets.store')}}" enctype="multipart/form-data">
			<h1 class="display-5">Registrar Tripulante</h1><hr>
			@include('credenciales._form',['carnet'=> new App\Credencia])
		</form>
	</div>
</div>
@endsection
