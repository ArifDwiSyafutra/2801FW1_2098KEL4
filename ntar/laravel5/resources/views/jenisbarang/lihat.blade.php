@extends('welcome')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{ url('jenisbarang') }}"><i style+"color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a> Detail Data jenis arang</strong>		
	</div>
	<table class="table">
		<tr>
			<td>ID</td>
			<td>:</td>
			<td>{{ $jenisbarang->nama_jenis_barang }}</td>
		</tr>
		

		<tr>
			<td class="col-xs-4">Dibuat tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jenisbarang->created_at}}</td>
		</tr>
		<tr>
			<td class="col-xs-4">Diupdate tanggal</td>
			<td class="col-cs-1">:</td>
			<td>{{$jenisbarang->updated_at}}</td>
		</tr>
	</table>
</div>
@stop
<!-- 
$jenisbarang->nama = $input->nama;
    	$jenisbarang->nip = $input->nip;
    	$jenisbarang->alamat = $input->alamat;
    	$jenisbarang->pengguna_id = $input->pengguna_id; -->