@extends('master')
@section('konten')

<section class="main-slider fullsize" data-stellar-background-ratio="0.5" >
	<div class="slider-caption">
		
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form class="form-signin" method="post" action="{{ url('process-login') }}">
                <h2 class="form-signin-heading">LOGIN</h2>
                <div class="form-group">
                    <input type="username" name="username" id="username" class="form-control input-lg" placeholder="Username" autofocus>
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button><br>
                 @if($errors->has()) @foreach($errors->all() as $error) <li style="color:white;text-align:left;margin-left:12px;">{{ $error }}</li> @endforeach @endif<br>
                <!-- Error Message -->
                Login Only For Operator
              </form>
            </div>
        </div>
      </div>	
      </div>
</section>    
</header>

@endsection