@extends('welcome')
@section('container')
	<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Seluruh Data Kurir</strong>
        <a href="{{url('kurir/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i> Kurir</a>
        <div class="clearfix"></div>
    </div>
	<table class="table">
		<thead>
			<tr>
				
				<th></th>
				<th>No ID kurir</th>
				<th>Nama kurir</th>
				<th>Aksi</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1; ?>
			@foreach ($data as $kurir)
			<tr>
				<!-- <td>{{ $x++}}</td> -->
				<td></td>
				<td>{{ $kurir->id or 'id Kosong' }}</td>
				<td>{{ $kurir->nama_kurir or 'Nama Kosong' }}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('kurir/edit/'.$kurir->id)}}" class="btn btn-warning btn-xs" data-toogle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('kurir/lihat/'.$kurir->id)}}" class="btn btn-info btn-xs" data-toogle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('kurir/hapus/'.$kurir->id)}}" class="btn btn-danger btn-xs" data-toogle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop
