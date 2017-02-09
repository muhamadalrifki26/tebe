<!DOCTYPE html>

<!-- Mirrored from www.vasterad.com/themes/findeo/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2017 00:41:01 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>TeBe</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{url('css/style.css')}}">
<link rel="stylesheet" href="{{url('css/colors/main.css')}}" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header Container
================================================== -->
<header id="header-container" class="header-style-2">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo" class="margin-top-10">
					<a href="index.html"><img src="images/logo.png" alt=""></a>

					<!-- Logo for Sticky Header -->
					<a href="index.html" class="sticky-logo"><img src="images/logo2.png" alt=""></a>
				</div>

			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<ul class="header-widget">
					<li>
						<i class="sl sl-icon-call-in"></i>
						<div class="widget-content">
							<span class="title">Pertanyaan ?</span>
							<span class="data">(123) 123-456 </span>
						</div>
					</li>

					<li>
						<i class="sl sl-icon-location"></i>
						<div class="widget-content">
							<span class="title">Lokasi Kantor</span>
							<span class="data">Jl. Binawarga, Jak-Sel</span>
						</div>
					</li>

					@if(Auth::guest())
						<li class="with-btn"><a href="{{url('masuk_daftar')}}" class="button border"><span class="im im-icon-Add-User"></span>&nbsp;Masuk/Daftar</a></li>
					@else
						<li class="with-btn"><a href="{{url('logout')}}" class="button border"><span class="im im-icon-Power-2"></span>&nbsp;Keluar</a></li>
					@endif
				</ul>
			</div>
			<!-- Right Side Content / End -->

		</div>


		<!-- Mobile Navigation -->
		<div class="menu-responsive">
			<i class="fa fa-reorder menu-trigger"></i>
		</div>


		<!-- Main Navigation -->
		<nav id="navigation" class="style-2">
			<div class="container">
					<ul id="responsive">

						<li><a class="current" href="{{ url('/') }}">Home</a></li>
						@if(Auth::check())
							<li><a href="{{url('/profil')}}">Profil</a></li>
						@endif
						<li><a href="#">Cari</a>
							<ul>
								<li><a href="{{url('/caritempat')}}">Tempat</a>
								</li>
								<li><a href="{{url('/carikursus')}}">Kursus</a>
								</li>
							</ul>
						</li>
					</ul>
			</div>
		</nav>
		<div class="clearfix"></div>
		<!-- Main Navigation / End -->
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Slider
================================================== -->
<div class="fullwidth-home-slider margin-bottom-15">

	<!-- Slide -->
	<div data-background-image="images/kursus.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">

						<!-- Slide Title -->
						<div class="home-slider-desc">

							<div class="home-slider-price">
								Kursus
							</div>

							<div class="home-slider-title">
								<h3><a href="#">Pengertian Kursus</a></h3>
								<span>Kursus adalah lembaga pelatihan yang termasuk ke dalam jenis pendidikan nonformal.</span>
							</div>
						</div>
						<!-- Slide Title / End -->

					</div>
				</div>
			</div>
		</div>
	</div>

	<div data-background-image="images/tempat.jpg" class="item">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home-slider-container">

						<div class="home-slider-desc">

							<div class="home-slider-price">
								Tempat
							</div>

							<div class="home-slider-title">
								<h3><a href="single-property-page-1.html">Penyewaan tempat.</a></h3>
								<span>Didalam aplikasi ini kita dapat menyewa tempat untuk belajar. </span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer
================================================== -->
<div id="footer" class="dark">
	<!-- Main -->
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img class="footer-logo" src="images/logo2.png" alt="">
				<br><br>
				<p>TeBe adalah aplikasi dimana kita dapat menyewa tempat atau mengikuti kursus terdekat.</p>
			</div>


			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					<span>Jakarta Selatan</span> <br>
					Phone: <span>(123) 123-456 </span><br>
					E-Mail:<span> <a href="#"><span class="__cf_email__" data-cfemail="38575e5e515b5d785d40595548545d165b5755">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a> </span><br>
				</div>

			</div>

		</div>

		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2016 TeBe. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="scripts/rangeSlider.js"></script>
<script type="text/javascript" src="scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/masonry.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK5nqBLRcTUT2fJc%2bSiKVTVy5OJgnrUc3X3p0BDp%2bgSfxF38ZM6SldjF61bBPgz1nTgwqhQVrZyN0fXFSxWC%2bbFeRl5Upda8Z8KdaaLJFfYKnZVRB%2b1unGn3MTKV7sjzWxpCtyNpjwijOvT5yesHoQi8HRSgowR25aQMR6ermtuXph%2fX4tBgLWHLx4kvmUCeQMiehHCsAjBNy5YrZLZVT5t4CDs9EGh%2f9jubKqYX%2f4YF6SIekCmOcFSdeIVg5g3oP%2f7sBaau7Z%2fnTWBzU%2bht6i0AdBalzs%2bto3N1SPRx2I1nT9xKjpt4wRhNA8Gzou%2bH2L%2blEXROCs12vfJAYgTmoxIC2KcHXxksGXbi88wwm2AvQXkCIgof6iUL1%2bFgZ7CoBEP8dSwhrjqnQdxlVpFkZvDiMxp1xEagy7mgb5dZQQ4ANhXyCT8TBeZ54OEXF5Um39oDuWJyB2UADhZPLuMV0MFcyTBKcNJoGt98aKlxf9JAm8HM%2fm%2fdRtXWLPYMtTFsTge126MiuW0GD11VSVHUfRNaRBy1%2fNerkg" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from www.vasterad.com/themes/findeo/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2017 00:41:14 GMT -->
</html>
