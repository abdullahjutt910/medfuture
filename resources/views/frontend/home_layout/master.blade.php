<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-1.8.1/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive-f.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap');
    </style>
    <title>Medfuture</title>
</head>

<body>

    <!-- header starts here-->
    @include('frontend.home_layout.header')
    <!-- header ends here-->

   @yield('content')

   @include('frontend.home_layout.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('frontend/css/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/css/slick-1.8.1/slick/slick.js') }}"></script>
    <script src="{{ asset('frontend/css/slick-1.8.1/slick/slick.min.js') }}"></script>

    <!-- Testimonial slider start -->
    <script>
        $(document).ready(function () {
            $('.banner-slider').slick({
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: false,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>


    <!-- Testimonial slider end -->

</body>

</html>