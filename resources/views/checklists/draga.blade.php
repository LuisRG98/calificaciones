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
	      <div class="col-md-3"><textarea name="m0"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[0][value]" value="{{ old('properties[0][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d0"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[1][key]" class="form-control" value="1">
	    <input hidden="hidden" type="text" name="m[1][key]" class="form-control" value="1">
	    <input hidden="hidden" type="text" name="d[1][key]" class="form-control" value="1">
	      <div class="col-md-4"> <label>CERTIFICADO DE SEGURIDAD DE LA NAVEGACIÓN ORIGINAL VIGENTE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m1"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1]" value="{{ old('properties[1]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[1]" value="{{ old('properties[1]', 'NO') }}" >
	      </div>
	      <div class="col-md-3"><textarea  name="d1"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[2][key]" class="form-control" value="2">
	    <input hidden="hidden" type="text" name="m[2][key]" class="form-control" value="2">
	    <input hidden="hidden" type="text" name="d[2][key]" class="form-control" value="2">
	      <div class="col-md-4"> <label>CERTIFICADO DE FRANCOBORDO ORIGINAL VIGENTE . (ER)</label></div>
	      <div class="col-md-3"><textarea name="m2"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[2][value]" value="{{ old('properties[2][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d2"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[3][key]" class="form-control" value="3">
	    <input hidden="hidden" type="text" name="m[3][key]" class="form-control" value="3">
	    <input hidden="hidden" type="text" name="d[3][key]" class="form-control" value="3">
	      <div class="col-md-4"> <label>CERTIFICADO DE ARQUEO ORIGINAL VIGENTE. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m3"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[3][value]" value="{{ old('properties[3][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d3"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[4][key]" class="form-control" value="4">
	    <input hidden="hidden" type="text" name="m[4][key]" class="form-control" value="4">
	    <input hidden="hidden" type="text" name="d[4][key]" class="form-control" value="4">
	      <div class="col-md-4"> <label>CERTIFICADO DE MATRICULA ORIGINAL VIGENTE (verificar número motor). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m4"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[4][value]" value="{{ old('properties[4][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d4"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[5][key]" class="form-control" value="5">
	    <input hidden="hidden" type="text" name="m[5][key]" class="form-control" value="5">
	    <input hidden="hidden" type="text" name="d[5][key]" class="form-control" value="5">
	      <div class="col-md-4"> <label>CERT. DE PREVENCIÓN DE LA CONTAMINACIÓN DEL MEDIO AMBIENTE ACUÁTICO. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m5"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[5][value]" value="{{ old('properties[5][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d5"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[6][key]" class="form-control" value="6">
	    <input hidden="hidden" type="text" name="m[6][key]" class="form-control" value="6">
	    <input hidden="hidden" type="text" name="d[6][key]" class="form-control" value="6">
	      <div class="col-md-4"> <label>PLAN DE ABANDONO DE EMBARCACIÓN. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m6"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[6][value]" value="{{ old('properties[6][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d6"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[7][key]" class="form-control" value="7">
	   	<input hidden="hidden" type="text" name="m[7][key]" class="form-control" value="7">
	    <input hidden="hidden" type="text" name="d[7][key]" class="form-control" value="7">
	      <div class="col-md-4"> <label>PLAN DE CONTROL AVERÍAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m7"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[7][value]" value="{{ old('properties[7][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d7"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[8][key]" class="form-control" value="8">
	    <input hidden="hidden" type="text" name="m[8][key]" class="form-control" value="8">
	    <input hidden="hidden" type="text" name="d[8][key]" class="form-control" value="8">
	      <div class="col-md-4"> <label>PLAN DE LUCHA CONTRA INCENDIO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m8"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[8][value]" value="{{ old('properties[8][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d8"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[9][key]" class="form-control" value="9">
	    <input hidden="hidden" type="text" name="m[9][key]" class="form-control" value="9">
	    <input hidden="hidden" type="text" name="d[9][key]" class="form-control" value="9">
	      <div class="col-md-4"> <label>PLAN DE DERRAME DE COMBUSTIBLE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m9"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[9][value]" value="{{ old('properties[9][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d9"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[10][key]" class="form-control" value="10">
	    <input hidden="hidden" type="text" name="m[10][key]" class="form-control" value="10">
	    <input hidden="hidden" type="text" name="d[10][key]" class="form-control" value="10">
	      <div class="col-md-4"> <label>LA TRIPULACIÓN POSEE CARNET DE TRIPULANTE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m10"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[10][value]" value="{{ old('properties[10][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d10"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[11][key]" class="form-control" value="11">
	    <input hidden="hidden" type="text" name="m[11][key]" class="form-control" value="11">
	    <input hidden="hidden" type="text" name="d[11][key]" class="form-control" value="11">
	      <div class="col-md-4"> <label>LA TRIPULACIÓN CONOCE LOS PLANES DE CONTINGENCIA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m11"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[11][value]" value="{{ old('properties[11][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d11"></textarea></div>
	    </div>
	    <br>
	    
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[12][key]" class="form-control" value="12">
	    <input hidden="hidden" type="text" name="m[12][key]" class="form-control" value="12">
	    <input hidden="hidden" type="text" name="d[12][key]" class="form-control" value="12">
	      <div class="col-md-4"> <label>LIBRO DIARIO DE NAVEGACIÓN (BITACORA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m12"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[12][value]" value="{{ old('properties[12][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d12"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[13][key]" class="form-control" value="13">
	    <input hidden="hidden" type="text" name="m[13][key]" class="form-control" value="13">
	    <input hidden="hidden" type="text" name="d[13][key]" class="form-control" value="13">
	      <div class="col-md-4"> <label>LIBRO DE MÁQUINAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m13"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[13][value]" value="{{ old('properties[13][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d13"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[14][key]" class="form-control" value="14">
	    <input hidden="hidden" type="text" name="m[14][key]" class="form-control" value="14">
	    <input hidden="hidden" type="text" name="d[14][key]" class="form-control" value="14">
	      <div class="col-md-4"> <label>LIBRO DE DESCARGA DE BASURA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m14"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[14][value]" value="{{ old('properties[14][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d14"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[15][key]" class="form-control" value="15">
	    <input hidden="hidden" type="text" name="m[15][key]" class="form-control" value="15">
	    <input hidden="hidden" type="text" name="d[15][key]" class="form-control" value="15">
	      <div class="col-md-4"> <label>AVISO A LOS NAVEGANTES DE LA ZONA A NAVEGAR. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m15"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[15][value]" value="{{ old('properties[15][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d15"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[16][key]" class="form-control" value="16">
	    <input hidden="hidden" type="text" name="m[16][key]" class="form-control" value="16">
	    <input hidden="hidden" type="text" name="d[16][key]" class="form-control" value="16">
	      <div class="col-md-4"> <label>CUADRO DEL CÓDIGO INTERNACIONAL DE SEÑALES. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m16"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[16][value]" value="{{ old('properties[16][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d16"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[17][key]" class="form-control" value="17">
	    <input hidden="hidden" type="text" name="m[17][key]" class="form-control" value="17">
	    <input hidden="hidden" type="text" name="d[17][key]" class="form-control" value="17">
	      <div class="col-md-4"> <label>CARTA O MAPA DE RUTAS DE LA ZONA A NAVEGAR</label></div>
	      <div class="col-md-3"><textarea name="m17"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[17][value]" value="{{ old('properties[17][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d17"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[18][key]" class="form-control" value="18">
	    <input hidden="hidden" type="text" name="m[18][key]" class="form-control" value="18">
	    <input hidden="hidden" type="text" name="d[18][key]" class="form-control" value="18">
	      <div class="col-md-4"> <label>RIPA</label></div>
	      <div class="col-md-3"><textarea name="m18"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[18][value]" value="{{ old('properties[18][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d18"></textarea></div>
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
      	<input hidden="hidden" type="text" name="properties[19][key]" class="form-control" value="19">
      	<input hidden="hidden" type="text" name="m[19][key]" class="form-control" value="19">
	    <input hidden="hidden" type="text" name="d[19][key]" class="form-control" value="19">
	      <div class="col-md-4"> <label>ANTEOJOS PRISMATICOS</label></div>
	      <div class="col-md-3"><textarea name="m19"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[19][value]" value="{{ old('properties[19][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d19"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[20][key]" class="form-control" value="20">
	    <input hidden="hidden" type="text" name="m[20][key]" class="form-control" value="20">
	    <input hidden="hidden" type="text" name="d[20][key]" class="form-control" value="20">
	      <div class="col-md-4"> <label>TABLA PROCEDIMIENTOS RADIO TELEFÓNICOS </label></div>
	      <div class="col-md-3"><textarea name="m20"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[20][value]" value="{{ old('properties[20][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d20"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[21][key]" class="form-control" value="21">
	    <input hidden="hidden" type="text" name="m[21][key]" class="form-control" value="21">
	    <input hidden="hidden" type="text" name="d[21][key]" class="form-control" value="21">
	      <div class="col-md-4"> <label>BATERIAS EMERGENCIA</label></div>
	      <div class="col-md-3"><textarea name="m21"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[21][value]" value="{{ old('properties[21][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d21"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[22][key]" class="form-control" value="22">
	    <input hidden="hidden" type="text" name="m[22][key]" class="form-control" value="22">
	    <input hidden="hidden" type="text" name="d[22][key]" class="form-control" value="22">
	      <div class="col-md-4"> <label>EQUIPO VHF/HF/HANDIES</label></div>
	      <div class="col-md-3"><textarea name="m22"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[22][value]" value="{{ old('properties[22][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d22"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[23][key]" class="form-control" value="23">
	    <input hidden="hidden" type="text" name="m[23][key]" class="form-control" value="23">
	    <input hidden="hidden" type="text" name="d[23][key]" class="form-control" value="23">
	      <div class="col-md-4"> <label>BANDERAS DEL CÓDIGO INTERNACIONAL DE SEÑALES. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m23"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[23][value]" value="{{ old('properties[23][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d23"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[24][key]" class="form-control" value="24">
	    <input hidden="hidden" type="text" name="m[24][key]" class="form-control" value="24">
	    <input hidden="hidden" type="text" name="d[24][key]" class="form-control" value="24">
	      <div class="col-md-4"> <label>LINTERNA DE MANO (ESTANCA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m24"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[24][value]" value="{{ old('properties[24][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d24"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[25][key]" class="form-control" value="25">
	    <input hidden="hidden" type="text" name="m[25][key]" class="form-control" value="25">
	    <input hidden="hidden" type="text" name="d[25][key]" class="form-control" value="25">
	      <div class="col-md-4"> <label>MEGÁFONO PORTÁTIL. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m25"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[25][value]" value="{{ old('properties[25][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d25"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[26][key]" class="form-control" value="26">
	    <input hidden="hidden" type="text" name="m[26][key]" class="form-control" value="26">
	    <input hidden="hidden" type="text" name="d[26][key]" class="form-control" value="26">
	      <div class="col-md-4"> <label>SIRENA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m26"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[26][value]" value="{{ old('properties[26][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d26"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[27][key]" class="form-control" value="27">
	    <input hidden="hidden" type="text" name="m[27][key]" class="form-control" value="27">
	    <input hidden="hidden" type="text" name="d[27][key]" class="form-control" value="27">
	      <div class="col-md-4"> <label>REFLECTOR DE LUZ. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m27"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[27][value]" value="{{ old('properties[27][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d27"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[28][key]" class="form-control" value="28">
	    <input hidden="hidden" type="text" name="m[28][key]" class="form-control" value="28">
	    <input hidden="hidden" type="text" name="d[28][key]" class="form-control" value="28">
	      <div class="col-md-4"> <label>PABELLÓN NACIONAL. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m28"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[28][value]" value="{{ old('properties[28][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d28"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[29][key]" class="form-control" value="29">
	    <input hidden="hidden" type="text" name="m[29][key]" class="form-control" value="29">
	    <input hidden="hidden" type="text" name="d[29][key]" class="form-control" value="29">
	      <div class="col-md-4"> <label>PINTADO NOMBRE/MATRICULA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m29"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[29][value]" value="{{ old('properties[29][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d29"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[30][key]" class="form-control" value="30">
	    <input hidden="hidden" type="text" name="m[30][key]" class="form-control" value="30">
	    <input hidden="hidden" type="text" name="d[30][key]" class="form-control" value="30">
	      <div class="col-md-4"> <label>LUCES DE NAVEGACIÓN (BANDAS, TOPE, TODO HORIZONTE, REMOLQUE, POPA, ALCANCE, ETC). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m30"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[30][value]" value="{{ old('properties[30][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[30][value]" value="{{ old('properties[30][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d30"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[31][key]" class="form-control" value="31">
	    <input hidden="hidden" type="text" name="m[31][key]" class="form-control" value="31">
	    <input hidden="hidden" type="text" name="d[31][key]" class="form-control" value="31">
	      <div class="col-md-4"> <label>CHALECOS SALVAVIDAS ADULTO Y MENORES (CON EL NOMBRE DE LA EMBARCACIÓN). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m31"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[31][value]" value="{{ old('properties[31][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[31][value]" value="{{ old('properties[31][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d31"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[32][key]" class="form-control" value="32">
	    <input hidden="hidden" type="text" name="m[32][key]" class="form-control" value="32">
	    <input hidden="hidden" type="text" name="d[32][key]" class="form-control" value="32">
	      <div class="col-md-4"> <label>GUINDOLAS (CON EL NOMBRE DE LA EMBARCACIÓN). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m32"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[32][value]" value="{{ old('properties[32][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[32][value]" value="{{ old('properties[32][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d32"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[33][key]" class="form-control" value="33">
	    <input hidden="hidden" type="text" name="m[33][key]" class="form-control" value="33">
	    <input hidden="hidden" type="text" name="d[33][key]" class="form-control" value="33">
	      <div class="col-md-4"> <label>BENGALAS DE MANO. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m33"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[33][value]" value="{{ old('properties[33][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[33][value]" value="{{ old('properties[33][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d33"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[34][key]" class="form-control" value="34">
	    <input hidden="hidden" type="text" name="m[34][key]" class="form-control" value="34">
	    <input hidden="hidden" type="text" name="d[34][key]" class="form-control" value="34">
	      <div class="col-md-4"> <label>SEÑALECTICA DE SEGURIDAD (CUADROS RESTRICTIVOS). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m34"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[34][value]" value="{{ old('properties[34][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[34][value]" value="{{ old('properties[34][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d34"></textarea></div>
	    </div>
	    <br>
	    
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>ELEMENTOS DE LUCHA CONTRA INCENDIO Y DERRAME DE COMBUSTIBLE</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[35][key]" class="form-control" value="35">
	    <input hidden="hidden" type="text" name="m[35][key]" class="form-control" value="35">
	    <input hidden="hidden" type="text" name="d[35][key]" class="form-control" value="35">
	      <div class="col-md-4"> <label>BOMBA DE INCENDIO CON BOCAS DE INCENDIO Y VÁLVULAS (NO INFERIOR A 25 M3/H Y DEBEN PODER DESCARGAR COMO MÍNIMO 2 CHORROS DE AGUA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m35"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[35][value]" value="{{ old('properties[35][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[35][value]" value="{{ old('properties[35][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d35"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[36][key]" class="form-control" value="36">
	    <input hidden="hidden" type="text" name="m[36][key]" class="form-control" value="36">
	    <input hidden="hidden" type="text" name="d[36][key]" class="form-control" value="36">
	      <div class="col-md-4"> <label>BOMBA DE ACHIQUE. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m36"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[36][value]" value="{{ old('properties[36][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[36][value]" value="{{ old('properties[36][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d36"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[37][key]" class="form-control" value="37">
	    <input hidden="hidden" type="text" name="m[37][key]" class="form-control" value="37">
	    <input hidden="hidden" type="text" name="d[37][key]" class="form-control" value="37">
	      <div class="col-md-4"> <label>MANGUERAS DE INCENDIO COMPLETAS (CON PITÓN DOSIFICADOR DE AGUA A CHORRO Y NIEBLA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m37"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[37][value]" value="{{ old('properties[37][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[37][value]" value="{{ old('properties[37][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d37"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[38][key]" class="form-control" value="38">
	    <input hidden="hidden" type="text" name="m[38][key]" class="form-control" value="38">
	    <input hidden="hidden" type="text" name="d[38][key]" class="form-control" value="38">
	      <div class="col-md-4"> <label>EXTINTORES (DOS DE 12 KG, DOS DE 6 KG)-APROBADA SEGÚN NORMA NFPA 10. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m38"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[38][value]" value="{{ old('properties[38][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[38][value]" value="{{ old('properties[38][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d38"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[39][key]" class="form-control" value="39">
	    <input hidden="hidden" type="text" name="m[39][key]" class="form-control" value="39">
	    <input hidden="hidden" type="text" name="d[39][key]" class="form-control" value="39">
	      <div class="col-md-4"> <label>TABLERO CON MATERIAL DE LUCHA CONTRA INCENDIOS (BALDE, HACHA, EXTINTOR, BARRETA, CASCO, GUANTES DE CUERO, LENTES ANTIPARRA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m39"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[39][value]" value="{{ old('properties[39][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[39][value]" value="{{ old('properties[39][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d39"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[40][key]" class="form-control" value="40">
	    <input hidden="hidden" type="text" name="m[40][key]" class="form-control" value="40">
	    <input hidden="hidden" type="text" name="d[40][key]" class="form-control" value="40">
	      <div class="col-md-4"> <label>PLANILLA DE ROL DE ZAFARRANCHOS (RELACIÓN NOMINAL DEL PERSONAL CONSIGNADO EN CADA ROL DE ZAFARRANCHO). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m40"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[40][value]" value="{{ old('properties[40][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[40][value]" value="{{ old('properties[40][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d40"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[41][key]" class="form-control" value="41">
	    <input hidden="hidden" type="text" name="m[41][key]" class="form-control" value="41">
	    <input hidden="hidden" type="text" name="d[41][key]" class="form-control" value="41">
	      <div class="col-md-4"> <label>CUADRO ROL DE ZAFARRANCHO (TAREAS QUE DEBE CUMPLIR CADA MIEMBRO DE LA TRIPULACIÓN DURANTE LOS DISTINTOS ZAFARRANCHOS, PEGADO EN LA CATRERA O DORMITORIO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m41"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[41][value]" value="{{ old('properties[41][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[41][value]" value="{{ old('properties[41][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d41"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[42][key]" class="form-control" value="42">
	    <input hidden="hidden" type="text" name="m[42][key]" class="form-control" value="42">
	    <input hidden="hidden" type="text" name="d[42][key]" class="form-control" value="42">
	      <div class="col-md-4"> <label>PLANO DE LUCHA CONTRA INCENDIOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m42"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[42][value]" value="{{ old('properties[42][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[42][value]" value="{{ old('properties[42][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d42"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[43][key]" class="form-control" value="43">
	    <input hidden="hidden" type="text" name="m[43][key]" class="form-control" value="43">
	    <input hidden="hidden" type="text" name="d[43][key]" class="form-control" value="43">
	      <div class="col-md-4"> <label>SISTEMA DE DETECCION Y ALARMA CONTRA INCENDIOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m43"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[43][value]" value="{{ old('properties[43][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[43][value]" value="{{ old('properties[43][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d43"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[44][key]" class="form-control" value="44">
	    <input hidden="hidden" type="text" name="m[44][key]" class="form-control" value="44">
	    <input hidden="hidden" type="text" name="d[44][key]" class="form-control" value="44">
	      <div class="col-md-4"> <label>KIT PARA CONTROL DE DERRAMES (GUANTES DE NITRILO, ANTIPARRAS DE POLICARBONATO, CUBRE CALZADO, VERMICULITA, PALA Y ESCOBILLA, PAÑO O CHORIZO ABSORBENTE, BOLSA NEGRA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m44"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[44][value]" value="{{ old('properties[44][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[44][value]" value="{{ old('properties[44][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d44"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[45][key]" class="form-control" value="45">
	    <input hidden="hidden" type="text" name="m[45][key]" class="form-control" value="45">
	    <input hidden="hidden" type="text" name="d[45][key]" class="form-control" value="45">
	      <div class="col-md-4"> <label>RECIPIENTES PARA USO EN ACOPLES Y CONEXIONES DE MANGUERAS EN CARGA Y DESCARGA DE COMBUSTIBLE Y CAMBIO DE ACEITES Y GRASAS). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m45"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[45][value]" value="{{ old('properties[45][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[45][value]" value="{{ old('properties[45][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d45"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[46][key]" class="form-control" value="46">
	    <input hidden="hidden" type="text" name="m[46][key]" class="form-control" value="46">
	    <input hidden="hidden" type="text" name="d[46][key]" class="form-control" value="46">
	      <div class="col-md-4"> <label>CABLES Y CABOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m46"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[46][value]" value="{{ old('properties[46][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[46][value]" value="{{ old('properties[46][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d46"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[47][key]" class="form-control" value="47">
	    <input hidden="hidden" type="text" name="m[47][key]" class="form-control" value="47">
	    <input hidden="hidden" type="text" name="d[47][key]" class="form-control" value="47">
	      <div class="col-md-4"> <label>BITAS, CORNAMUSAS, PASACABOS, ETC. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m47"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[47][value]" value="{{ old('properties[47][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[47][value]" value="{{ old('properties[47][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d47"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[48][key]" class="form-control" value="48">
	    <input hidden="hidden" type="text" name="m[48][key]" class="form-control" value="48">
	    <input hidden="hidden" type="text" name="d[48][key]" class="form-control" value="48">
	      <div class="col-md-4"> <label>DEFENSAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m48"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[48][value]" value="{{ old('properties[48][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[48][value]" value="{{ old('properties[48][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d48"></textarea></div>
	    </div>
	    <br>
	</div>
	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
    <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
	<div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>MAQUINAS Y ELECTRICIDAD</b></h5></div>
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
	      <div class="col-md-4"> <label>FUNCIONAMIENTO ADECUADO DE LAS MAQUINAS PRINCIPALES (OBLIGATORIAMENTE DEBEN REALIZARSE PRUEBAS DE FUNCIONAMIENTO). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m49"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[49][value]" value="{{ old('properties[49][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[49][value]" value="{{ old('properties[49][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d49"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[50][key]" class="form-control" value="50">
	    <input hidden="hidden" type="text" name="m[50][key]" class="form-control" value="50">
	    <input hidden="hidden" type="text" name="d[50][key]" class="form-control" value="50">
	      <div class="col-md-4"> <label>FUNCIONAMIENTO DE LAS MAQUINAS AUXILIARES (OBLIGATORIAMENTE DEBEN EFECTUARSE PRUEBAS DE FUNCIONAMIENTO). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m50"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[50][value]" value="{{ old('properties[50][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[50][value]" value="{{ old('properties[50][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d50"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[51][key]" class="form-control" value="51">
	    <input hidden="hidden" type="text" name="m[51][key]" class="form-control" value="51">
	    <input hidden="hidden" type="text" name="d[51][key]" class="form-control" value="51">
	      <div class="col-md-4"> <label>CARGADOR DE BATERÍAS PARA SERVICIOS DE EMERGENCIA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m51"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[51][value]" value="{{ old('properties[51][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[51][value]" value="{{ old('properties[51][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d51"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[52][key]" class="form-control" value="52">
	    <input hidden="hidden" type="text" name="m[52][key]" class="form-control" value="52">
	    <input hidden="hidden" type="text" name="d[52][key]" class="form-control" value="52">
	      <div class="col-md-4"> <label>TABLERO CON HERRAMIENTAS Y PIEZAS DE RECAMBIO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m52"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[52][value]" value="{{ old('properties[52][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[52][value]" value="{{ old('properties[52][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d52"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[53][key]" class="form-control" value="53">
	    <input hidden="hidden" type="text" name="m[53][key]" class="form-control" value="53">
	    <input hidden="hidden" type="text" name="d[53][key]" class="form-control" value="53">
	      <div class="col-md-4"> <label>TABLERO DEL SISTEMA ELÉCTRICO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m53"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[53][value]" value="{{ old('properties[53][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[53][value]" value="{{ old('properties[53][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d53"></textarea></div>
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
	    <input hidden="hidden" type="text" name="properties[54][key]" class="form-control" value="54">
	    <input hidden="hidden" type="text" name="m[54][key]" class="form-control" value="54">
	    <input hidden="hidden" type="text" name="d[54][key]" class="form-control" value="54">
	      <div class="col-md-4"> <label>CUBIERTA PRINCIPAL Y PLANCHADA ANTIDESLIZANTE (DEBE ESTAR TRATADA CON PINTURA ANTIDESLIZANTE, PINTURA EPOXI TRATADA CON ARENA O SER DE ACERO CORRUGADO). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m54"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[54][value]" value="{{ old('properties[54][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[54][value]" value="{{ old('properties[54][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d54"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[55][key]" class="form-control" value="55">
	    <input hidden="hidden" type="text" name="m[55][key]" class="form-control" value="55">
	    <input hidden="hidden" type="text" name="d[55][key]" class="form-control" value="55">
	      <div class="col-md-4"> <label>CIERRES ESTANCOS (BURLETES-MANIGUETAS). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m55"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[55][value]" value="{{ old('properties[55][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[55][value]" value="{{ old('properties[55][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d55"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[56][key]" class="form-control" value="56">
	    <input hidden="hidden" type="text" name="m[56][key]" class="form-control" value="56">
	    <input hidden="hidden" type="text" name="d[56][key]" class="form-control" value="56">
	      <div class="col-md-4"> <label>CASCO LIBRE DE FISURAS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m56"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[56][value]" value="{{ old('properties[56][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[56][value]" value="{{ old('properties[56][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d56"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[57][key]" class="form-control" value="57">
	    <input hidden="hidden" type="text" name="m[57][key]" class="form-control" value="57">
	    <input hidden="hidden" type="text" name="d[57][key]" class="form-control" value="57">
	      <div class="col-md-4"> <label>CUADERNAS EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m57"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[57][value]" value="{{ old('properties[57][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[57][value]" value="{{ old('properties[57][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d57"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[58][key]" class="form-control" value="58">
	    <input hidden="hidden" type="text" name="m[58][key]" class="form-control" value="58">
	    <input hidden="hidden" type="text" name="d[58][key]" class="form-control" value="58">
	      <div class="col-md-4"> <label>MAMPARAS EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m58"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[58][value]" value="{{ old('properties[58][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[58][value]" value="{{ old('properties[58][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d58"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[59][key]" class="form-control" value="59">
	    <input hidden="hidden" type="text" name="m[59][key]" class="form-control" value="59">
	    <input hidden="hidden" type="text" name="d[59][key]" class="form-control" value="59">
	      <div class="col-md-4"> <label>OBRA VIVA EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m59"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[59][value]" value="{{ old('properties[59][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[59][value]" value="{{ old('properties[59][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d59"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[60][key]" class="form-control" value="60">
	    <input hidden="hidden" type="text" name="m[60][key]" class="form-control" value="60">
	    <input hidden="hidden" type="text" name="d[60][key]" class="form-control" value="60">
	      <div class="col-md-4"> <label>OBRA MUERTA EN BUEN ESTADO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m60"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[60][value]" value="{{ old('properties[60][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[60][value]" value="{{ old('properties[60][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d60"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[61][key]" class="form-control" value="61">
	    <input hidden="hidden" type="text" name="m[61][key]" class="form-control" value="61">
	    <input hidden="hidden" type="text" name="d[61][key]" class="form-control" value="61">
	      <div class="col-md-4"> <label>ESPESOR DE CHAPAS NO PRESENTA DESGASTE RIESGOSO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m61"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[61][value]" value="{{ old('properties[61][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[61][value]" value="{{ old('properties[61][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d61"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[62][key]" class="form-control" value="62">
	    <input hidden="hidden" type="text" name="m[62][key]" class="form-control" value="62">
	    <input hidden="hidden" type="text" name="d[62][key]" class="form-control" value="62">
	      <div class="col-md-4"> <label>PROTECCIÓN PERSONAL (ANDILLAS-ESCALERAS-ETC). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m62"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[62][value]" value="{{ old('properties[62][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[62][value]" value="{{ old('properties[62][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d62"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[63][key]" class="form-control" value="63">
	    <input hidden="hidden" type="text" name="m[63][key]" class="form-control" value="63">
	    <input hidden="hidden" type="text" name="d[63][key]" class="form-control" value="63">
	      <div class="col-md-4"> <label>TABLERO CON MATERIAL DE CONTROL DE AVERIAS (TAPONES CONICOS O PIRAMIDALES, TELA, CUÑAS DE MADERA, PLANCHAS FINAS DE ACERO O ALUMINIO, PERNOS, CANCAMOS, CAJAS DE MADERA O METALICAS, MATERIAL DE SOLDADURA). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m63"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[63][value]" value="{{ old('properties[63][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[63][value]" value="{{ old('properties[63][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d63"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[64][key]" class="form-control" value="64">
	    <input hidden="hidden" type="text" name="m[64][key]" class="form-control" value="64">
	    <input hidden="hidden" type="text" name="d[64][key]" class="form-control" value="64">
	      <div class="col-md-4"> <label>BOTE AUXILIAR. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m64"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[64][value]" value="{{ old('properties[64][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[64][value]" value="{{ old('properties[64][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d64"></textarea></div>
	    </div>
	    <br>


	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>PREVENCIÓN DE LA CONTAMINACIÓNL</b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[65][key]" class="form-control" value="65">
	    <input hidden="hidden" type="text" name="m[65][key]" class="form-control" value="65">
	    <input hidden="hidden" type="text" name="d[65][key]" class="form-control" value="65">
	      <div class="col-md-4"> <label>BOTE AUXILIAR. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m65"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[65][value]" value="{{ old('properties[65][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[65][value]" value="{{ old('properties[65][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d65"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[66][key]" class="form-control" value="66">
	    <input hidden="hidden" type="text" name="m[66][key]" class="form-control" value="66">
	    <input hidden="hidden" type="text" name="d[66][key]" class="form-control" value="66">
	      <div class="col-md-4"> <label>BASUREROS POR CLASIFICACIÓN (ORGÁNICOS, INORGÁNICOS, PLÁSTICOS, VIDRIOS, PAPEL, METAL, PILAS/BATERIAS). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m66"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[66][value]" value="{{ old('properties[66][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[66][value]" value="{{ old('properties[66][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d66"></textarea></div>
	    </div>
	    <br>

	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>SEGURIDAD DEL PERSONAL, HIGIENE Y SALUD DE LA TRIPULACIÓN </b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[67][key]" class="form-control" value="67">
	    <input hidden="hidden" type="text" name="m[67][key]" class="form-control" value="67">
	    <input hidden="hidden" type="text" name="d[67][key]" class="form-control" value="67">
	      <div class="col-md-4"> <label>EQUIPO DE PROTECCIÓN INDIVIDUAL (EPI) PARA LA TRIPULACIÓN. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m67"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[67][value]" value="{{ old('properties[67][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[67][value]" value="{{ old('properties[67][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d67"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[68][key]" class="form-control" value="68">
	    <input hidden="hidden" type="text" name="m[68][key]" class="form-control" value="68">
	    <input hidden="hidden" type="text" name="d[68][key]" class="form-control" value="68">
	      <div class="col-md-4"> <label>CERTIFICADO MEDICO DE LA TRIPULACIÓN. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m68"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[68][value]" value="{{ old('properties[68][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[68][value]" value="{{ old('properties[68][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d68"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[69][key]" class="form-control" value="69">
	    <input hidden="hidden" type="text" name="m[69][key]" class="form-control" value="69">
	    <input hidden="hidden" type="text" name="d[69][key]" class="form-control" value="69">
	      <div class="col-md-4"> <label>BOTIQUIN DE PRIMEROS AUXILIOS (PERSONAL CAPACITADO). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m69"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[69][value]" value="{{ old('properties[69][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[69][value]" value="{{ old('properties[69][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d69"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[70][key]" class="form-control" value="70">
	    <input hidden="hidden" type="text" name="m[70][key]" class="form-control" value="70">
	    <input hidden="hidden" type="text" name="d[70][key]" class="form-control" value="70">
	      <div class="col-md-4"> <label>ROPA DE TRABAJO DE LA TRIPULACIÓN (ALGODÓN O MATERIAL IGNIFUGO). (EO)</label></div>
	      <div class="col-md-3"><textarea name="m70"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[70][value]" value="{{ old('properties[70][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[70][value]" value="{{ old('properties[70][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d70"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[71][key]" class="form-control" value="71">
	    <input hidden="hidden" type="text" name="m[71][key]" class="form-control" value="71">
	    <input hidden="hidden" type="text" name="d[71][key]" class="form-control" value="71">
	      <div class="col-md-4"> <label>PROCEDIMIENTOS PARA EVACUACION DE HERIDOS. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m71"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[71][value]" value="{{ old('properties[71][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[71][value]" value="{{ old('properties[71][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d71"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[72][key]" class="form-control" value="72">
	    <input hidden="hidden" type="text" name="m[72][key]" class="form-control" value="72">
	    <input hidden="hidden" type="text" name="d[72][key]" class="form-control" value="72">
	      <div class="col-md-4"> <label>CERTIFICADO DE VACUNACION DE FIEBRE AMARILLA Y TETANOS DE LA TRIPULACIÓN. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m72"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[72][value]" value="{{ old('properties[72][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[72][value]" value="{{ old('properties[72][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d72"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[73][key]" class="form-control" value="73">
	    <input hidden="hidden" type="text" name="m[73][key]" class="form-control" value="73">
	    <input hidden="hidden" type="text" name="d[73][key]" class="form-control" value="73">
	      <div class="col-md-4"> <label>TANQUE DE AGUA POTABLE PARA CONSUMO. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m73"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[73][value]" value="{{ old('properties[73][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[73][value]" value="{{ old('properties[73][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d73"></textarea></div>
	    </div>
	    <br>

	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
</fieldset>

<fieldset >
  <div class="container col-md-12">
      <div class="row">
        <div class="col-md-4"><h5><b>OTROS </b></h5></div>
        <div class="col-md-3"><h5><b>MEDIDA ADOPTADA</b></h5></div>
        <div class="col-md-1"><h5><b>SÍ</b></h5></div>
        <div class="col-md-1"><h5><b>NO</b></h5></div>
        <div class="col-md-3"><h5><b>OBSERVACIONES</b></h5></div>
      </div>
    </div>
    <hr>
  	<div class="container col-md-12">
	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[74][key]" class="form-control" value="74">
	    <input hidden="hidden" type="text" name="m[74][key]" class="form-control" value="74">
	    <input hidden="hidden" type="text" name="d[74][key]" class="form-control" value="74">
	      <div class="col-md-4"> <label>CINTA TRANSPORTADORA. (ER)</label></div>
	      <div class="col-md-3"><textarea name="m74"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[74][value]" value="{{ old('properties[74][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[74][value]" value="{{ old('properties[74][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d74"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[75][key]" class="form-control" value="75">
	    <input hidden="hidden" type="text" name="m[75][key]" class="form-control" value="75">
	    <input hidden="hidden" type="text" name="d[75][key]" class="form-control" value="75">
	      <div class="col-md-4"> <label>DOCUMENTACIÓN LEGAL DE LA EMPRESA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m75"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[75][value]" value="{{ old('properties[75][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[75][value]" value="{{ old('properties[75][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d75"></textarea></div>
	    </div>
	    <br>

	    <div class="row">
	    <input hidden="hidden" type="text" name="properties[76][key]" class="form-control" value="76">
	    <input hidden="hidden" type="text" name="m[76][key]" class="form-control" value="76">
	    <input hidden="hidden" type="text" name="d[76][key]" class="form-control" value="76">
	      <div class="col-md-4"> <label>DOCUMENTACIÓN LEGAL DE LA COOPERATIVA. (EO)</label></div>
	      <div class="col-md-3"><textarea name="m76"></textarea></div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[76][value]" value="{{ old('properties[76][value]', 'SI') }}" required>
	      </div>
	      <div class="col-md-1">
	        <input type="radio" name="properties[76][value]" value="{{ old('properties[76][value]', 'NO') }}" required>
	      </div>
	      <div class="col-md-3"><textarea  name="d76"></textarea></div>
	    </div>
	    <br>

	</div>
  	<input type="button" name="previous" class="previous btn btn-default" value="Previo" />
  	<input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
</fieldset>