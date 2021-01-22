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
	      <div class="col-md-4"> <label>CERTIFICADO DE FRANCOBORDO ORIGINAL VIGENTE. (EO)</label></div>
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
	    <input hidden="hidden" type="text" name="d[3][key]" class="form-control" value="3">
	    <input hidden="hidden" type="text" name="m[3][key]" class="form-control" value="3">
	      <div class="col-md-4"> <label>CERTIFICADO DE ARQUEO ORIGINAL VIGENTE. (EO)</label></div>
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

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[4][key]" class="form-control" value="4">
	    <input hidden="hidden" type="text" name="m[4][key]" class="form-control" value="4">
	    <input hidden="hidden" type="text" name="d[4][key]" class="form-control" value="4">
	      <div class="col-md-4"> <label>CERT. DE PREVENCIÓN DE LA CONTAMINACIÓN DEL MEDIO AMBIENTE ACUÁTICO VIGENTE. (EO)</label></div>
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
	      <div class="col-md-4"> <label>CERTIFICADO DE DOTACIÓN MÍNIMA DE SEGURIDAD. (EO)</label></div>
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

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[6][key]" class="form-control" value="6">
	    <input hidden="hidden" type="text" name="m[6][key]" class="form-control" value="6">
	    <input hidden="hidden" type="text" name="d[6][key]" class="form-control" value="6">
	      <div class="col-md-4"> <label>CERTIFICADO DE MATRICULA (verificar número motor). (EO)</label></div>
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

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[7][key]" class="form-control" value="7">
	    <input hidden="hidden" type="text" name="m[7][key]" class="form-control" value="7">
	    <input hidden="hidden" type="text" name="d[7][key]" class="form-control" value="7">
	      <div class="col-md-4"> <label>LIBRO DE REGISTRO DE BASURA (EO)</label></div>
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

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[8][key]" class="form-control" value="8">
	    <input hidden="hidden" type="text" name="m[8][key]" class="form-control" value="8">
	    <input hidden="hidden" type="text" name="d[8][key]" class="form-control" value="8">
	      <div class="col-md-4"> <label>LIBRO DIARIO DE NAVEGACIÓN (BITÁCORA) (EO)</label></div>
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
	      <div class="col-md-4"> <label>LIBRO DE MÁQUINAS. (EO)</label></div>
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

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[10][key]" class="form-control" value="10">
	    <input hidden="hidden" type="text" name="m[10][key]" class="form-control" value="10">
	    <input hidden="hidden" type="text" name="d[10][key]" class="form-control" value="10">
	      <div class="col-md-4"> <label>LA TRIPULACIÓN TIENE CARNET DE TRIPULANTE VIGENTE (EO)</label></div>
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

	  </div>
 	<input type="button" name="data[password]" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">

      <div class="row">
        <div class="col-md-4"><h5><b>PUBLICACIONES</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[11][key]" class="form-control" value="11">
	    <input hidden="hidden" type="text" name="m[11][key]" class="form-control" value="11">
	    <input hidden="hidden" type="text" name="d[11][key]" class="form-control" value="11">
	      <div class="col-md-4"> <label>AVISO A LOS NAVEGANTES DE LA ZONA A NAVEGAR. (EO)</label></div>
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
	      <div class="col-md-4"> <label>CÓDIGO INTERNACIONAL DE SEÑALES. (EO)</label></div>
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

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[13][key]" class="form-control" value="13">
	    <input hidden="hidden" type="text" name="m[13][key]" class="form-control" value="13">
	    <input hidden="hidden" type="text" name="d[13][key]" class="form-control" value="13">
	      <div class="col-md-4"> <label>CARTA O MAPA DE RUTAS DE LA ZONA A NAVEGAR. (EO)</label></div>
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

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[14][key]" class="form-control" value="14">
	    <input hidden="hidden" type="text" name="m[14][key]" class="form-control" value="14">
	    <input hidden="hidden" type="text" name="d[14][key]" class="form-control" value="14">
	      <div class="col-md-4"> <label>RIPA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[14][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[14][value]"></textarea></div>
	    </div>
	    <br>

	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">

      <div class="row">
        <div class="col-md-4"><h5><b>INSTRUMENTAL DE NAVEGACIÓN Y COMUNICACIONES</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[15][key]" class="form-control" value="15">
	    <input hidden="hidden" type="text" name="m[15][key]" class="form-control" value="15">
	    <input hidden="hidden" type="text" name="d[15][key]" class="form-control" value="15">
	      <div class="col-md-4"> <label>ANTEOJOS PRISMÁTICOS (LARGAVISTAS). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[15][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[15][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[16][key]" class="form-control" value="16">
	    <input hidden="hidden" type="text" name="m[16][key]" class="form-control" value="16">
	    <input hidden="hidden" type="text" name="d[16][key]" class="form-control" value="16">
	      <div class="col-md-4"> <label>COMPAS MAGNÉTICO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[16][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[16][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[17][key]" class="form-control" value="17">
	    <input hidden="hidden" type="text" name="m[17][key]" class="form-control" value="17">
	    <input hidden="hidden" type="text" name="d[17][key]" class="form-control" value="17">
	      <div class="col-md-4"> <label>GPS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[17][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[17][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[18][key]" class="form-control" value="18">
	    <input hidden="hidden" type="text" name="m[18][key]" class="form-control" value="18">
	    <input hidden="hidden" type="text" name="d[18][key]" class="form-control" value="18">
	      <div class="col-md-4"> <label>CARTA DE NAVEGACIÓN (ELECTRÓNICA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[18][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[18][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[19][key]" class="form-control" value="19">
	    <input hidden="hidden" type="text" name="m[19][key]" class="form-control" value="19">
	    <input hidden="hidden" type="text" name="d[19][key]" class="form-control" value="19">
	      <div class="col-md-4"> <label>PANEL DE INSTRUMENTOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[19][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[19][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[20][key]" class="form-control" value="20">
	    <input hidden="hidden" type="text" name="m[20][key]" class="form-control" value="20">
	    <input hidden="hidden" type="text" name="d[20][key]" class="form-control" value="20">
	      <div class="col-md-4"> <label>EQUIPO VHF/HF HANDIE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[20][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[20][value]"></textarea></div>
	    </div>
	    <br>

	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
	    <input hidden="hidden" type="text" name="properties[21][key]" class="form-control" value="21">
	    <input hidden="hidden" type="text" name="m[21][key]" class="form-control" value="21">
	    <input hidden="hidden" type="text" name="d[21][key]" class="form-control" value="21">
	      <div class="col-md-4"> <label>BANDERAS DEL CÓDIGO INTERNACIONAL DE SEÑALES. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[21][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[21][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[22][key]" class="form-control" value="22">
	    <input hidden="hidden" type="text" name="m[22][key]" class="form-control" value="22">
	    <input hidden="hidden" type="text" name="d[22][key]" class="form-control" value="22">
	      <div class="col-md-4"> <label>LINTERNA DE MANO (ESTANCA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[22][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[22][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[23][key]" class="form-control" value="23">
	    <input hidden="hidden" type="text" name="m[23][key]" class="form-control" value="23">
	    <input hidden="hidden" type="text" name="d[23][key]" class="form-control" value="23">
	      <div class="col-md-4"> <label>MEGÁFONO PORTATIL. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[23][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[23][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[24][key]" class="form-control" value="24">
	    <input hidden="hidden" type="text" name="d[24][key]" class="form-control" value="24">
	    <input hidden="hidden" type="text" name="m[24][key]" class="form-control" value="24">
	      <div class="col-md-4"> <label>REFLECTOR DE LUZ. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[24][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[24][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[25][key]" class="form-control" value="25">
	    <input hidden="hidden" type="text" name="d[25][key]" class="form-control" value="25">
	    <input hidden="hidden" type="text" name="m[25][key]" class="form-control" value="25">
	      <div class="col-md-4"> <label>PABELLÓN NACIONAL. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[25][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[25][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[26][key]" class="form-control" value="26">
	    <input hidden="hidden" type="text" name="m[26][key]" class="form-control" value="26">
	    <input hidden="hidden" type="text" name="d[26][key]" class="form-control" value="26">
	      <div class="col-md-4"> <label>PINTADO NOMBRE/MATRICULA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[26][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[26][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[27][key]" class="form-control" value="27">
	    <input hidden="hidden" type="text" name="m[27][key]" class="form-control" value="27">
	    <input hidden="hidden" type="text" name="d[27][key]" class="form-control" value="27">
	      <div class="col-md-4"> <label>PINTADO DE LAS MARCAS DE CALADO Y FRANCOBORDO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[27][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[27][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[28][key]" class="form-control" value="28">
	    <input hidden="hidden" type="text" name="m[28][key]" class="form-control" value="28">
	    <input hidden="hidden" type="text" name="d[28][key]" class="form-control" value="28">
	      <div class="col-md-4"> <label>PINTADO DE LAS MARCAS DE CALADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[28][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[28][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[29][key]" class="form-control" value="29">
	    <input hidden="hidden" type="text" name="m[29][key]" class="form-control" value="29">
	    <input hidden="hidden" type="text" name="d[29][key]" class="form-control" value="29">
	      <div class="col-md-4"> <label>LUCES DE NAVEGACIÓN (BANDAS, TOPE, TODO HORIZONTE, REMOLQUE, POPA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[29][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[29][value]"></textarea></div>
	    </div>
	    <br>

	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[30][key]" class="form-control" value="30">
	    <input hidden="hidden" type="text" name="m[30][key]" class="form-control" value="30">
	    <input hidden="hidden" type="text" name="d[30][key]" class="form-control" value="30">
	      <div class="col-md-4"> <label>CHALECOS SALVAVIDAS (CON EL NOMBRE DE LA EMBARCACIÓN). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[30][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[30][value]" value="{{ old('properties[30][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[30][value]" value="{{ old('properties[30][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[30][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[31][key]" class="form-control" value="31">
	    <input hidden="hidden" type="text" name="m[31][key]" class="form-control" value="31">
	    <input hidden="hidden" type="text" name="d[31][key]" class="form-control" value="31">
	      <div class="col-md-4"> <label>GUINDOLAS (CON EL NOMBRE DE LA EMBARCACIÓN). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[31][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[31][value]" value="{{ old('properties[31][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[31][value]" value="{{ old('properties[31][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[31][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[32][key]" class="form-control" value="32">
	    <input hidden="hidden" type="text" name="m[32][key]" class="form-control" value="32">
	    <input hidden="hidden" type="text" name="d[32][key]" class="form-control" value="32">
	      <div class="col-md-4"> <label>BOMBA DE ACHIQUE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[32][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[32][value]" value="{{ old('properties[32][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[32][value]" value="{{ old('properties[32][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[32][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[33][key]" class="form-control" value="33">
	    <input hidden="hidden" type="text" name="m[33][key]" class="form-control" value="33">
	    <input hidden="hidden" type="text" name="d[33][key]" class="form-control" value="33">
	      <div class="col-md-4"> <label>CARTELERÍA RESTRICTIVA. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m[33][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[33][value]" value="{{ old('properties[33][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[33][value]" value="{{ old('properties[33][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[33][value]"></textarea></div>
	    </div>
	    <br>

	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>ELEMENTOS DE LUCHA CONTRA INCENDIO</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
  		<div class="row">
	    <input hidden="hidden" type="text" name="properties[34][key]" class="form-control" value="34">
	    <input hidden="hidden" type="text" name="m[34][key]" class="form-control" value="34">
	    <input hidden="hidden" type="text" name="d[34][key]" class="form-control" value="34">
	      <div class="col-md-4"> <label>BOMBA DE AGUA PARA EL SISTEMA DE LUCHA CONTRA INCENDIOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[34][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[34][value]" value="{{ old('properties[34][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[34][value]" value="{{ old('properties[34][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[34][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[35][key]" class="form-control" value="35">
	    <input hidden="hidden" type="text" name="m[35][key]" class="form-control" value="35">
	    <input hidden="hidden" type="text" name="d[35][key]" class="form-control" value="35">
	      <div class="col-md-4"> <label>MANGUERA DE LUCHA CONTRA INCENDIOS COMPLETA (CON PITÓN DOSIFICADO DE AGUA A CHORRO Y NIEBLA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[35][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[35][value]" value="{{ old('properties[35][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[35][value]" value="{{ old('properties[35][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[35][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[36][key]" class="form-control" value="36">
	    <input hidden="hidden" type="text" name="m[36][key]" class="form-control" value="36">
	    <input hidden="hidden" type="text" name="d[36][key]" class="form-control" value="36">
	      <div class="col-md-4"> <label>EXTINTORES DE INCENDIO (DOS DE 12 KG Y DOS DE 6 KG)</label></div>
	      <div class="col-md-3"><textarea name="m[36][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[36][value]" value="{{ old('properties[36][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[36][value]" value="{{ old('properties[36][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[36][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[37][key]" class="form-control" value="37">
	    <input hidden="hidden" type="text" name="m[37][key]" class="form-control" value="37">
	    <input hidden="hidden" type="text" name="d[37][key]" class="form-control" value="37">
	      <div class="col-md-4"> <label>CABOS EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[37][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[37][value]" value="{{ old('properties[37][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[37][value]" value="{{ old('properties[37][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[37][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[38][key]" class="form-control" value="38">
	    <input hidden="hidden" type="text" name="m[38][key]" class="form-control" value="38">
	    <input hidden="hidden" type="text" name="d[38][key]" class="form-control" value="38">
	      <div class="col-md-4"> <label>CABOS DE REMOLQUE. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m[38][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[38][value]" value="{{ old('properties[38][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[38][value]" value="{{ old('properties[38][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[38][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[39][key]" class="form-control" value="39">
	    <input hidden="hidden" type="text" name="m[39][key]" class="form-control" value="39">
	    <input hidden="hidden" type="text" name="d[39][key]" class="form-control" value="39">
	      <div class="col-md-4"> <label>BITAS, CORNAMUSAS, PASA CABOS, ETC. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[39][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[39][value]" value="{{ old('properties[39][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[39][value]" value="{{ old('properties[39][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[39][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[40][key]" class="form-control" value="40">
	    <input hidden="hidden" type="text" name="m[40][key]" class="form-control" value="40">
	    <input hidden="hidden" type="text" name="d[40][key]" class="form-control" value="40">
	      <div class="col-md-4"> <label>MOTORES PRINCIPAL (FUNCIONAMIENTO). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[40][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[40][value]" value="{{ old('properties[40][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[40][value]" value="{{ old('properties[40][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[40][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[41][key]" class="form-control" value="41">
	    <input hidden="hidden" type="text" name="m[41][key]" class="form-control" value="41">
	    <input hidden="hidden" type="text" name="d[41][key]" class="form-control" value="41">
	      <div class="col-md-4"> <label>TANQUE DE COMBUSTIBLE. (EO))</label></div>
	      <div class="col-md-3"><textarea name="m[41][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[41][value]" value="{{ old('properties[41][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[41][value]" value="{{ old('properties[41][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[41][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[42][key]" class="form-control" value="42">
	    <input hidden="hidden" type="text" name="m[42][key]" class="form-control" value="42">
	    <input hidden="hidden" type="text" name="d[42][key]" class="form-control" value="42">
	      <div class="col-md-4"> <label>SISTEMA DE ALIMENTACIÓN. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[42][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[42][value]" value="{{ old('properties[42][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[42][value]" value="{{ old('properties[42][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[42][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[43][key]" class="form-control" value="43">
	    <input hidden="hidden" type="text" name="m[43][key]" class="form-control" value="43">
	    <input hidden="hidden" type="text" name="d[43][key]" class="form-control" value="43">
	      <div class="col-md-4"> <label>PANEL DE INSTRUMENTOS (MÁQUINA PRINCIPAL). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[43][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[43][value]" value="{{ old('properties[43][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[43][value]" value="{{ old('properties[43][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[43][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[44][key]" class="form-control" value="44">
	    <input hidden="hidden" type="text" name="m[44][key]" class="form-control" value="44">
	    <input hidden="hidden" type="text" name="d[44][key]" class="form-control" value="44">
	      <div class="col-md-4"> <label>PARADA A DISTANCIA MOTOR PROPULSOR DESDE EL PUENTE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[44][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[44][value]" value="{{ old('properties[44][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[44][value]" value="{{ old('properties[44][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[44][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[45][key]" class="form-control" value="45">
	    <input hidden="hidden" type="text" name="m[45][key]" class="form-control" value="45">
	    <input hidden="hidden" type="text" name="d[45][key]" class="form-control" value="45">
	      <div class="col-md-4"> <label>FUNCIONAMIENTO BOMBA DE ACHIQUE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[45][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[45][value]" value="{{ old('properties[45][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[45][value]" value="{{ old('properties[45][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[45][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[46][key]" class="form-control" value="46">
	    <input hidden="hidden" type="text" name="m[46][key]" class="form-control" value="46">
	    <input hidden="hidden" type="text" name="d[46][key]" class="form-control" value="46">
	      <div class="col-md-4"> <label>FUNCIONAMIENTO SISTEMA GOBIERNO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[46][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[46][value]" value="{{ old('properties[46][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[46][value]" value="{{ old('properties[46][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[46][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[47][key]" class="form-control" value="47">
	    <input hidden="hidden" type="text" name="m[47][key]" class="form-control" value="47">
	    <input hidden="hidden" type="text" name="d[47][key]" class="form-control" value="47">
	      <div class="col-md-4"> <label>TABLERO DEL SISTEMA ELÉCTRICO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[47][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[47][value]" value="{{ old('properties[47][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[47][value]" value="{{ old('properties[47][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[47][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[48][key]" class="form-control" value="48">
	    <input hidden="hidden" type="text" name="m[48][key]" class="form-control" value="48">
	    <input hidden="hidden" type="text" name="d[48][key]" class="form-control" value="48">
	      <div class="col-md-4"> <label>HERRAMIENTAS Y REPUESTOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[48][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[48][value]" value="{{ old('properties[48][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[48][value]" value="{{ old('properties[48][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[48][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[49][key]" class="form-control" value="49">
	    <input hidden="hidden" type="text" name="m[49][key]" class="form-control" value="49">
	    <input hidden="hidden" type="text" name="d[49][key]" class="form-control" value="49">
	      <div class="col-md-4"> <label>CUBIERTA PRINCIPAL (PLANCHADA ANTIDESLIZANTE). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[49][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[49][value]" value="{{ old('properties[49][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[49][value]" value="{{ old('properties[49][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[49][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[50][key]" class="form-control" value="50">
	    <input hidden="hidden" type="text" name="m[50][key]" class="form-control" value="50">
	    <input hidden="hidden" type="text" name="d[50][key]" class="form-control" value="50">
	      <div class="col-md-4"> <label>CIERRES ESTANCOS (BURLETES-MANIGUETAS-AGUJEROS). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[50][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[50][value]" value="{{ old('properties[50][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[50][value]" value="{{ old('properties[50][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[50][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[51][key]" class="form-control" value="51">
	    <input hidden="hidden" type="text" name="m[51][key]" class="form-control" value="51">
	    <input hidden="hidden" type="text" name="d[51][key]" class="form-control" value="51">
	      <div class="col-md-4"> <label>CASCO LIBRE DE FISURAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[51][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[51][value]" value="{{ old('properties[51][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[51][value]" value="{{ old('properties[51][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[51][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[52][key]" class="form-control" value="52">
	    <input hidden="hidden" type="text" name="m[52][key]" class="form-control" value="52">
	    <input hidden="hidden" type="text" name="d[52][key]" class="form-control" value="52">
	      <div class="col-md-4"> <label>VENTANAS -OJOS DE BUEY (ESTANQUEIDAD). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[52][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[52][value]" value="{{ old('properties[52][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[52][value]" value="{{ old('properties[52][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[52][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[53][key]" class="form-control" value="53">
	    <input hidden="hidden" type="text" name="m[53][key]" class="form-control" value="53">
	    <input hidden="hidden" type="text" name="d[53][key]" class="form-control" value="53">
	      <div class="col-md-4"> <label>TAPAS DE BODEGA/PORTALONES. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[53][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[53][value]" value="{{ old('properties[53][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[53][value]" value="{{ old('properties[53][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[53][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[54][key]" class="form-control" value="54">
	    <input hidden="hidden" type="text" name="m[54][key]" class="form-control" value="54">
	    <input hidden="hidden" type="text" name="d[54][key]" class="form-control" value="54">
	      <div class="col-md-4"> <label>PROTECCIÓN PERSONAL (BARANDILLAS-ESCALESRAS-ETC). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[54][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[54][value]" value="{{ old('properties[54][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[54][value]" value="{{ old('properties[54][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[54][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[55][key]" class="form-control" value="55">
	    <input hidden="hidden" type="text" name="m[55][key]" class="form-control" value="55">
	    <input hidden="hidden" type="text" name="d[55][key]" class="form-control" value="55">
	      <div class="col-md-4"> <label>PINTADO DEL CASCO EN BUEN ESTADO (INTERIOR-EXTERIOR). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[55][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[55][value]" value="{{ old('properties[55][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[55][value]" value="{{ old('properties[55][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[55][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[56][key]" class="form-control" value="56">
	    <input hidden="hidden" type="text" name="m[56][key]" class="form-control" value="56">
	    <input hidden="hidden" type="text" name="d[56][key]" class="form-control" value="56">
	      <div class="col-md-4"> <label>CUADERNAS EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[56][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[56][value]" value="{{ old('properties[56][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[56][value]" value="{{ old('properties[56][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[56][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[57][key]" class="form-control" value="57">
	    <input hidden="hidden" type="text" name="m[57][key]" class="form-control" value="57">
	    <input hidden="hidden" type="text" name="d[57][key]" class="form-control" value="57">
	      <div class="col-md-4"> <label>MAMPARAS EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[57][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[57][value]" value="{{ old('properties[57][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[57][value]" value="{{ old('properties[57][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[57][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[58][key]" class="form-control" value="58">
	    <input hidden="hidden" type="text" name="m[58][key]" class="form-control" value="58">
	    <input hidden="hidden" type="text" name="d[58][key]" class="form-control" value="58">
	      <div class="col-md-4"> <label>CASCO LIBRE DE FISURAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[58][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[58][value]" value="{{ old('properties[58][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[58][value]" value="{{ old('properties[58][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[58][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[59][key]" class="form-control" value="59">
	    <input hidden="hidden" type="text" name="m[59][key]" class="form-control" value="59">
	    <input hidden="hidden" type="text" name="d[59][key]" class="form-control" value="59">
	      <div class="col-md-4"> <label>OBRA VIVA EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[59][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[59][value]" value="{{ old('properties[59][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[59][value]" value="{{ old('properties[59][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[59][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[60][key]" class="form-control" value="60">
	    <input hidden="hidden" type="text" name="m[60][key]" class="form-control" value="60">
	    <input hidden="hidden" type="text" name="d[60][key]" class="form-control" value="60">
	      <div class="col-md-4"> <label>OBRA MUERTA EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[60][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[60][value]" value="{{ old('properties[60][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[60][value]" value="{{ old('properties[60][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[60][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[61][key]" class="form-control" value="61">
	    <input hidden="hidden" type="text" name="m[61][key]" class="form-control" value="61">
	    <input hidden="hidden" type="text" name="d[61][key]" class="form-control" value="61">
	      <div class="col-md-4"> <label>MEDIDAS DE ESPESOR DEL CASCO ADECUADA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[61][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[61][value]" value="{{ old('properties[61][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[61][value]" value="{{ old('properties[61][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[61][value]"></textarea></div>
	    </div>
	    <br>

	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>PREVENCIÓN DE LA CONTAMINACIÓN</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[62][key]" class="form-control" value="62">
	    <input hidden="hidden" type="text" name="m[62][key]" class="form-control" value="62">
	    <input hidden="hidden" type="text" name="d[62][key]" class="form-control" value="62">
	      <div class="col-md-4"> <label>LIBRE DE FUGAS DE COMBUSTIBLE/LÍQUIDO HIDRÁULICO/ACEITES. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[62][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[62][value]" value="{{ old('properties[62][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[62][value]" value="{{ old('properties[62][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[62][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[63][key]" class="form-control" value="63">
	    <input hidden="hidden" type="text" name="m[63][key]" class="form-control" value="63">
	    <input hidden="hidden" type="text" name="d[63][key]" class="form-control" value="63">
	      <div class="col-md-4"> <label>BASUREROS CON RÓTULOS X TIPO DE BASURA EN CANTIDAD NECESARIA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[63][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[63][value]" value="{{ old('properties[63][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[63][value]" value="{{ old('properties[63][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[63][value]"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[64][key]" class="form-control" value="64">
	    <input hidden="hidden" type="text" name="m[64][key]" class="form-control" value="64">
	    <input hidden="hidden" type="text" name="d[64][key]" class="form-control" value="64">
	      <div class="col-md-4"> <label>INDUMENTARIA ADECUADA DEL PATRÓN (OVEROL, BOTAS DE SEGURIDAD, GUANTES, GAFAS). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[64][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[64][value]" value="{{ old('properties[64][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[64][value]" value="{{ old('properties[64][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[64][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[65][key]" class="form-control" value="65">
	    <input hidden="hidden" type="text" name="m[65][key]" class="form-control" value="65">
	    <input hidden="hidden" type="text" name="d[65][key]" class="form-control" value="65">
	      <div class="col-md-4"> <label>BOTIQUÍN DE PRIMEROS AUXILIOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m[65][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[65][value]" value="{{ old('properties[65][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[65][value]" value="{{ old('properties[65][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[65][value]"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[66][key]" class="form-control" value="66">
	    <input hidden="hidden" type="text" name="m[66][key]" class="form-control" value="66">
	    <input hidden="hidden" type="text" name="d[66][key]" class="form-control" value="66">
	      <div class="col-md-4"> <label>TANQUE DE AGUA POTABLE PARA CONSUMO. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m[66][value]"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[66][value]" value="{{ old('properties[66][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[66][value]" value="{{ old('properties[66][value]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d[66][value]"></textarea></div>
	    </div>
	    <br>

	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
</fieldset>
