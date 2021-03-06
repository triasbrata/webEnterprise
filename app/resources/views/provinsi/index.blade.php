@extends('template.index')
@section('box-header')
    <h4>Manajement Provinsi</h4>
    <div class="pull-right">
        <a href="{{url('provinsi/create')}}" class="btn btn-primary btn-sm">Tambah Provinsi</a>
    </div>
@stop
@section('box-content')
    <table class="table table-stripped" id="datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Provinsi</th>
                <th>Aksi</th>
            </tr>
            <?php $x=1; ?>
            @foreach ($data as $provinsi)
                <tr>
                    <td>
                        {{$x++}}
                    </td>
                    <td>
                        {{$provinsi->label}}
                    </td>
                    <td>
                        <form action="{{url('provinsi/'.$provinsi->id)}}" method="POST">
                            <input name="_method" type="hidden" value="DELETE">
                            <div class="btn-group">
                                <a class="btn btn-flat btn-info btn-sm" href="{{url('provinsi/'.$provinsi->id.'/edit')}}"><i class="fa fa-pencil"></i> Ubah</a>
                                <button type="submit" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-eraser"></i> Hapus</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
@stop

