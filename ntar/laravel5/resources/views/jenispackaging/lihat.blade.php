@extends('welcome')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jenispackaging') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data jenis packaging</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID</td>
			<td>:</td>
			<td>{{ $jenispackaging->nama_jenis_packaging }}</td>
		</tr>
		<tr>
			<td>ID</td>
			<td>:</td>
			<td>{{ $jenispackaging->harga }}</td>
		</tr>
		
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jenispackaging->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jenispackaging->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
<!-- 
$jenispackaging->nama = $input->nama;
    	$jenispackaging->nip = $input->nip;
    	$jenispackaging->alamat = $input->alamat;
    	$jenispackaging->pengguna_id = $input->pengguna_id; -->