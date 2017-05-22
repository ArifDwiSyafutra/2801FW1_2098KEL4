@extends('welcome')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('statuspengiriman') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data statuspengiriman</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID Status Pengiriman</td>
			<td>:</td>
			<td>{{ $statuspengiriman->id }}</td>
		</tr>
		<tr>
			<td>ID Pengiriman</td>
			<td>:</td>
			<td>{{ $statuspengiriman->pengiriman_id }}</td>
		</tr>
		<tr>
			<td>ID Status</td>
			<td>:</td>
			<td>{{ $statuspengiriman->status_id }}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td>{{ $statuspengiriman->pengguna->username }}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td>{{ $statuspengiriman->pengguna->password }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$statuspengiriman->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$statuspengiriman->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
