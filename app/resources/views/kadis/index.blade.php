@extends('template.index')
@section('box-header')
    <h4>Manajement Kepala Dinas</h4>
    <div class="pull-right">
        <a href="{{url('kepaladinas/create')}}" class="btn btn-primary btn-sm">Tambah Kepala Dinas</a>
    </div>
@stop
@section('box-content')
    <table class="table table-stripped" id="datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kepala Dinas</th>
                <th>NIP Kepala Dinas</th>
                <th>Dinas Kabupaten/Kota</th>
                <th>Aksi</th>
            </tr>
            <?php $x=1; ?>
            @foreach ($data as $kepaladinas)
                <tr>
                    <td>
                        {{$x++}}
                    </td>
                    <td> {{$kepaladinas->nama}} </td>
                    <td> {{$kepaladinas->nim}} </td>
                    <td> {{$kepaladinas->kabupaten->label}} </td>
                    <td>
                        <form action="{{url('kepaladinas/'.$kepaladinas->id)}}" method="POST">
                            <input name="_method" type="hidden" value="DELETE">
                            <div class="btn-group">
                                <a class="btn btn-flat btn-info btn-sm" href="{{url('kepaladinas/'.$kepaladinas->id.'/edit')}}"><i class="fa fa-pencil"></i> Ubah</a>
                                <button type="submit" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-eraser"></i> Hapus</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
@stop

