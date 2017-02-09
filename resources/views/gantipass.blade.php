@extends('layouts.app')
@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Ganti Password</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="/">Home</a></li>
						<li>Ganti Password</li>
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
						<li><a href="profil" ><i class="sl sl-icon-user"></i> Profile</a></li>
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
						<li><a href="gantipass" class="current"><i class="sl sl-icon-lock"></i> Ganti Password</a></li>
						<li><a href="logout"><i class="sl sl-icon-power"></i> Keluar</a></li>
					</ul>

				</div>

			</div>
		</div>
<!-- Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6  my-profile">
					<h4 class="margin-top-0 margin-bottom-30">Change Password</h4>

					<label>Current Password</label>
					<input type="password">

					<label>New Password</label>
					<input type="password">

					<label>Confirm New Password</label>
					<input type="password">

					<a href="submit-property.html" class="margin-top-20 button">Save Changes</a>
				</div>

				<div class="col-md-6">
					<div class="notification notice">
						<p>Your password should be at least 12 random characters long to be safe</p>
					</div>
				</div>

			</div>
		</div>
</div>
</div>
	</div>
</div>
@endsection
