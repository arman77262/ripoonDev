@extends('frontend.main_master')
@section('main')

@php
    $categoires = App\Models\Categories::get();
@endphp
<!-- home section start -->

	<section class="home" id="home">
		<div class="box-container">

			<div class="left-col">
				<h2 class="title">all brands</h2>
				<div class="box">
                    @foreach ($categoires as $cat)
                    <ul>
                    <li><a href="product_page.html"><img src="{{$cat->category_image}}" alt=""><p>{{strtoupper($cat->category_name)}}</p></a>

                        @php
                            $subcategoires = App\Models\Subcategory::where('cat_id', $cat->id)->get();
                        @endphp

                    @foreach ($subcategoires as $subcat)
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="product_page.html">{{strtoupper($subcat->subcat_name)}}</a></li>
                            </ul>
                        </div>
                    @endforeach

                </li>
                </ul>
                    @endforeach

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
