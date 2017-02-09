@extends('layouts.app')
@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="submit-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><i class="fa fa-plus-circle"></i> Add Kursus</h2>
			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row">

	<!-- Submit Page -->
	<div class="col-md-12">
		<div class="submit-page">



		<!-- Section -->
		<form action="{{ url('seemore_kursus') }}" method="POST" enctype="multipart/form-data">
		<div class="submit-section">

			<!-- Title -->
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form">
				<h5>Judul Kursus <i class="tip" data-tip-content="Type title that will also contains an unique feature of your property (e.g. renovated, air contidioned)"></i></h5>
				<input class="search-field" type="text" name="nama" id='nama' required/>
			</div>

			<!-- Row -->
			<div class="row with-forms">

				<!-- Price -->
				<div class="col-md-4">
					<h5>Tarif Perpeserta <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="IDR" name="tarif_peserta" id='tarif_peserta' required>
					</div>
				</div>

				<div class="col-md-4">
					<h5>Minimal peserta <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Orang" name='min_peserta' id='min_peserta' required>
					</div>
				</div>

				<div class="col-md-4">
					<h5>Maximum Peserta <i class="tip" data-tip-content="Type overall or monthly price if property is for rent"></i></h5>
					<div class="select-input disabled-first-option">
						<input type="text" data-unit="Orang" name='max_peserta' id='max_peserta' required>
					</div>
				</div>


		</div>
		<!-- Section / End -->

		<h3>Jadwal Jam Kelas</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Name -->
				<div class="col-md-6">
					<h5>Dari jam</h5>
					<input type="text" name='dari_jam' id='dari_jam' required>
				</div>

				<!-- Email -->
				<div class="col-md-6">
					<h5>Sampai Jam</h5>
					<input type="text" name= 'sampai_jam' id-'sampai_jam' required>
				</div>
			</div>
			<!-- Row / End -->

		</div>
		<!-- Section / End -->

		<!-- Checkboxes -->
		<!-- <h5 class="margin-top-30">Hari <span>(Jadwal Kelas)</span></h5>
		<div class="checkboxes in-row margin-bottom-20">

			<input id="check-2" type="checkbox" name="check">
			<label for="check-2">Senin</label>

			<input id="check-3" type="checkbox" name="check">
			<label for="check-3">Selasa</label>

			<input id="check-4" type="checkbox" name="check" >
			<label for="check-4">Rabu</label>

			<input id="check-5" type="checkbox" name="check">
			<label for="check-5">Kamis</label>


			<input id="check-6" type="checkbox" name="check">
			<label for="check-6">Jumat</label>

			<input id="check-7" type="checkbox" name="check">
			<label for="check-7">Sabtu</label>

			<input id="check-8" type="checkbox" name="check">
			<label for="check-8">Minggu</label>

		</div> -->
		<!-- Checkboxes / End -->

	</div>
				<h3>Galeri</h3>
				<div class="submit-section">
					<div class="edit-profile-photo">
						<img src="" alt="" id="img-val">
						<div class="change-photo-btn">
							<div class="photoUpload">
									<span><i class="fa fa-upload"></i> Upload Photo</span>
									<input type="file" class="upload" name="photo" id="img-input" />
							</div>
						</div>
					</div>
				</div>

		<!-- Section -->
		<h3>Lokasi</h3>
		<div class="submit-section">

			<!-- Row -->
			<div class="row with-forms">

				<!-- Age of Home -->
				<div class="col-md-12">
					<h5>Pilih Provinsi <span>(optional)</span></h5>
					<select class="chosen-select-no-single" name='lokasi' id='lokasi' required>
						<option label="blank"></option>
						<option value="aceh">Aceh</option>
						<option value="Sumut">Sumatera Utara</option>
						<option value="sumbar">Sumatera Barat</option>
						<option value="Riau">Riau</option>
						<option value="Jambi">Jambi</option>
						<option value="Sumsel">Sumatera Selatan</option>
						<option value="Bengkulu">Bengkulu</option>
						<option value="Lampung">Lampung</option>
						<option value="BaBel">Kep. Bangka Belitung</option>
						<option value="kepRiau">Kepulauan Riau</option>
						<option value="Jakarta">Jakarta</option>
						<option value="Jabar">Jawa Barat</option>
						<option value="Banten">Banten</option>
						<option value="Jateng">Jawa Tengah</option>
						<option value="Yogyakarta">Yogyakarta</option>
						<option value="Jatim">Jawa Timur</option>
						<option value="Kalbar">Kalimantan Barat</option>
						<option value="Kalteng">Kalimantan Tengah</option>
						<option value="Kalsel">Kalimantan Selatan</option>
						<option value="Kaltim">Kalimantan Timur</option>
						<option value="Kaltra">Kalimantan Utara</option>
						<option value="Bali">Bali</option>
						<option value="NTT">Nusa Tenggara Timur</option>
						<option value="NTB">Nusa Tenggara Barat</option>
						<option value="Sulut">Sulawesi Utara</option>
						<option value="Sulteng">Sulawesi Tengah</option>
						<option value="Sulsel">Sulawesi Selatan</option>
						<option value="Sultengg">Sulawesi Tenggara</option>
						<option value="Sulbar">Sulawesi Barat</option>
						<option value="Gorontalo">Gorontalo</option>
						<option value="Maluku">Maluku</option>
						<option value="Maluku Utara">Maluku Utara</option>
						<option value="Papua">Papua</option>
						<option value="Papua Barat">Papua Barat</option>
					</select>
				</div>

			</div>
			<!-- Row / End -->
			<div class="form">
				<h5>Alamat Tempat Lengkap</h5>
				<textarea class="WYSIWYG" name="alamat" cols="40" rows="3" id="alamat" spellcheck="true" required></textarea>
			</div>
		</div>
		<!-- Section / End -->


		<!-- Section -->
		<h3>Informasi Detail</h3>
		<div class="submit-section">

			<!-- Description -->
			<div class="form">
				<h5>Descripsi</h5>
				<textarea class="WYSIWYG" name="deskripsi" cols="40" rows="3" id="deskripsi" spellcheck="true"  required></textarea>
			</div>

			<h5 class="margin-top-30">Fitur Lain <span>(optional)</span></h5>
			<div class="checkboxes in-row margin-bottom-20">

				@foreach($fasilitas as $key => $value)

				<input id="check-{{$key}}" type="checkbox" name="fasilitas[]" value="{{$value->id}}">
				<label for="check-{{$key}}">{{$value->nama}}</label>

				@endforeach

			</div>
			<!-- Checkboxes / End -->

		</div>
		<!-- Section / End -->

		<div class="divider"></div>
		<button class="button preview margin-top-5">Buat <i class="fa fa-arrow-circle-right"></i></button>
		</div>
	</form>
	</div>
</div>
</div>
@endsection
