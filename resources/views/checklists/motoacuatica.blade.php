{{-- REVISADO --}}
<fieldset>
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>DOCUMENTACIÓN Y ELEMENTOS VARIOS</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">

	    <div class="row">
	      <input hidden="hidden" type="text" name="properties[0][key]" class="form-control" value="0">
	      <input hidden="hidden" type="text" name="m[0][key]" class="form-control" value="0">
	      <input hidden="hidden" type="text" name="d[0][key]" class="form-control" value="0">
	      <div class="col-md-4"> <label>CERTIFICADO DE REGISTRO ORIGINAL. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[0][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d[0][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[1][key]" class="form-control" value="1">
	    <input hidden="hidden" type="text" name="m[1][key]" class="form-control" value="1">
	    <input hidden="hidden" type="text" name="d[1][key]" class="form-control" value="1">
	      <div class="col-md-4"> <label>CERTIFICADO DE SEGURIDAD DE LA NAVEGACIÓN ORIGINAL VIGENTE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[1][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1][value]" value="{{ old('properties[1][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1][value]" value="{{ old('properties[1][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[1][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[2][key]" class="form-control" value="2">
	    <input hidden="hidden" type="text" name="m[2][key]" class="form-control" value="2">
	    <input hidden="hidden" type="text" name="d[2][key]" class="form-control" value="2">
	      <div class="col-md-4"> <label>CERTIFICADO DE MATRÍCULA ORIGINAL VIGENTE (verificar número de motor). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[2][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[2][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[3][key]" class="form-control" value="3">
	      <div class="col-md-4"> <label>LIBRO DE MÁQUINAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m3"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d3"></textarea></div>
	    </div>
	    <br>

	  </div>
 	<input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
</fieldset>


<fieldset >
	<div class="container col-md-12">

      <div class="row">
        <div class="col-md-4"><h5><b>ELEMENTOS DE SEÑALAMIENTO / LUCES Y MARCAS</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[4][key]" class="form-control" value="4">
	    <input hidden="hidden" type="text" name="m[4][key]" class="form-control" value="4">
	    <input hidden="hidden" type="text" name="d[4][key]" class="form-control" value="4">
	      <div class="col-md-4"> <label>PABELLÓN NACIONAL EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[4][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[4][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[5][key]" class="form-control" value="5">
	    <input hidden="hidden" type="text" name="m[5][key]" class="form-control" value="5">
	    <input hidden="hidden" type="text" name="d[5][key]" class="form-control" value="5">
	      <div class="col-md-4"> <label>PINTADO NOMBRE/MATRÍCULA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[5][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[5][value]"></textarea></div>
	    </div>
	    <br>

	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>ELEMENTOS DE SALVAVIDAS</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[6][key]" class="form-control" value="6">
	    <input hidden="hidden" type="text" name="m[6][key]" class="form-control" value="6">
	    <input hidden="hidden" type="text" name="d[6][key]" class="form-control" value="6">
	      <div class="col-md-4"> <label>CHALECOS SALVAVIDAS (CON EL NOMBRE DE LA EMBARCACIÓN). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[6][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[6][value]"></textarea></div>
	    </div>
	    <br>


	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>ELEMENTOS DE AMARRE Y FONDEO</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
  		<div class="row">
	    <input hidden="hidden" type="text" name="properties[7][key]" class="form-control" value="7">
	    <input hidden="hidden" type="text" name="m[7][key]" class="form-control" value="7">
	    <input hidden="hidden" type="text" name="d[7][key]" class="form-control" value="7">
	      <div class="col-md-4"> <label>CABOS EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[7][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[7][value]"></textarea></div>
	    </div>
	    <br>


	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>MÁQUINAS Y ELECTRICIDAD</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[8][key]" class="form-control" value="8">
	    <input hidden="hidden" type="text" name="m[8][key]" class="form-control" value="8">
	    <input hidden="hidden" type="text" name="d[8][key]" class="form-control" value="8">
	      <div class="col-md-4"> <label>CAJA DE HERRAMIENTAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[8][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[8][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[9][key]" class="form-control" value="9">
	    <input hidden="hidden" type="text" name="m[9][key]" class="form-control" value="9">
	    <input hidden="hidden" type="text" name="d[9][key]" class="form-control" value="9">
	      <div class="col-md-4"> <label>PIEZA DE RECAMBIO MÍNIMOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[9][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[9][value]"></textarea></div>
	    </div>
	    <br>

	    
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>INTEGRIDAD ESTRUCTURAL</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[10][key]" class="form-control" value="10">
	    <input hidden="hidden" type="text" name="m[10][key]" class="form-control" value="10">
	    <input hidden="hidden" type="text" name="d[10][key]" class="form-control" value="10">
	      <div class="col-md-4"> <label>TIENE ADECUADA ESTABILIDAD LA MOTONAÚTICA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[10][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[10][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[11][key]" class="form-control" value="11">
	    <input hidden="hidden" type="text" name="m[11][key]" class="form-control" value="11">
	    <input hidden="hidden" type="text" name="d[11][key]" class="form-control" value="11">
	      <div class="col-md-4"> <label>OBRA VIVA EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[11][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[11][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[12][key]" class="form-control" value="12">
	    <input hidden="hidden" type="text" name="m[12][key]" class="form-control" value="12">
	    <input hidden="hidden" type="text" name="d[12][key]" class="form-control" value="12">
	      <div class="col-md-4"> <label>OBRA MUERTA EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[12][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[12][value]"></textarea></div>
	    </div>
	    <br>

	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>


<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>SEGURIDAD DEL PERSONAL, HIGIENE Y SALUD DE LA TRIPULACIÓN</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[13][key]" class="form-control" value="13">
	    <input hidden="hidden" type="text" name="m[13][key]" class="form-control" value="13">
	    <input hidden="hidden" type="text" name="d[13][key]" class="form-control" value="13">
	      <div class="col-md-4"> <label>BOTIQUIN DE PRIMEROS AUXILIOS (PERSONAL CAPACITADO). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[13][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[13][value]"></textarea></div>
	    </div>
	    <br>


	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
</fieldset>