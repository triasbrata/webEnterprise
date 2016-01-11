@extends('template')
@section('content')
<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Data Kabupaten</h3>
        </div>
        <div class="box-body">
            <?php $x=1; ?>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama Provinsi</th>
                    <th>Aksi</th>
                </tr>
                @foreach (['test'] as $list)
                    <tr>
                        <td>{{$x++}}</td>
                        <td></td>
                        <td>
                            <div class="pull-right">
                                <form class="no-margin form-ajax" accept-charset="UTF-8" action="{{url('provinsi')}}/1" method="POST">
                                    <input type="hidden" value="DELETE" name="_method">
                                    <div class="btn-group">
                                        <a class="btn btn-flat btn-warning show-link ajax-link btn-sm" href="{{url('provinsi')}}/1"><i class="fa fa-paste"></i> Lihat</a>
                                        <a class="btn btn-flat ajax-link btn-info btn-sm" href="{{url('provinsi')}}/1/edit"><i class="fa fa-pencil"></i> Ubah</a>
                                        <button type="submit" class="btn btn-danger btn-flat btn-sm"><i class="fa fa-eraser"></i> Hapus</button>
                                    </div>
                                </form>   
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop