@extends('welcome')
@section('container')
	<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Seluruh Data jenis pengiriman</strong>
        <a href="{{url('jenis_pengiriman/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> jenis pengiriman</a>
        <div class="clearfix"></div>
    </div>
	<table class="table">
		<thead>
			<tr>
				
				<th></th>
				<th>No ID jenis pengiriman</th>
				<th>Nama jenis pengiriman</th>
				<th>Harga </th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $jenis_pengiriman)
			<tr>
				<!-- <td>{{ $x++}}</td> -->
				<td></td>
				<td>{{ $jenis_pengiriman->id or 'id Kosong' }}</td>
				<td>{{ $jenis_pengiriman->nama_jp or 'Nama Kosong' }}</td>
				<td>{{ $jenis_pengiriman->harga or 'Harga Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('jenis_pengiriman/edit/'.$jenis_pengiriman->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('jenis_pengiriman/lihat/'.$jenis_pengiriman->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('jenis_pengiriman/hapus/'.$jenis_pengiriman->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
