@extends('welcome')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jenis_pengiriman') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data jenis pengiriman</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID</td>
			<td>:</td>
			<td>{{ $jenis_pengiriman->nama_jenis_pengiriman }}</td>
		</tr>
		

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jenis_pengiriman->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jenis_pengiriman->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
<!-- 
$jenis_pengiriman->nama = $input->nama;
    	$jenis_pengiriman->nip = $input->nip;
    	$jenis_pengiriman->alamat = $input->alamat;
    	$jenis_pengiriman->pengguna_id = $input->pengguna_id; -->