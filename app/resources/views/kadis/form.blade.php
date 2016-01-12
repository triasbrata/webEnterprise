@inject('kabupaten','App\Kabupaten')
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="kabupaten">Jenis Kelamin</label></span>
		<select  name="kabupaten"  id="kabupaten"class="form-control">
			@foreach (['LAKI-LAKI','PEREMPUAN'] as $element)
				<option
				@if (isset($data->kabupaten) && $element == $data->kabupaten)
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
		<span class="input-group-addon"><label for="nim">NIM Kepala Desa</label></span>
		<input type="text" value="{{!isset($data->nim)? '':$data->nim}}"name="nim" class="form-control">
	</div>
</div>
<div class="form-group col-md-12">
	<div class="input-group">
		<span class="input-group-addon"><label for="nama">Nama Kepala Desa</label></span>
		<input type="text" value="{{!isset($data->nama)? '':$data->nama}}"name="nama" class="form-control">
	</div>
</div>