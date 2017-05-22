@extends('welcome')
@section('container')
	<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Seluruh Data Jenis Packaging</strong>
        <a href="{{url('jenispackaging/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Jenis Packaging</a>
        <div class="clearfix"></div>
    </div>
	<table class="table">
		<thead>
			<tr>
				
				<th></th>
				<th>No ID Jenis Packaging</th>
				<th>Nama Jenis Packaging</th>
				<th>Harga</th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $JenisPackaging)
			<tr>
				<!-- <td>{{ $x++}}</td> -->
				<td></td>
				<td>{{ $JenisPackaging->kd_jenis_packaging or 'id Kosong' }}</td>
				<td>{{ $JenisPackaging->nama_jenis_packaging or 'Nama Jenis Packaging Kosong' }}</td>
				<td>{{ $JenisPackaging->harga or 'Harga Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('JenisPackaging/edit/'.$JenisPackaging->kd_jenis_packaging)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('JenisPackaging/lihat/'.$JenisPackaging->kd_jenis_packaging)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('JenisPackaging/hapus/'.$JenisPackaging->kd_jenis_packaging)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
