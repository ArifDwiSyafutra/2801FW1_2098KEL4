@extends('admin.adminlayout')
@section('title')Tabel Kurir
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
								<h2><strong>Tabel</strong> Data Kurir</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
								<a href="{{ url("admin/inputkurir")}}" style="margin-top:10px;margin-left:10px;width:300px;float:left;" class="btn btn-success">Tambah Data Kurir Baru</a>
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
									                <th>No SIM</th>
									                <th>Kendaraan</th>
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
									                <th>No SIM</th>
									                <th>Kendaraan</th>
									                <th>Photo</th>
									                <th>Action</th>
									            </tr>
									        </tfoot>
									 
									        <tbody>
									        @foreach ($kurir as $kur)
									            <tr>
									                <td>{{$kur->id}}</td>
									                <td>{{$kur->nama}}</td>
									                <td>{{$kur->alamat}}</td>
									                <td>{{$kur->telepon}}</td>
									                <td>{{$kur->tempat_lahir}}</td>
									                <td>{{$kur->tanggal_lahir}}</td>
									                <td>{{$kur->jenis_kelamin}}</td>
									                <td>{{$kur->no_ktp}}</td>
									                <td>{{$kur->no_sim}}</td>
									                <td>{{$kur->kendaraan}}</td>
									                <td><span class="rounded-image topbar-profile-image"><img style="width:50px;height:50px;" src="{{asset($kur->photo_identitas)}}"></span></td>
									                <td>
								<div class="btn-group">
								  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-cog"></i> Action <span class="caret"></span>
								  </button>
								  
								  <ul class="dropdown-menu" role="menu">
									<li><a href="{{ url("admin/tabelkurir/$kur->id/edit")}}" class="md-trigger btn-update"><i class="icon-edit-alt"></i> Edit</a></li>
									<li><a href="{{ route('kurir.hapus',$kur->id)}}"><i class="icon-trash"></i> Delete</a></li>
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

				<div class="md-modal md-just-me" id="edit-modal">
		<div class="md-content">
			<h3><strong>Edit </strong> Data Kurir</h3>
			<div>
				<form class="form-horizontal" name="edit-form" role="form" method="POST" action="">
						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Telepon</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Tempat Lahir</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Lahir</label>
							<div class="col-sm-3">
							  <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" data-mask="9999-99-99" placeholder="yyyy-mm-dd">
							</div>
						  </div>

						   <div class="form-group">
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-3">
								<div class="radio iradio">
								  <label>
									<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" checked>
									Pria
								  </label>
								</div>
								<div class="radio iradio">
								  <label>
									<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">
									Wanita
								  </label>
								</div>
							</div>
						  </div>
						  
						  <div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-10">
							  <textarea class="summernote" name="alamat" id="alamat"></textarea>
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">No KTP</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="No KTP">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">No SIM</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="no_sim" name="no_sim" placeholder="No SIM">
							</div>
						  </div>
						  
						 <div class="form-group">
							<label class="col-sm-2 control-label">Tipe Kurir</label>
							<div class="col-sm-10">
								<select class="form-control selectpicker" id="kendaraan" name="kendaraan">
								  <option value="motor">Kendaraan Bermotor</option>
								  <option value="mobil">Kendaraan Bermobil</option>
								</select>
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Photo</label>
							<div class="col-sm-10">
							  <input type="file" class="btn btn-default" id="photo_identitas" name="photo_identitas" title="Select Photo">
							</div>
						  </div>

						  <input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <button type="reset" style="float:right;" class="btn btn-warning">Reset</button>
						  <button type="submit" style="float:right;margin-right:10px;margin-bottom:10px;" class="btn btn-success">Submit</button>
						</form>
						  <button class="btn btn-danger md-close">I changed my mind !</button>
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