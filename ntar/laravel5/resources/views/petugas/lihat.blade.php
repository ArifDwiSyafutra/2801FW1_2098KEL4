@extends('welcome')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('petugas') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data petugas</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID</td>
			<td>:</td>
			<td>{{ $petugas->nama_petugas }}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$petugas->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$petugas->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
<!-- 
$petugas->nama = $input->nama;
    	$petugas->nip = $input->nip;
    	$petugas->alamat = $input->alamat;
    	$petugas->pengguna_id = $input->pengguna_id; -->