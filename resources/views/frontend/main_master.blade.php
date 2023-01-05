<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ripon Autos</title>

	<!-- css links -->
	<link rel="stylesheet" href="{{asset('frontend/assets/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/media.css')}}">

	<link rel="icon" type="image/x-icon" href="{{asset('frontend/assets/images/logo.png')}}">
	<!-- front awsome cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
		integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


	<link rel="stylesheet" href="{{asset('frontend/assets/owl/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/assets/owl/owl.theme.default.min.css')}}">

</head>
<body>


	<!-- header section start -->

	@include('frontend.body.header')

	<!-- header section end -->


    @yield('main')



	<!-- footer section start -->

	@include('frontend.body.footer')

	<!-- footer section end -->





	<!-- custom js files -->
	<script src="{{asset('frontend/assets/script.js')}}"></script>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
		crossorigin="anonymous"></script>



	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
		integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
		crossorigin="anonymous"></script>

	<script src="{{asset('frontend/assets/owl.carousel.min.js')}}"></script>

	<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			nav: true,{{asset('frontend/')}}
			autoplay: true,
			autoplayTimeout: 1000,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 5
				}
			}
		})
	</script>
</body>
</html>
