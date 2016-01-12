@inject('kepala_keluarga','App\Personal')
@inject('kelurahan','App\Kelurahan')
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="no_kk">No. Kartu Keluarga</label></span>
		<input type="text" value="{{!isset($data->no_kk)? '':$data->no_kk}}" name="no_kk"  id="no_kk"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="kepala_keluarga_id">Kepala Keluarga</label></span>
		<select  name="kepala_keluarga_id"  id="kepala_keluarga_id"class="form-control">
			@foreach ( $kepala_keluarga->lists('nama','id') as $key => $value)
				<option
				@if (isset($data->kepala_keluarga) && $key == $data->kepala_keluarga->id)
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
		<span class="input-group-addon"><label for="kelurahan_id">Kelurahan</label></span>
		<select  name="kelurahan_id"  id="kelurahan_id"class="form-control">
			@foreach ( $kelurahan->lists('label','id') as $key => $value)
				<option
				@if (isset($data->kelurahan) && $key == $data->kelurahan->id)
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
		<span class="input-group-addon"><label for="alamat">Alamat</label></span>
		<input type="text" value="{{!isset($data->alamat)? '':$data->alamat}}" name="alamat"  id="alamat"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="rt">RT</label></span>
		<input type="text" value="{{!isset($data->rt)? '':$data->rt}}" name="rt"  id="rt"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="rw">RW</label></span>
		<input type="text" value="{{!isset($data->rw)? '':$data->rw}}" name="rw"  id="rw"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="kd_pos">Kode Pos</label></span>
		<input type="text" value="{{!isset($data->kd_pos)? '':$data->kd_pos}}" name="kd_pos"  id="kd_pos"class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="tgl_keluar">Tanggal Keluar</label></span>
		<input type="text" value="{{!isset($data->tgl_keluar)? '':$data->tgl_keluar}}" name="tgl_keluar"  id="tgl_keluar"class="form-control">
	</div>
</div>


