@extends('admin.adminlayout')
@section('title')Tabel Akun
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
								<h2><strong>Tabel</strong> Akun</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
								<a href="{{ url("admin/inputakun")}}" style="margin-top:10px;margin-left:10px;width:300px;float:left;" class="btn btn-success">Tambah Akun Baru</a>
							</div>
							<div class="widget-content">
							<br>								
								<div class="table-responsive">
									<table id="datatables-1" class="datatable table table-striped table-bordered" cellspacing="0" width="100%">
									        <thead>
									            <tr>
									                <th>ID</th>
									                <th>Username</th>
									                <th>Password</th>
									                <th>Nama</th>
									                <th>Photo</th>
									                <th>Action</th>
									            </tr>
									        </thead>
									 
									        <tfoot>
									            <tr>
									                <th>ID</th>
									                <th>Username</th>
									                <th>Password</th>
									                <th>Nama</th>
									                <th>Photo</th>
									                <th>Action</th>
									            </tr>
									        </tfoot>
									 
									        <tbody>
									        @foreach ($akun as $akn)
									            <tr>
									                <td>{{$akn->id}}</td>
									                <td>{{$akn->username}}</td>
									                <td>{{$akn->password}}</td>
									                <td>{{$akn->nama}}</td>
									                <td><span class="rounded-image topbar-profile-image"><img style="width:50px;height:50px;" src="{{asset($akn->gambar)}}"></span></td>
									                <td>
								<div class="btn-group">
								  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-cog"></i> Action <span class="caret"></span>
								  </button>
								  
								  <ul class="dropdown-menu" role="menu">
									<li><a href="{{ url("admin/tabelakun/$akn->id/edit")}}" class="md-trigger btn-update"><i class="icon-edit-alt"></i> Edit</a></li>
									<li><a href="{{ route('akun.hapus',$akn->id)}}"><i class="icon-trash"></i> Delete</a></li>
								  </ul>
								</div></td>
									            </tr>
									        @endforeach
									        </tbody>
									    </table>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="md-modal md-super-scaled" id="edit-modal">
		<div class="md-content">
			<h3><strong>Edit </strong> Data Akun</h3>
			<div>
				<form class="form-horizontal" name="edit-form" role="form" method="POST" action="">
						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
							  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
						  </div>

						  <div class="form-group">
							<label for="input-text" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
							  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
							</div>
						  </div>

						  <div class="form-group">
							<label class="col-sm-2 control-label">Photo</label>
							<div class="col-sm-10">
							  <input type="file" class="btn btn-default" id="gambar" name="gambar" title="Select Photo">
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
	<script src="{{asset("assets/libs/nifty-modal/js/classie.js")}}"></script>
	<script src="{{asset("assets/libs/nifty-modal/js/modalEffects.js")}}"></script>
	<script src="{{asset("assets/libs/sortable/sortable.min.js")}}"></script>
	<script type="text/javascript">
/*  $(document).on('click','.btn-update',function (x) {
    var  url = $(this).data('url')
    $('[name="edit-form"]').attr('action',url);
  })*/
</script>
	
	@stop