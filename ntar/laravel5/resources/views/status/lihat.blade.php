@extends('welcome')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('status') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data status</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID</td>
			<td>:</td>
			<td>{{ $status->nama_status }}</td>
		</tr>
	
		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$status->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$status->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
<!-- 
$status->nama = $input->nama;
    	$status->nip = $input->nip;
    	$status->alamat = $input->alamat;
    	$status->pengguna_id = $input->pengguna_id; -->