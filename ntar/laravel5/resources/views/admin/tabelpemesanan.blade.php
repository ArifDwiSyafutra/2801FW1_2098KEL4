@extends('admin.adminlayout')
@section('title')Tabel Pemesanan
@stop
@section('styletambahan')
<!-- Extra CSS Libraries Start -->
                 <link href="{{asset("assets/libs/jquery-datatables/css/dataTables.bootstrap.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/css/style.css")}}" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="{{asset("assets/css/style-responsive.css")}}" rel="stylesheet" />
        <link href="{{asset("assets/libs/bootstrap-select/bootstrap-select.min.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/libs/summernote/summernote.css")}}" rel="stylesheet" type="text/css" />
                <link href="{{asset("assets/css/style.css")}}" rel="stylesheet" type="text/css" />
        @stop
@section('body')


				<div class="row">
				
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header">
								<h2><strong>Tabel</strong> Data Pemesanan</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
								<a href="{{ url("admin/inputpemesanan")}}" style="margin-top:10px;margin-left:10px;width:300px;float:left;" class="btn btn-success">Tambah Data Pemesanan</a>
							</div>
							<div class="widget-content">
							<br>								
								<div class="table-responsive">
									<form class='form-horizontal' role='form'>
									<table id="datatables-1" class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
									        <thead>
									            <tr>
									                <th>ID</th>
									                <th>Pelanggan ID</th>
									                <th>Kurir_ID</th>
									                <th>CustomerService ID</th>
									                <th>Tujuan Awal</th>
									                <th>Tujuan Akhir</th>
									                <th>Keterangan Tambahan</th>
									                <th>Tanggal Pemesanan</th>
									                <th>Total Biaya</th>
									                <th>Action</th>
									            </tr>
									        </thead>
									 
									        <tfoot>
									            <tr>
									                <th>ID</th>
									                <th>Pelanggan ID</th>
									                <th>Kurir_ID</th>
									                <th>CustomerService ID</th>
									                <th>Tujuan Awal</th>
									                <th>Tujuan Akhir</th>
									                <th>Keterangan Tambahan</th>
									                <th>Tanggal Pemesanan</th>
									                <th>Total Biaya</th>
									                <th>Action</th>
									            </tr>
									        </tfoot>
									 
									        <tbody>
									        @foreach ($pemesanan as $psn)
									            <tr>
									                <td>{{$psn->id}}</td>
									                <td>{{$psn->pelanggan_id}}</td>
									                <td>{{$psn->kurir_id}}</td>
									                <td>{{$psn->customer_service_id}}</td>
									                <td>{{$psn->tujuan_awal}}</td>
									                <td>{{$psn->tujuan_akhir}}</td>
									                <td>{{$psn->keterangan}}</td>
									                <td>{{$psn->tanggal_pemesanan}}</td>
									                <td><?php echo 'Rp.' ?>{{$psn->total_biaya}}<?php echo ',-' ?></td>
									                <td>
								<div class="btn-group">
								  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-cog"></i> Action <span class="caret"></span>
								  </button>
								  
								  <ul class="dropdown-menu" role="menu">
									<li><a href="{{ url("admin/tabelpemesanan/$psn->id/edit")}}" class="md-trigger btn-update"><i class="icon-edit-alt"></i> Edit</a></li>
									<li><a href="{{ route('pemesanan.hapus',$psn->id)}}"><i class="icon-trash"></i> Delete</a></li>
								  </ul>
								</div></td>
									            </tr>
									        @endforeach
									        </tbody>
									    </table>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
@stop
@section('scripttambahan')
<script src="{{asset("assets/libs/jquery-datatables/js/jquery.dataTables.min.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-datatables/js/dataTables.bootstrap.js")}}"></script>
	<script src="{{asset("assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js")}}"></script>
	<script src="{{asset("assets/js/pages/datatables.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-select/bootstrap-select.min.js")}}"></script>
	<script src="{{asset("assets/libs/bootstrap-inputmask/inputmask.js")}}"></script>
	<script src="{{asset("assets/libs/summernote/summernote.js")}}"></script>
	<script src="{{asset("assets/js/pages/forms.js")}}"></script>
	<script src="{{asset("assets/js/pages/index.js")}}"></script>
	@stop