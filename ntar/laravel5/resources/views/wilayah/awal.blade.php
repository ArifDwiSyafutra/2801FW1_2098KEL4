@extends('welcome')
@section('container')
	<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Seluruh Data wilayah</strong>
        <a href="{{url('wilayah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> wilayah</a>
        <div class="clearfix"></div>
    </div>
	<table class="table">
		<thead>
			<tr>
				
				<th></th>
				<th>No ID wilayah</th>
				<th>Nama wilayah</th>
				<th>Harga</th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $wilayah)
			<tr>
				<!-- <td>{{ $x++}}</td> -->
				<td></td>
				<td>{{ $wilayah->id or 'id Kosong' }}</td>
				<td>{{ $wilayah->nama_wilayah or 'Nama wilayah Kosong' }}</td>
				<td>{{ $wilayah->harga or 'Harga Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('wilayah/edit/'.$wilayah->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('wilayah/lihat/'.$wilayah->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('wilayah/hapus/'.$wilayah->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
