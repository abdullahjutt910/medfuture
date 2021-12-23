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

    <!-- <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap');
    </style> -->
    <title>Medfuture-Home Page index1_AU</title>
    <style>
        @font-face {
            font-family: Lato-Bold;
            src: url(frontend/font/Lato-Bold.ttf);
        }

        @font-face {
            font-family: Lato-Regular;
            src: url(frontend/font/Lato-Regular.ttf);
        }

        @font-face {
            font-family: CalibriRegular;
            src: url(frontend/font/Calibri\ Light.ttf);
        }

        @font-face {
            font-family: MyriadproRegular;
            src: url(frontend/font/Myriad\ Pro\ Regular/);
        }

        @font-face {
            font-family: Lato-Light;
            src: url(frontend/font/Lato-Light.ttf);
        }

        .sec-doctor-banner {
            background-image: url(frontend/img/Rectangle\ 1.png);
            min-height: 656px;
        }

        .sec-doctor-banner h1 {
            color: #000;
            font-family: Lato-Bold;
            font-size: 78px;
        }

        .sec-doctor-banner button {
            color: #fff;
            background: #45484e;
            border: none;
            border-radius: 30px;
            padding: 10px 20px 10px 20px;
            margin-top: 17px;
        }

        .sec-doctor-banner button span {
            font-family: Lato-Regular;
            font-size: 20px;
            border-right: 1px solid grey;
            margin-right: 15px;
            padding: 0px 15px 8px 20px;
        }

        .bannerData {
            width: 472px;
            /* margin-left: 160px; */
            padding-top: 160px;
        }

        .job-form-inner .col-2 {
            width: 19.666667%;
        }

        /* .select-arrow::after {
            left: 190px
        } */
        .select-arrow::after{
            top: 26px;
        }
        .job-search {
            margin-top: -85px;
            background-color: #0b5291;
            display: block;
        }

        .borderGradient {
            display: flex;
        }

        .gradientColor {
            height: 5px;
            width: 33.34%;
        }

        .job-seaker-col {
            width: 22%;
            padding: 0;
        }

        .job-seaker-inner {
            padding-left: 0px;
        }

        .sec-job-seaker p {
            font-size: 22px;
            line-height: 28px;
            font-family: CalibriRegular;
            text-align: center;
            margin-bottom: 70px;
        }

        .job-form button {
            background-color: #45484e;
            padding: 12px;
        }

        .sec-job-seaker {
            background: #fff;
        }

        .sec-job-seaker .box-shadow {
            box-shadow: 0px 2px 10px #0000004a;
            border-radius: 25px;
            padding-bottom: 0px !important;
        }

        .sec-job-seaker .heading-seaker {
            box-shadow: none;
        }

        .registerSection .arrowImg {
            background: #fff;
            width: 40px;
            height: 40px;
            padding: 9px;
            border-radius: 50%;
        }

        .registerSection h3 {
            font-family: Lato-Bold;
            font-size: 28px;
            color: #fff;
            margin-bottom: 0;
        }

        .registerSection p {
            font-family: Lato-Bold;
            font-size: 17px;
            color: #fff;
            margin-bottom: 0;
        }

        .registerSection .headPara {
            width: 450px;
            padding-right: 50px;
            margin-left: 50px;
        }

        .registerSection .sideImg {
            width: 529px;
            object-fit: cover;
        }

        .registerSection .registerSectionInner {
            padding: 143px 0 60px 143px;
        }

        .abm {
            text-align: center;
        }

        .abm p {
            font-family: Lato-Regular;
            font-size: 17px;
            line-height: 22px;
            height: 85px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .abm .abmInner {
            background-color: #797979;
            width: 30%;
            padding: 0;
            color: #fff;
        }

        .abmInner h4 {
            font-family: Lato-Light;
            font-size: 28px;
        }

        .abm .abmInner a {
            color: #fff;
            text-decoration: revert;
        }

        .abm .abmInner .abmInner2 {
            padding: 20px;
        }
        .sec-job-seaker h1{
            color: #002748;
        }
    </style>
</head>

<body>
    <!-- header starts here-->
    @include('frontend.aus_layout.header')
    <!-- header end here -->

    <!--content-->
   @yield('content')
    <!--content end-->

    <!--footer-->
    @include('frontend.aus_layout.footer')
    <!-- end footer-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('frontend/css/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/css/slick-1.8.1/slick/slick.js') }}"></script>
    <script src="{{ asset('frontend/css/slick-1.8.1/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/./js/scripts.js') }}"></script>
    <!-- <script> 
    $(document).ready(function () {
            const currentLocation = location.href;
            const menuItem = document.querySelectorAll(".sidebarlink");
            const menuLength = menuItem.length;
            for (let i = 0; i < menuLength; i++) {
                if (menuItem[i].href === currentLocation) {
                    menuItem[i].className = "active";
                }
            }
        });
    </script> -->
    
    <script>
        $(document).ready(function () {
            $(".oversease-data").click(function () {
                $(".sec-adv-search").hide();
                $(".sec-adv-search-detail").hide();

            });
        });
    </script>
    <!-- Testimonial slider start -->
    <script>
        $(document).ready(function () {
            $('.testi-slider').slick({
                dots: false,
                infinite: false,
                arrows: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            arrows: true,
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