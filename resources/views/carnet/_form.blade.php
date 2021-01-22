@csrf
<style>
.required label:after {
    color: #e32;
    content: ' *';
    display:inline;
}
</style>

<div class="container col-md-12">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">

				@if($carnet->id)
					<label for="avatar">Foto de Perfil:</label><br>
					<center>
					<img width="177px" src="{{Storage::url($carnet->avatar)}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$carnet->avatar ?? '')}}">
					</center>
				@else
					<label for="avatar">Foto de Perfil:</label><br>
					<center>
					<img width="177px" src="{{Storage::url('/img/profilespics/user.png')}}">
					<input
						type="file"
						name="avatar"
						id="avatar"
						value="{{old('avatar',$carnet->avatar ?? '')}}">
					</center>
				@endif


			</div>
			<div class="form-group required">
			<label for="name">Nombre:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('name') is-invalid @enderror border-1"
				type="text"
				name="name"
				id="name"
				placeholder="Nombre..."
				onkeyup="javascript:this.value=this.value.toUpperCase();"
				value="{{old('name',$carnet->name ?? '')}}">
				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group required">
			<label for="lastname1">Apellido Paterno:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('lastname1') is-invalid @enderror border-1"
				type="text"
				name="lastname1"
				id="lastname1"
				placeholder="Apellido Paterno..."
				onkeyup="javascript:this.value=this.value.toUpperCase();"
				value="{{old('lastname1',$carnet->lastname1 ?? '')}}">
				@error('lastname1')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group required">
			<label for="lastname2">Apellido Materno:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('lastname2') is-invalid @enderror border-1"
				type="text"
				name="lastname2"
				id="lastname2"
				placeholder="Apellido Materno..."
				onkeyup="javascript:this.value=this.value.toUpperCase();"
				value="{{old('lastname2',$carnet->lastname2 ?? '')}}">
				@error('lastname2')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
			</div>

		</div>
		<div class="col-md-6">
			<div class="form-group required">
			<label for="sector">Sector:</label>
			<select
				class="form-control bg-light shadow-sm 	@error('sector') is-invalid @enderror border-1"
				name="sector"
				id="sector">
					<option value="LACUSTRE" {{ old('sector', $carnet->sector) == 'LACUSTRE' ? 'selected' : '' }}>LACUSTRE</option>
					<option value="FLUVIAL" {{ old('sector', $carnet->sector) == 'FLUVIAL' ? 'selected' : '' }}>FLUVIAL</option>
				@error('sector')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
				</select>
			</div>

			<div class="form-group required ">
				<div><label>Carnet de Identidad</label></div>
				<div class="row">
				<div class="col-7">
					<input
					class="form-control bg-light shadow-sm 	@error('ci') is-invalid @enderror border-1"
					type="number"
					name="ci"
					id="ci"
					placeholder="Carnet de Identidad..."
					value="{{old('ci',$carnet->ci ?? '')}}">
					@error('ci')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
				</div>
				<div class="col-5">
					<select
					class="form-control bg-light shadow-sm 	@error('ext') is-invalid @enderror border-1"
					name="ext"
					id="ext">
					<option value="	LA PAZ" {{ old('state', $carnet->ext) == '	LA PAZ' ? 'selected' : '' }}>	LA PAZ</option>
					<option value="	CHUQUISACA" {{ old('state', $carnet->ext) == '	CHUQUISACA' ? 'selected' : '' }}>	CHUQUISACA</option>
					<option value="	ORURO" {{ old('state', $carnet->ext) == '	ORURO' ? 'selected' : '' }}>	ORURO</option>
					<option value=" POTOSI" {{ old('state', $carnet->ext) == '	POTOSI' ? 'selected' : '' }}>	POTOSI</option>
					<option value="	SANCA CRUZ" {{ old('state', $carnet->ext) == '	SANCA CRUZ' ? 'selected' : '' }}>	SANCA CRUZ</option>
					<option value="	TARIJA" {{ old('state', $carnet->ext) == '	TARIJA' ? 'selected' : '' }}>	TARIJA</option>
					<option value="	BENI" {{ old('state', $carnet->ext) == '	BENI' ? 'selected' : '' }}>	BENI</option>
					<option value="	PANDO" {{ old('state', $carnet->ext) == '	PANDO' ? 'selected' : '' }}>	PANDO</option>
					<option value=" COCHABAMBA" {{ old('state', $carnet->ext) == '	COCHABAMBA' ? 'selected' : '' }}>	COCHABAMBA</option>

					@error('ext')
						<span class="invalid-feedback" role="alert">
							<strong>{{$message}}</strong>
						</span>
					@enderror
					</select>
				</div>
				</div>
			</div>

			

			<div class="form-group required">
			<label for="tipoemb">Tipo de Embarcación:</label>
			<select
				class="form-control bg-light shadow-sm 	@error('tipoemb') is-invalid @enderror border-1"
				name="tipoemb"
				id="tipoemb">
				<option value="BARCAZA CERRADA" {{ old('tipoemb', $carnet->tipoemb) == 'BARCAZA CERRADA' ? 'selected' : '' }}>BARCAZA CERRADA</option>
				<option value="BARCAZA ABIERTA" {{ old('tipoemb',  $carnet->tipoemb) == 'BARCAZA ABIERTA' ? 'selected' : '' }}>BARCAZA ABIERTA</option>
				<option value="BARCAZA ABIERTA DE MADERA" {{ old('tipoemb',  $carnet->tipoemb) == 'BARCAZA ABIERTA DE MADERA' ? 'selected' : '' }}>BARCAZA ABIERTA DE MADERA</option>
				<option value="LANCHA" {{ old('tipoemb',  $carnet->tipoemb) == 'LANCHA' ? 'selected' : '' }}>LANCHA</option>
				<option value="MOTONAVE" {{ old('tipoemb',  $carnet->tipoemb) == 'MOTONAVE' ? 'selected' : '' }}>MOTONAVE</option>
				<option value="LANCHA MULTIPROPÓSITO" {{ old('tipoemb',  $carnet->tipoemb) == 'LANCHA MULTIPROPÓSITO' ? 'selected' : '' }}>LANCHA MULTIPROPÓSITO</option>
				<option value="CHALANA/CATRAYA" {{ old('tipoemb',  $carnet->tipoemb) == 'CHALANA/CATRAYA' ? 'selected' : '' }}>CHALANA/CATRAYA</option>
				<option value="BOTE/DESLIZADOR" {{ old('tipoemb',  $carnet->tipoemb) == 'BOTE/DESLIZADOR' ? 'selected' : '' }}>BOTE/DESLIZADOR</option>
				<option value="CANOA" {{ old('tipoemb',  $carnet->tipoemb) == 'CANOA' ? 'selected' : '' }}>CANOA</option>
				<option value="KAYAK" {{ old('tipoemb',  $carnet->tipoemb) == 'KAYAK' ? 'selected' : '' }}>KAYAK</option>
				<option value="MOTO ACUÁTICA" {{ old('tipoemb',  $carnet->tipoemb) == 'MOTO ACUÁTICA' ? 'selected' : '' }}>MOTO ACUÁTICA</option>
				<option value="BICINAVE" {{ old('tipoemb',  $carnet->tipoemb) == 'BICINAVE' ? 'selected' : '' }}>BICINAVE</option>
				<option value="YATE" {{ old('tipoemb',  $carnet->tipoemb) == 'YATE' ? 'selected' : '' }}>YATE</option>
				<option value="DRAGA" {{ old('tipoemb',  $carnet->tipoemb) == 'DRAGA' ? 'selected' : '' }}>DRAGA</option>
				<option value="CATAMARÁN" {{ old('tipoemb',  $carnet->tipoemb) == 'CATAMARÁN' ? 'selected' : '' }}>CATAMARÁN</option>
				<option value="ALISCAFO" {{ old('tipoemb',  $carnet->tipoemb) == 'ALISCAFO' ? 'selected' : '' }}>ALISCAFO</option>
				<option value="PEQUE-PEQUE" {{ old('tipoemb',  $carnet->tipoemb) == 'PEQUE-PEQUE' ? 'selected' : '' }}>PEQUE-PEQUE</option>
			</select>
		</div>

		<div class="form-group required">
			<label for="especialidad">Espcialidad:</label>
			<select
				class="form-control bg-light shadow-sm 	@error('especialidad') is-invalid @enderror border-1"
				name="especialidad"
				id="especialidad">
				<option value="CAPITÁN FLUVIAL" {{ old('especialidad', $carnet->especialidad) == 'CAPITÁN FLUVIAL' ? 'selected' : '' }}>CAPITÁN FLUVIAL</option>
				<option value="CAPITÁN LACUSTRE" {{ old('especialidad', $carnet->especialidad) == 'CAPITÁN LACUSTRE' ? 'selected' : '' }}>CAPITÁN LACUSTRE</option>
				<option value="PATRÓN FLUVIAL" {{ old('especialidad', $carnet->especialidad) == 'PATRÓN FLUVIAL' ? 'selected' : '' }}>PATRÓN FLUVIAL</option>
				<option value="PATRÓN LACUSTRE" {{ old('especialidad', $carnet->especialidad) == 'PATRÓN LACUSTRE' ? 'selected' : '' }}>PATRÓN LACUSTRE</option>
				<option value="OFICIAL FLUVIAL" {{ old('especialidad', $carnet->especialidad) == 'OFICIAL FLUVIAL' ? 'selected' : '' }}>OFICIAL FLUVIAL</option>
				<option value="OFICIAL LACUSTRE" {{ old('especialidad', $carnet->especialidad) == 'OFICIAL LACUSTRE' ? 'selected' : '' }}>OFICIAL LACUSTRE</option>
				<option value="JEFE DE MÁQUINAS" {{ old('especialidad',  $carnet->especialidad) == 'JEFE DE MÁQUINAS' ? 'selected' : '' }}>JEFE DE MÁQUINAS</option>
				<option value="MAQUINISTA" {{ old('especialidad',  $carnet->especialidad) == 'MAQUINISTA' ? 'selected' : '' }}>MAQUINISTA</option>
				<option value="AUXILIAR DE MÁQUINAS" {{ old('especialidad',  $carnet->especialidad) == 'AUXILIAR DE MÁQUINAS' ? 'selected' : '' }}>AUXILIAR DE MÁQUINAS</option>
				<option value="CONTRAMAESTRE" {{ old('especialidad',  $carnet->especialidad) == 'CONTRAMAESTRE' ? 'selected' : '' }}>CONTRAMAESTRE</option>
				<option value="ELECTRICISTA" {{ old('especialidad',  $carnet->especialidad) == 'ELECTRICISTA' ? 'selected' : '' }}>ELECTRICISTA</option>
				<option value="TIMONEL" {{ old('especialidad',  $carnet->especialidad) == 'TIMONEL' ? 'selected' : '' }}>TIMONEL</option>
				<option value="COCINER@" {{ old('especialidad',  $carnet->especialidad) == 'COCINER@' ? 'selected' : '' }}>COCINER@</option>
				
			</select>
		</div>
		<div class="form-group required">
			<label for="fechave">Fecha de Vencimiento:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('fechave') is-invalid @enderror border-1"
				type="date"
				name="fechave"
				id="fechave"
				placeholder="Nombre..."
				value="{{old('fechave',$carnet->fechave ?? '')}}">
				@error('fechave')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>

		<div class="form-group required">
			<label for="lugar">Lugar:</label>
			<input
				class="form-control bg-light shadow-sm 	@error('lugar') is-invalid @enderror border-1"
				type="text"
				name="lugar"
				id="lugar"
				placeholder="Apellido Materno..."
				onkeyup="javascript:this.value=this.value.toUpperCase();"
				value="{{old('lugar',$carnet->lugar ?? '')}}">
				@error('lugar')
					<span class="invalid-feedback" role="alert">
						<strong>{{$message}}</strong>
					</span>
				@enderror
		</div>
		<input
			class="form-control bg-light shadow-sm"
			hidden
			name="codigo"
			id="codigo"
			value=null
			placeholder="Nombre..."
			value="{{old('codigo',$carnet->codigo ?? '')}}">
			@error('codigo')
				<span class="invalid-feedback" role="alert">
					<strong>{{$message}}</strong>
				</span>
			@enderror
		</div>
	</div>
</div>


<button class="btn btn-primary btn-large btn-block">Guardar</button>