@extends('frontend.main_master')
@section('main')

@php
    $categoires = App\Models\Categories::get();
      $subcategoires = App\Models\Subcategory::get();
@endphp
<!-- home section start -->

	<section class="home" id="home">
		<div class="box-container">

			<div class="left-col">
				<h2 class="title">all brands</h2>
				<div class="box">
					<ul>
						<li><a href="#"><img src="assets/images/side-1.webp" alt=""><p>OE BRANDS</p></a>

							<div class="sub-menu-1">
								<ul>
									<li><a href="product_page.html">BAJAJ</a></li>
									<li><a href="product_page.html">TVS</a></li>
									<li><a href="product_page.html">HERO</a></li>
									<li><a href="product_page.html">HONDA</a></li>
									<li><a href="product_page.html">SUZUKI</a></li>
									<li><a href="product_page.html">YAHMAH</a></li>
								</ul>
							</div>

						</li>
					</ul>

					<!-- <ul>
						<li class="hover-me"><a href="#">oe brands</a><i class="fas fa-angle-right"></i>

							<div class="sub-menu-2">
								<ul>
									<li><a href="">BAJAJ</a></li>
									<li><a href="">TVS</a></li>
									<li><a href="">HERO</a></li>
									<li><a href="">HONDA</a></li>
								</ul>
							</div>

						</li>
					</ul> -->

					{{-- <a href="product_page.html"><img src="assets/images/icon/varroc.png" alt="">
						<p>VARROC</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/gabriel.png" alt="">
						<p>GABRIEL</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/amaron.png" alt="">
						<p>AMARON</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/mk.png" alt="">
						<p>MK</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/limax.png" alt="">
						<p>LUMAX</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/aroma.png" alt="">
						<p>AROMA</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/sam.png" alt="">
						<p>SAM</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/suprajit.png" alt="">
						<p>SUPRAJIT</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/phoenix.png" alt="">
						<p>PHOENIX</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/ifb.png" alt="">
						<p>IFB</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/ultorn.png" alt="">
						<p>ULTRON</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/ucal.png" alt="">
						<p>UCAL</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/afkon.png" alt="">
						<p>AFKON</p>
					</a>
					<a href="product_page.html"><img src="assets/images/icon/art.png" alt="">
						<p>ART</p>
					</a> --}}
				</div>
			</div>

			{{-- slider section start --}}

           @include('frontend.slider')

			{{-- slider section end --}}

		</div>
	</section>


	<!-- home section end -->


	<!-- Product section start -->

	<section class="product">

		<div class="heading">
			<h2>two wheeler spare parts</h2>
			<a href="#">View All</a>
		</div>

		<div class="box-container">
			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-1.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-2.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-3.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-4.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-5.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-6.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-7.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-8.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>




		</div>


	</section>

	<!-- Product section end -->

	<section class="container">
		<div class="box-container"></div>
	</section>

	<!-- owl carusel start barnd section -->

	<section class="brands">

		<h2 class="title">Our Brands</h2>

		<div class="owl-carousel owl-theme">
			<div class="item">
				<img src="assets/images/icon/varroc.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/gabriel.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/amaron.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/mk.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/limax.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/aroma.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/sam.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/suprajit.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/phoenix.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/ifb.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/ultorn.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/ucal.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/afkon.png" alt="">
			</div>
			<div class="item">
				<img src="assets/images/icon/art.png" alt="">
			</div>
		</div>

	</section>

	<!-- owl carusel start barnd section -->

	<!-- mobil section start -->

	<section class="mobil product">

		<div class="heading">
			<h2>Engine oil</h2>
			<a href="#">View All</a>
		</div>

		<div class="box-container">

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/mob-1.png" alt="">
				<h3>Engine oil</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">33%</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/mob-2.png" alt="">
				<h3>Engine oil</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">33%</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/mob-3.png" alt="">
				<h3>Engine oil</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">33%</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/mob-4.png" alt="">
				<h3>Engine oil</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">33%</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/mob-5.png" alt="">
				<h3>Engine oil</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

		</div>

	</section>

	<!-- mobil section end -->


	<!-- Battery section start -->

	<section class="mobil product">

		<div class="heading">
			<h2>Amaron Battery</h2>
			<a href="#">View All</a>
		</div>

		<div class="box-container">

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/battery/1.png" alt="">
				<h3>Engine oil</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">33%</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/battery/2.png" alt="">
				<h3>Engine oil</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">33%</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/battery/3.png" alt="">
				<h3>Engine oil</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">33%</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/battery/4.png" alt="">
				<h3>Engine oil</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

		</div>

	</section>

	<!-- Battery section end -->


	<!-- Ripon autos porducts start -->

	<section class="product">

		<div class="heading">
			<h2>Ripon Autos Authorised Distributor Products</h2>
			<a href="#">View All</a>
		</div>

		<div class="box-container">
			<div class="box">
				<span class="discount">UCEL</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/car-1.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">IFB</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/chainkit.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-3.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-4.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-5.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-6.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-7.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>

			<div class="box">
				<span class="discount">BAJAJ</span>
				<div class="corner-box"><span></span></div>
				<img src="assets/images/p-8.png" alt="">
				<h3>two wheeler spare parts</h3>

				<button type="button" class="btn">DETAILS</button>
			</div>




		</div>


	</section>

	<!-- Ripon autos porducts end -->

@endsection
