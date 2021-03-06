@inject('agamas','App\Agama')
@inject('pekerjaan','App\Pekerjaan')
@inject('pendidikan','App\Pendidikan')
@inject('pendidikan','App\Pendidikan')
@inject('status_perkawinan','App\StatusPerkawinan')
@inject('status_keluarga','App\StatusHubungan')
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="nik">NIK</label></span>
		<input type="text" value="{{!isset($data->nik)? '':$data->nik}}" name="nik"  id="nik" class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="nama">Nama Penduduk</label></span>
		<input type="text" value="{{!isset($data->nama)? '':$data->nama}}" name="nama"  id="nama"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="jenis_kelamin">Jenis Kelamin</label></span>
		<select  name="jenis_kelamin"  id="jenis_kelamin"class="form-control">
			@foreach (['LAKI-LAKI','PEREMPUAN'] as $element)
				<option
				@if (isset($data->jenis_kelamin) && $element == $data->jenis_kelamin)
					selected
				@endif
				>
					{{$element}}
				</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="tempat_lahir">Tempat Lahir</label></span>
		<input type="text" value="{{!isset($data->tempat_lahir)? '':$data->tempat_lahir}}" name="tempat_lahir"  id="tempat_lahir"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="tanggal_lahir">Tanggal Lahir</label></span>
		<input type="text" value="{{!isset($data->tanggal_lahir)? '':$data->tanggal_lahir}}" name="tanggal_lahir"  id="tanggal_lahir"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="agama_id">Agama</label></span>
		<select  name="agama_id"  id="agama_id"class="form-control">
			@foreach ( $agamas->lists('title','id') as $key => $value)
				<option
				@if (isset($data->agama) && $key == $data->agama->id)
					selected
				@endif
				value="{{$key}}"
				>
					{{$value}}
				</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="pekerjaan_id">Pekerjaan</label></span>
		<select  name="pekerjaan_id"  id="pekerjaan_id"class="form-control">
			@foreach ( $pekerjaan->lists('title','id') as $key => $value)
				<option
				@if (isset($data->pekerjaan) && $key == $data->pekerjaan->id)
					selected
				@endif
				value="{{$key}}"
				>
					{{$value}}
				</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="pendidikan_id">Pendidikan</label></span>
		<select  name="pendidikan_id"  id="pendidikan_id"class="form-control">
			@foreach ( $pendidikan->lists('title','id') as $key => $value)
				<option
				@if (isset($data->pendidikan) && $key == $data->pendidikan->id)
					selected
				@endif
				value="{{$key}}"
				>
					{{$value}}
				</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="status_perkawinan_id">Status Perkawinan</label></span>
		<select  name="status_perkawinan_id"  id="status_perkawinan_id"class="form-control">
			@foreach ( $status_perkawinan->lists('title','id') as $key => $value)
				<option
				@if (isset($data->status_perkawinan) && $key == $data->status_perkawinan->id)
					selected
				@endif
				value="{{$key}}"
				>
					{{$value}}
				</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="status_keluarga_id">Status Dalam Keluarga</label></span>
		<select  name="status_keluarga_id"  id="status_keluarga_id"class="form-control">
			@foreach ( $status_keluarga->lists('title','id') as $key => $value)
				<option
				@if (isset($data->status_keluarga) && $key == $data->status_keluarga->id)
					selected
				@endif
				value="{{$key}}"
				>
					{{$value}}
				</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="kewarganegaraan">Status Kewarganegaraan</label></span>
		<select  name="kewarganegaraan"  id="kewarganegaraan"class="form-control">
			@foreach ( ['WNI','WNA'] as $key)
				<option
				@if (isset($data->kewarganegaraan) && $key == $data->kewarganegaraan)
					selected
				@endif
				value="{{$key}}"
				>
					{{$key}}
				</option>
			@endforeach
		</select>
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="no_pasport">No. Pasport</label></span>
		<input type="text" value="{{!isset($data->no_pasport)? '':$data->no_pasport}}" name="no_pasport"  id="no_pasport"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="no_kitas">No. KITAS</label></span>
		<input type="text" value="{{!isset($data->no_kitas)? '':$data->no_kitas}}" name="no_kitas"  id="no_kitas"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="ayah">Nama Ayah</label></span>
		<input type="text" value="{{!isset($data->ayah)? '':$data->ayah}}" name="ayah"  id="ayah"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="ibu">Nama Ibu</label></span>
		<input type="text" value="{{!isset($data->ibu)? '':$data->ibu}}" name="ibu"  id="ibu"class="form-control">
	</div>
</div>
