@extends('layouts.app')
@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Masuk & Daftar</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="/">Home</a></li>
						<li>Masuk & Daftar</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Contact
================================================== -->

<!-- Container -->
<div class="container">

	<div class="row">
	<div class="col-md-4 col-md-offset-4">

	<!--Tab -->
	<div class="my-account style-1 margin-top-5 margin-bottom-40">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Masuk</a></li>
			<li><a href="#tab2">Daftar</a></li>
		</ul>

		<div class="tabs-container alt">
			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				<form method="post" class="login" action="{{ url('auth/login') }}">
					{{ csrf_field() }}
					<p class="form-row form-row-wide">
						<label for="email">email:
							<i class="im im-icon-Male"></i>
							<input type="text" class="input-text" name="email" id="email" value="" required/>
						</label>
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:
							<i class="im im-icon-Lock-2"></i>
							<input class="input-text" type="password" name="password" id="password" required/>
						</label>
					</p>

					<p class="form-row">
						<input type="submit" class="button border margin-top-10" name="login" value="Masuk"/>
					</p>
				</form>
			</div>

			<!-- Register -->
			<div class="tab-content" id="tab2" style="display: none;">

				<form method="post" class="register" action="{{ url('/daftar') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<p class="form-row form-row-wide">
					<label for="username2">Nama Lengkap:
						<i class="im im-icon-Male"></i>
						<input type="text" class="input-text" name="name" id="name" value="" required/>
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="email2">Alamat Email:
						<i class="im im-icon-Mail"></i>
						<input type="text" class="input-text" name="email" id="email" value="" required/>
					</label>
				</p>

				<p class="form-row form-row-wide">
					<label for="email2">Nomor Telepon:
						<i class="im im-icon-Telephone"></i>
						<input type="text" class="input-text" name="telepon" id="telepon" value="" required/>
					</label>
				</p>

			<p class="form-row form-row-wide">
					<h5>Daftar Sebagai</h5>
					<select class="chosen-select-no-single" name="type">
						<option value="penyedia">Penyedia</option>
						<option value="pembimbing">Pembimbing</option>
						<option value="pelajar">Pelajar</option>
					</select>
				</p>

				<p class="form-row form-row-wide">
					<label for="password1">Password:
						<i class="im im-icon-Lock-2"></i>
						<input class="input-text" type="password" name="password" id="password" required/>
					</label>
				</p>


				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" name="register" value="Daftar"/>
				</p>

				</form>
			</div>

		</div>
	</div>



	</div>
	</div>

</div>
<!-- Container / End -->
@endsection
