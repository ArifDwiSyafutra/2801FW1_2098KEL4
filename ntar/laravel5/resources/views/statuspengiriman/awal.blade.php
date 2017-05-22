@extends('welcome')
@section('container')
	<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Seluruh Data statuspengiriman</strong>
        <a href="{{url('statuspengiriman/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> statuspengiriman</a>
        <div class="clearfix"></div>
    </div>
	<table class="table">
		<thead>
			<tr>
				
				<th></th>
				<th>No ID status pengiriman</th>
				<th>No ID pengiriman</th>
				<th>No ID status</th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($semuaStatusPengiriman as $statuspengiriman)
			<tr>
				<!-- <td>{{ $x++}}</td> -->
				<td></td>
				<td>{{ $statuspengiriman->id or 'id Kosong' }}</td>
				<td>{{ $statuspengiriman->pengiriman_id or 'Id Pengiriman Kosong' }}</td>
				<td>{{ $statuspengiriman->status_id or 'Id Status Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('statuspengiriman/edit/'.$statuspengiriman->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('statuspengiriman/lihat/'.$statuspengiriman->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('statuspengiriman/hapus/'.$statuspengiriman->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
