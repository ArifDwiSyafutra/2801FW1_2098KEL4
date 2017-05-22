@extends('welcome')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('kurir') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data Kurir</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td>{{ $kurir->nama_kurir }}</td>
		</tr>
		<!-- <tr>
			<td>NIM</td>
			<td>:</td>
			<td>{{ $kurir->nim }}</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>{{ $kurir->alamat }}</td>
		</tr> -->

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$kurir->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$kurir->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
