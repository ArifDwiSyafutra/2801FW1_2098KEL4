@extends('welcome')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('wilayah') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data wilayah</strong>		
	</div>
	<table class="table">
		<tr>
			<td>Nama Wilayah</td>
			<td>:</td>
			<td>{{ $wilayah->nama_wilayah }}</td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>{{ $wilayah->harga }}</td>
		</tr>

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$wilayah->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$wilayah->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
<!-- 
$wilayah->nama = $input->nama;
    	$wilayah->nip = $input->nip;
    	$wilayah->alamat = $input->alamat;
    	$wilayah->pengguna_id = $input->pengguna_id; -->