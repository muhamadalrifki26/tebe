@extends('layouts.app')
@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Profil Saya</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="/">Home</a></li>
						<li>Profil Saya</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>

<!-- Content
================================================== -->
<div class="container">
	<div class="row">


		<!-- Widget -->
    <div class="col-md-4">
			<div class="sidebar left">

				<div class="my-account-nav-container">

					<ul class="my-account-nav">
						<li class="sub-nav-title">Pengelolahan Akun</li>
						<li><a href="profil" class="current"><i class="sl sl-icon-user"></i> Profile</a></li>
						@if(Entrust::hasRole('penyedia'))
						<li><a href="notif"><i class="fa fa-bell-o"></i> Notifikasi</a></li>
						@endif
						@if(Entrust::hasRole('pembimbing'))
						<li><a href="notif_kursus"><i class="fa fa-bell-o"></i> Notifikasi</a></li>
						@endif
						@if(Entrust::hasRole('pelajar'))
						<li><a href="notif_pelajar"><i class="fa fa-bell-o"></i> Notifikasi</a></li>
						@endif
					</ul>
					@if(Entrust::hasRole('penyedia'))
					<ul class="my-account-nav">
						<li class="sub-nav-title">Pengelolahan Properti/Tempat</li>
						<li><a href="properti"><i class="sl sl-icon-docs"></i> List Properti</a></li>
						<li><a href="sub_properti"><i class="sl sl-icon-action-redo"></i> Properti Baru</a></li>
					</ul>
					@endif
					@if(Entrust::hasRole('pembimbing'))
					<ul class="my-account-nav">
						<li class="sub-nav-title">Pengelolahan Kursus</li>
						<li><a href="kursus"><i class="sl sl-icon-docs"></i> List Kursus</a></li>
						<li><a href="sub_kursus"><i class="sl sl-icon-action-redo"></i> Kursus Baru</a></li>
					</ul>
					@endif

					<ul class="my-account-nav">
						<!-- <li><a href="gantipass"><i class="sl sl-icon-lock"></i> Ganti Password</a></li> -->
						<li><a href="logout"><i class="sl sl-icon-power"></i> Keluar</a></li>
					</ul>

				</div>

			</div>
		</div>

		<div class="col-md-8">
			<div class="row">


				<div class="col-md-8 my-profile">
					<h4 class="margin-top-0 margin-bottom-30">Akun Saya</h4>

					<label>Nama Lengkap</label>
					<input value="{{ Auth::user()->name }}" type="text">

					<label>Email</label>
					<input value="{{ Auth::user()->email }}" type="text">

					<label>Nomor Telepon</label>
					<input value="{{ Auth::user()->telepon }}" type="text">

					<!-- <label>Password Lama</label>
					<input type="password">

					<label>Password Baru</label>
					<input type="password">

					<button class="button margin-top-20 margin-bottom-20">Simpan perubahan</button> -->
				</div>

				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<img src="images/user.png" alt="">
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <!-- <span><i class="fa fa-upload"></i> Upload Photo</span> -->
							    <input type="file" class="upload" />
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>

	</div>
</div>
@endsection
