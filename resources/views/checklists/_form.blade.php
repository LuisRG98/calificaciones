@extends('layout')
@section('content')

<style type="text/css">
#regiration_form fieldset:not(:first-of-type) {
  display: none;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<div class="container">
<div style="overflow-x:auto;" class="mx-auto mb-3">
  <h1>Lista de Verificación</h1>
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
    </div>
  </div>

  <form class="bg-white shadow rounded py-3 px-4" id="regiration_form"  action="{{route('checklists.store')}}"  method="post">
    @csrf
    <input
      class="form-control bg-light shadow-sm  @error('user_id') is-invalid @enderror border-1"
      type="hidden"
      name="user_id"
      id="user_id"
      readonly
      value="{{old('user_id',$emb->user_id ?? auth()->user()->id)}}">
      @error('id_emb')
        <span class="invalid-feedback" role="alert">
          <strong>{{$message}}</strong>
        </span>
      @enderror

    @if($emb->clase_tipo=='DRAGA')
      @include('checklists.draga')

    @elseif($emb->clase_tipo=='BOTE/DESLIZADOR')
      @include('checklists.botedeslizador')

    @elseif($emb->clase_tipo=='BARCAZA CERRADA')
      @include('checklists.bmadera')

    @elseif($emb->clase_tipo=='BARCAZA ABIERTA DE MADERA')
      @include('checklists.bamadera')

    @elseif($emb->clase_tipo=='BARCAZA ABIERTA')
      @include('checklists.bamadera')

    @elseif($emb->clase_tipo=='ALISCAFO')
      @include('checklists.catamaran')

    @elseif($emb->clase_tipo=='LANCHA MULTIPROPÓSITO')
      @include('checklists.lanchamulti')

    @elseif($emb->clase_tipo=='LANCHA')
      @include('checklists.lancha')

    @elseif($emb->clase_tipo=='MOTONAVE')
      @include('checklists.emenor')

    @elseif($emb->clase_tipo == 'CATAMARAN')
        @include('checklists.catamaran')
        
    @elseif($emb->clase_tipo == 'BICINAVE')
        @include('checklists.bicinave')
    @endif

    <input type="hidden" name="emb_id" id="emb_id" value="{{$emb->id}}">
    <input type="hidden" name="clase_tipo" id="clase_tipo" value="{{$emb->clase_tipo}}">


  </form>
</div>
</div>
@include('checklists._script')
@endsection
