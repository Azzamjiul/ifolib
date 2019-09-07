@extends('layouts.master')

@section('title','IFOLIB - Informatic Open Library')

@section('main-content')
<div role="main" class="main">
	<!-- Slider -->
	<div class="slider-container rev_slider_wrapper" style="height: 740px;">
		<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
			<ul>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide1.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<!-- <h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Complete Solution For Your Education Needs</h1> -->

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">ABOUT US</a> -->

				</li>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide2.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Your Future Is Coming For You, Get Ready!</h1>

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">OUR COURSES</a> -->

				</li>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide3.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<!-- <h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Complete Solution For Your Education Needs</h1> -->

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">ABOUT US</a> -->

				</li>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide4.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Your Future Is Coming For You, Get Ready!</h1>

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">OUR COURSES</a> -->

				</li>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide5.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<!-- <h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Complete Solution For Your Education Needs</h1> -->

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">ABOUT US</a> -->

				</li>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide6.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Your Future Is Coming For You, Get Ready!</h1>

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">OUR COURSES</a> -->

				</li>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide7.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<!-- <h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Complete Solution For Your Education Needs</h1> -->

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">ABOUT US</a> -->

				</li>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide8.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Your Future Is Coming For You, Get Ready!</h1>

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">OUR COURSES</a> -->

				</li>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide9.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<!-- <h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Complete Solution For Your Education Needs</h1> -->

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">ABOUT US</a> -->

				</li>
				<li data-transition="fade">
					<img src="/openlibrary/img/slide10.jpeg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="on" data-duration="20000" data-ease="Linear.easeNone" data-scalestart="110" data-scaleend="100" data-offsetstart="250 100" class="rev-slidebg">

					<h1 class="tp-caption font-weight-bold text-color-light text-center" data-x="center" data-y="center" data-voffset="['10','10','10','10']" data-width="['770','770','770','350']" data-start="1000" data-fontsize="['45','45','45','35']" data-lineheight="['56','56','50','40']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;" style="white-space: normal;">Your Future Is Coming For You, Get Ready!</h1>

					<!-- <a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1" href="#" data-x="center" data-y="center" data-voffset="['130','130','130','130']" data-start="1300" data-fontsize="['14','14','14','20']" data-paddingtop="['11','11','11','16']" data-paddingbottom="['11','11','11','16']" data-paddingleft="['32','32','32','42']" data-paddingright="['32','32','32','42']" data-transform_in="y:[100%];opacity:0;s:500;" data-transform_out="opacity:0;s:500;">OUR COURSES</a> -->

				</li>
			</ul>
		</div>
	</div>

	<!-- Layanan -->
	<section class="section bg-color-light border-0 my-0">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center">
					<h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">Our Services</h2>
					<!-- <p class="text-color-dark pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1700">Dalam rangka memaksimalkan pelayanan kami menyediakan beberapa layanan sebagai berikut.</p> -->
					<!-- <a href="#" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}">LO ITS</a> -->
					<a href="https://docs.google.com/forms/d/e/1FAIpQLSfYsVvZ41LcRuQJ961nT202D5bAqFjgssQYjALeGNVmgVmmXg/viewform" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}" style="margin:10px 10px">LSS (LITERATURE SERACHING SERVICE)</a>
					<a href="http://eresource-mi.com" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}" style="margin:10px 10px">LAYANAN LITERASI INFORMASI</a>
					<a href="https://www.grammarly.com/" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}" style="margin:10px 10px">LAYANAN CHECK PLAGIARISM</a>
					<a href="http://yudisium.if.its.ac.id/" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}" style="margin:10px 10px">BEBAS PUSTAKA DAN UNGGAH MANDIRI</a>
					<a href="/openlibrary/pdf/Akses_VPN_untuk_Dosen_Tendik_dan_Mahasiswa.pdf" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}" style="margin:10px 10px">PANDUAN VPN</a>
					<a href="https://docs.google.com/forms/d/e/1FAIpQLSe_9vtv2LhOAKdiaOLrjWMaF5gLo94efgPMdlhgLAu4Ch8rzg/viewform" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}" style="margin:10px 10px">USULAN BUKU BARU</a>
					<a href="https://docs.google.com/forms/d/1GbnZb3XPj4F9CzZKhHUEkgpt5DRT_ZSX31OCNkI4c-8/edit" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}" style="margin:10px 10px">SURVEY KEBUTUHAN INFROMASI</a>
					<a href="http://rbtc.if.its.ac.id/v8/login2/index.php" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}" style="margin:10px 10px">SELF SERVICES SIRKULASI</a>
				</div>
			</div>
		</div>
	</section>

	<section class="section bg-color-light border-0 my-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">Recent News</h2>
				</div>
				<div class="col-md-6" style="margin-bottom: 50px">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe max-width="853" max-height="480" src="https://www.youtube.com/embed/EHlVz1XSfZU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<h4 class=" text-center">PENGUMUMAN BEBAS RBTC</h4>
					<p>Bagi Calon Wisudawan untuk Bebas RBTC harap menunjukkan :</p>
					<ol>
						<li value="1">Kartu Tanda Mahasiswa</li>
						<li>Tugas Akhir ( Buku Hard Copy )</li>
						<li>Biodata Wisudawan</li>
						<li>Lembar Telaah POMITS ( 2 Buah : Penguji dan Pembimbing )</li>
						<li>Lembar Revisi Tugas Akhir ( 2 Buah : Penguji dan Pembimbing )</li>
						<li>Poster A3</li>
						<li>Bukti telah mengupload File POMITS</li>
						<li>
							Tugas Akhir berbentuk CD yang isinya :
							<ol>[SOFTCOPY] :
								<li>Poster TA</li>
								<li>Artikel POMITS (dalam format .doc dan .pdf)</li>
								<li>Video TA</li>
								<li>Buku TA</li>
								<li>Presentasi TA</li>
							</ol>
						</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<!-- Resources -->
	<section class="section bg-color-light border-0 my-0">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">KONTEN LOKAL</h2>
				</div>
			</div>
			<div class="row justify-content-center mb-5">
				<!-- KATALOG ONLINE -->
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="http://rbtc.if.its.ac.id/v8/index.php?select_lang=my_MY"><img src="/openlibrary/img/katalogonline.png" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Lokal Konten</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="http://rbtc.if.its.ac.id/v8/index.php?select_lang=my_MY" class="custom-link-color-dark">KATALOG ONLINE </a></h3>
						</div>
						<!-- <div class="thumb-info-footer">
										<ul class="nav text-1">
											<li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
											<li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 48 Hours</a></li>
										</ul>
									</div> -->
					</div>
				</div>
				<!-- JUTI -->
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="http://juti.if.its.ac.id/index.php/juti"><img src="/openlibrary/img/juti.png" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Lokal Konten</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="http://juti.if.its.ac.id/index.php/juti" class="custom-link-color-dark">JUTI</a></h3>
						</div>
						<!-- <div class="thumb-info-footer">
										<ul class="nav text-1">
											<li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
											<li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 1 Hour</a></li>
										</ul>
									</div> -->
					</div>
				</div>
				<!-- REPOSITORI INFORMATIKA -->
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="#"><img src="/openlibrary/img/its.png" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Lokal Konten</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="#" class="custom-link-color-dark">REPOSITORY INFORMATIKA ITS</a></h3>
						</div>
						<!-- <div class="thumb-info-footer">
										<ul class="nav text-1">
											<li><a href="demo-education-courses-detail.html"><i class="far fa-user text-color-primary"></i> John Doe</a></li>
											<li class="ml-3"><a href="demo-education-courses-detail.html"><i class="far fa-clock text-color-primary"></i> 1 Hour</a></li>
										</ul>
									</div> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2 class="font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">Electronic Resources</h2>
				</div>
			</div>
			<div class="row justify-content-center mb-5">
				<!-- JURNAL ACM -->
				<div class="col-md-6 col-lg-4 col-xl-3 pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="https://libraries.acm.org/"><img src="/openlibrary/img/acm_logo_tablet.jpg" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Electronic Resources</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="https://libraries.acm.org/" class="custom-link-color-dark">Journal ACM digital library</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="http://library.its.ac.id/page/detail/jurnal-online"><img src="/openlibrary/img/perpusits.jpg" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Electronic Resources</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="http://library.its.ac.id/page/detail/jurnal-online" class="custom-link-color-dark">PERPUSTAKAAN ITS</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="http://e-resources.perpusnas.go.id/"><img src="/openlibrary/img/perpusnasional.png" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Electronic Resources</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="http://e-resources.perpusnas.go.id/" class="custom-link-color-dark">PERPUSTAKAAN NASIONAL</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="https://perpustakaan.kemdikbud.go.id/jurnal-internasional"><img src="/openlibrary/img/perpusdikbud.png" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Electronic Resources</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="https://perpustakaan.kemdikbud.go.id/jurnal-internasional" class="custom-link-color-dark">PERPUSTAKAAN DIKTI</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="http://repository.its.ac.id/"><img src="/openlibrary/img/repoits.png" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Electronic Resources</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="http://repository.its.ac.id/" class="custom-link-color-dark">INSTITUSIONAL REPOSITORY</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="https://www.scopus.com/home.uri"><img src="/openlibrary/img/scopus.png" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Electronic Resources</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="https://www.scopus.com/home.uri" class="custom-link-color-dark">SCOPUS</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="http://sinta2.ristekdikti.go.id/journals/detail?id=3056"><img src="/openlibrary/img/sinta.jpg" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Electronic Resources</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="http://sinta2.ristekdikti.go.id/journals/detail?id=3056" class="custom-link-color-dark">SINTA</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2 class="font-weight-bold text-center appear-animation" data-appear-animation="fadeInUpShorter">Open Access</h2>
				</div>
			</div>
			<div class="row justify-content-center mb-5">
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="http://onesearch.id/"><img src="/openlibrary/img/onesearch.png" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Open Access</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="http://onesearch.id/" class="custom-link-color-dark">INDONESIA ONE SEARCH</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="https://doaj.org/"><img src="/openlibrary/img/doaj.jpg" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Open Access</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="https://doaj.org/" class="custom-link-color-dark">DOAJ</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="http://id.portalgaruda.org/?ref=home"><img src="/openlibrary/img/garuda.png" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Open Access</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="http://id.portalgaruda.org/?ref=home" class="custom-link-color-dark">GARUDA</a></h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 col-xl-3 mb-4 pb-3 mb-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
					<div class="thumb-info thumb-info-hide-wrapper-bg custom-thumb-info-style-1">
						<div class="thumb-info-wrapper">
							<a href="http://arjuna.ristekdikti.go.id/"><img src="/openlibrary/img/arjuna.jpg" class="img-fluid" alt=""></a>
							<!-- <div class="thumb-info-price bg-color-secondary font-weight-semibold">
										<span>Open Access</span>
									</div> -->
						</div>
						<div class="thumb-info-caption">
							<h3 class="font-weight-semibold text-transform-none"><a href="http://arjuna.ristekdikti.go.id/" class="custom-link-color-dark">ARJUNA</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- SIM-LITABMAS -->
	<section class="section parallax section-parallax my-0 border-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%'}" data-image-src="/openlibrary/img/slide1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-11 col-lg-11 col-xl-11 appear-animation" data-appear-animation="fadeInLeftShorter">
					<div class="card">
						<div class="embed-responsive embed-responsive-16by9">
							<!-- <iframe scrolling="auto" class="embed-responsive-item" src="http://simlitabmas.ristekdikti.go.id/ejournal/Default.aspx"></iframe> -->
							<iframe name="frame1" scrolling="auto" src="http://simlitabmas.ristekdikti.go.id/ejournal/Default.aspx" style="border: none;" width="100%" height="100%" frameborder="yes"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimoni -->
	<section class="section bg-color-light border-0 my-0">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter">What Students Says</h2>
				</div>
			</div>
			<div class="row justify-content-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
				<div class="col">
					<div class="owl-carousel custom-nav m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true, 'autoHeight': true}">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style-1">
									<blockquote>
										<p>Dengan adanya Informatic Open Library ini pencarian literatur ilmiah semakin mudah dan terintegrasi</p>
									</blockquote>
									<div class="testimonial-author">
										<!-- <img src="img/demos/education/authors/author-1.jpg" class="img-fluid rounded-circle" alt /> -->
										<p>
											<strong class="text-uppercase text-color-dark">Azzam Jihad Ulhaq</strong>
										</p>
										<div class="rate">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
@endsection