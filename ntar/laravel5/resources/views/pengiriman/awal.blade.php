@extends('welcome')
@section('container')
	<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Seluruh Data Pengiriman</strong>
        <a href="{{url('pengiriman/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Pengiriman</a>
        <div class="clearfix"></div>
    </div>
	<table class="table">
		<thead>
			<tr>
				
				<th></th>
				<th>No ID pengiriman</th>
				<th>Nama pengirim</th>
				<th>No Telp pengirim</th>
				<th>Nama Penerima</th>
				<th>No Telp Penerima</th>
				<th>Alamat Penerima</th>
				<th>Total Biaya</th>
				
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaPengiriman as $pengiriman)
			<tr>
				<!-- <td>{{ $x++}}</td> -->
				<td></td>
				<td>{{ $pengiriman->id or 'id Kosong' }}</td>
				<td>{{ $pengiriman->nama_pengirim or 'Nama Kosong' }}</td>
				<td>{{ $pengiriman->no_telp_pengirim or 'No Telp Kosong' }}</td>
				<td>{{ $pengiriman->nama_penerima or 'Nama Penerima Kosong' }}</td>
				<td>{{ $pengiriman->no_telp_penerima  or 'No Telp Penerima Kosong' }}</td>
				<td>{{ $pengiriman->alamat_penerima  or 'Alamat Penerima Kosong' }}</td>
				<td>{{ $pengiriman->total_biaya  or 'Total Biaya kosong' }}</td>
				
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('pengiriman/edit/'.$pengiriman->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('pengiriman/lihat/'.$pengiriman->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('pengiriman/hapus/'.$pengiriman->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
