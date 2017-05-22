@extends('welcome')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('pengiriman') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data pengiriman</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID</td>
			<td>:</td>
			<td>{{ $pengiriman->nama_pengirim }}</td>
		</tr>
		<!-- <tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $pengiriman->admin->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $pengiriman->admin->password }}</td>
		</tr> -->

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pengiriman->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$pengiriman->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
<!-- 
$pengiriman->nama = $input->nama;
    	$pengiriman->nip = $input->nip;
    	$pengiriman->alamat = $input->alamat;
    	$pengiriman->pengguna_id = $input->pengguna_id; -->