@extends('admin.adminlayout')
@section('title')Tabel Pelanggan
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
								<h2><strong>Tabel</strong> Data Pelanggan</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
								<a href="{{ url("admin/inputpelanggan")}}" style="margin-top:10px;margin-left:10px;width:300px;float:left;" class="btn btn-success">Tambah Data Pelanggan Baru</a>
							</div>
							<div class="widget-content">
							<br>								
								<div class="table-responsive">
									<form class='form-horizontal' role='form'>
									<table id="datatables-1" class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
									        <thead>
									            <tr>
									                <th>ID</th>
									                <th>Nama</th>
									                <th>Alamat</th>
									                <th>Telepon</th>
									                <th>Tempat Lahir</th>
									                <th>Tanggal Lahir</th>
									                <th>Jenis Kelamin</th>
									                <th>No KTP</th>
									                <th>Photo</th>
									                <th>Action</th>
									            </tr>
									        </thead>
									 
									        <tfoot>
									            <tr>
									                <th>ID</th>
									                <th>Nama</th>
									                <th>Alamat</th>
									                <th>Telepon</th>
									                <th>Tempat Lahir</th>
									                <th>Tanggal Lahir</th>
									                <th>Jenis Kelamin</th>
									                <th>No KTP</th>
									                <th>Photo</th>
									                <th>Action</th>
									            </tr>
									        </tfoot>
									 
									        <tbody>
									        @foreach ($pelanggan as $plg)
									            <tr>
									                <td>{{$plg->id}}</td>
									                <td>{{$plg->nama}}</td>
									                <td>{{$plg->alamat}}</td>
									                <td>{{$plg->telepon}}</td>
									                <td>{{$plg->tempat_lahir}}</td>
									                <td>{{$plg->tanggal_lahir}}</td>
									                <td>{{$plg->jenis_kelamin}}</td>
									                <td>{{$plg->no_ktp}}</td>
									                <td><span class="rounded-image topbar-profile-image"><img style="width:50px;height:50px;" src="{{asset($plg->photo_identitas)}}"></span></td>
									                <td>
								<div class="btn-group">
								  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-cog"></i> Action <span class="caret"></span>
								  </button>
								  
								  <ul class="dropdown-menu" role="menu">
									<li><a href="{{ url("admin/tabelpelanggan/$plg->id/edit")}}" class="md-trigger btn-update"><i class="icon-edit-alt"></i> Edit</a></li>
									<li><a href="{{ route('pelanggan.hapus',$plg->id)}}"><i class="icon-trash"></i> Delete</a></li>
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

	<div class="md-overlay"></div>
@stop
@section('scripttambahan')
<script src="{{("assets/libs/jquery-datatables/js/jquery.dataTables.min.js")}}"></script>
	<script src="{{("assets/libs/jquery-datatables/js/dataTables.bootstrap.js")}}"></script>
	<script src="{{("assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js")}}"></script>
	<script src="{{("assets/js/pages/datatables.js")}}"></script>
	<script src="{{("assets/libs/bootstrap-select/bootstrap-select.min.js")}}"></script>
	<script src="{{("assets/libs/bootstrap-inputmask/inputmask.js")}}"></script>
	<script src="{{("assets/libs/summernote/summernote.js")}}"></script>
	<script src="{{("assets/js/pages/forms.js")}}"></script>
	<script src="{{("assets/js/pages/index.js")}}"></script>
	@stop