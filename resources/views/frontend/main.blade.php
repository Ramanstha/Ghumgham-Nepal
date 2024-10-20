<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ghumgham Nepal | @yield('title')</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/icon" href="{{asset('frontend/images/logo.png')}}" />
	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
		integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<!-- Slick slider -->
	<link href="{{asset('frontend/css/slick.css')}}" rel="stylesheet">
	<!-- Theme color -->
	<link id="switcher" href="{{asset('frontend/css/theme-color/default-theme.css')}}" rel="stylesheet">

	<!-- Main Style -->
	<link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

	<!-- Fonts -->

	<!-- Poppins For Title -->
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

</head>

<body>

    <div id="main">
        @include('frontend.layouts.header')

        @yield('content')

        @include('frontend.layouts.footer')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('#gallery').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        })
        jQuery(document).ready(function($) {
            $('#simg').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>

	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
		integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
	</script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- Slick slider -->
	<script type="text/javascript" src="{{asset('frontend/js/slick.min.js')}}"></script>
	<!-- Ajax contact form  -->
	<script type="text/javascript" src="{{asset('frontend/js/app.js')}}"></script>

	<!-- Custom js -->
	<script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/owlCarousel.js')}}"></script>
 
</body>

</html>