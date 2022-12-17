<script type="text/javascript" src="{{URL::to('/')}}/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/assets/js/bootstrap.bundle.min.js"></script>

<!-- Vendor JS Files -->
<script src="{{URL::to('/')}}/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="{{URL::to('/')}}/assets/js/slick.min.js"></script>

<script type="text/javascript" src="{{URL::to('/')}}/assets/js/main.js"></script>

<script type="text/javascript">
	$('.tim').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  speed:800,
	  autoplaySpeed: 700,
	  prevArrow:'<i class="bx bx-chevron-left left-arrow">',
	  nextArrow:'<i class="bx bx-chevron-right right-arrow">',
	});

	$('.your-class').slick({
	  arrows:false,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplay: true,
	  speed:800,
	  autoplaySpeed: 700,
	});
</script>