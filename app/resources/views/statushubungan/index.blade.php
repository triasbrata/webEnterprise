@extends('template.index')
@section('box-header')
    <h4>Manajement Status Hubungan</h4>
    <div class="pull-right">
        <a href="{{url('statushubungan/create')}}" class="btn btn-primary btn-sm">Tambah Status</a>
    </div>
@stop
@section('box-content')
    <table class="table table-stripped" id="datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <?php $x=1; ?>
            @foreach ($data as $statushubungan)
                <tr>
                    <td>
                        {{$x++}}
                    </td>
                    <td>
                        {{$statushubungan->title}}
                    </td>
                    <td>
                        <form action="{{url('statushubungan/'.$statushubungan->id)}}" method="POST">
                            <input name="_method" type="hidden" value="DELETE">
                            <div class="btn-group">
                                <a class="btn btn-flat btn-info btn-sm" href="{{url('statushubungan/'.$statushubungan->id.'/edit')}}"><i class="fa fa-pencil"></i> Ubah</a>
                                <button type="submit" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-eraser"></i> Hapus</button>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </thead>
    </table>
@stop

