@extends('layouts.app')
@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Notifikasi</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="/">Home</a></li>
						<li>Notifikasi</li>
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
						<li><a href="notif" class="current"><i class="fa fa-bell-o"></i> Notifikasi</a></li>
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
			<table class="manage-table responsive-table">

				<tr>
					<th><i class="fa fa-file-text"></i> Properti</th>
					<th class="expire-date"><i class="fa fa-calendar"></i> Pemesan</th>
					<th class="expire-date"><i class="fa fa-calendar"></i> Tanggal</th>
					<th class="expire-date"><i class="fa fa-calendar"></i> Keterangan</th>
					<th></th>
				</tr>

				<!-- Item #1 -->
        @foreach($data as $key => $value)
				<tr>
					<td class="title-container">
						<img src="{{ url('picture/'.$value->foto) }}" alt="">
						<div class="title">
							<h4><a href="{{ url('detailproperti/'.$value->kursus->id ) }}">{{ $value->kursus->nama }}</a></h4>
						</div>
					</td>
					<td class="expire-date">{{ $value->user->name }}</td>
					<td class="expire-date">{{ $value->tanggal }}</td>
					<td class="action">
					{{ $value->konfirmasi }}
					</td>
				</tr>
				@endforeach
        @foreach($data2 as $key => $value)
				<tr>
					<td class="title-container">
						<img src="images/listing-02.jpg" alt="">
						<div class="title">
							<h4><a href="{{ url('detailproperti/'.$value->tempat->id ) }}">{{ $value->tempat->nama }}</a></h4>
						</div>
					</td>
					<td class="expire-date">{{ $value->user->name }}</td>
					<td class="expire-date">{{ $value->tanggal }}</td>
					<td class="action">
						{{ $value->konfirmasi }}
					</td>
				</tr>
				@endforeach


			</table>
		</div>

	</div>
</div>
@endsection
