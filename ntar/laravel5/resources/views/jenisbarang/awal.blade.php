@extends('welcome')
@section('container')
	<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Seluruh Data Jenis Barang</strong>
        <a href="{{url('jenisbarang/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Jenis Barang</a>
        <div class="clearfix"></div>
    </div>
	<table class="table">
		<thead>
			<tr>
				
				<th></th>
				<th>No ID Jenis Barang</th>
				<th>Nama Jenis Barang</th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $Jenisbarang)
			<tr>
				<!-- <td>{{ $x++}}</td> -->
				<td></td>
				<td>{{ $jenisbarang->kd_jenis_barang or 'id Kosong' }}</td>
				<td>{{ $jenisbarang->nama_jenis_barang or 'Nama jenis barang Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('Jenisbarang/edit/'.$Jenisbarang->kd_jenis_barang)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('Jenisbarang/lihat/'.$Jenisbarang->kd_jenis_barang)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('Jenisbarang/hapus/'.$Jenisbarang->kd_jenis_barang)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
