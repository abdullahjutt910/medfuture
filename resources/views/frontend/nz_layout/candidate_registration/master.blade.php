<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/js/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/js/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/medfuture-locum.css') }}">
<script
  src="https://code.jquery.com/jquery-migrate-3.3.2.js"
  integrity="sha256-BDmtN+79VRrkfamzD16UnAoJP8zMitAz093tvZATdiE="
  crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .register-text{
            text-align: left;
            padding-top: 10px;
        }
        .register-candi-btn a {
    color: #fff;
}
      .register-candi-btn {
    background-color: #00326d;
    text-align: center;
    border-radius: 10px;
    padding: 10px;
}
        .register-candi {
    text-align: -webkit-right;
    margin-bottom: 39px;
}
        .sec-locum-banner{
            justify-content: start;
            background-image: url("frontend/./img/medium-shot-doctor-with-crossed-arms.png");
        }
        .banner-text{
            font-size: 63px;
            font-family: lato;
            font-weight: bold;
            color: #3f3f3f;
            margin-left: 300px;
        }
        .candidate-registration .reg-container{
            max-width: 1440px;
            width: 100%;
            padding: 0 15px;
            margin: 0 auto;
            padding-top: 70px;
        }
        .registration-forms-row{
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }
        .forms-col{
            width: 50%;
            padding: 0 15px;
        }
        .form-col-right{
            padding: 50px 45px 60px;
            box-shadow: 0px 0px 22px 0px rgba(14, 14, 14, 0.35);
        }
        .regis-radio-btn li:last-child p {
            margin-bottom: 20px;
        }
        .reg-top-heading{
            font-size: 19px;
            font-family: 'Lato', sans-serif;
            line-height: 22px;
            font-weight: bold;
            color: #0f0803;
            margin-bottom: 0px;
            padding-right: 0px;
        }
        .registration-heading{
            font-size: 39px;
            font-family: 'Lato', sans-serif;
            font-weight: 600;
            line-height: 80px;
            color: #002748;
        }
        .forms-colored-div{
            display: flex;
            margin-bottom: 15px;
            padding-left: 10px;
            padding-right: 8px;
        }
        .upload-resume .forms-colored-div {
            margin-left: -2px;
            margin-right: -2px;
            padding: 0px;
        }
        .personal-info{
            margin-bottom: 0;
            margin-top: 15px;
        }
        .registration-form-inner .select-arrow.country-select-arrow{
            right: 25px;
        }
        .upload-resume input{
            margin-bottom: 0;
        }
        .forms-colored-div .blue{border-top: 5px solid #0e4ead;width: 34%;}
        .forms-colored-div .purple{border-top: 5px solid #650e82;width: 33.33%;}
        .forms-colored-div .pink{border-top: 5px solid #f42793;width: 33.33%;}
        .form-select-lg, .form-control-lg{
            font-size: 14px;
            color: #0c0926;
        }
        .select-arrow{
            top: -6px;
        }
        input::placeholder{
            color: #0c0926!important;
        }
        .regis-radio-btn li{
            align-items: center;
        }
        .regis-radio-btn li input{
            width: 30px;
            height: 30px;
            flex-shrink: 0;
            box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.35);
            border-radius: 6px;
            border: 1px solid white!important;
            outline: none;
        }
        .regis-radio-btn li:last-child{
            align-items: flex-start;
        }
        .regis-page{
            padding-top: 0;
            padding-bottom: 55px;
        }
        .regis-page h3{
            font-size: 19px;
            font-family: 'Lato', sans-serif;
            color: #0f0803;
        }
        .regis-page li{
            font-size: 18px;
            line-height: 28px;
            color: #0f0803;
            font-family: Calibri;
        }
        .regis-page li .fas{
            color: #0f0803;
            font-size: 14px;
            font-weight: 600;
        }
        .reg-paragraphs p{
            font-size: 18px;
            line-height: 28px;
            color: #0f0803;
            margin-bottom: 40px;
            font-family: Calibri;
        }
        .reg-paragraphs p span{
            font-size: 18px;
            line-height: 28px;
            color: #6f8db2;
            margin-bottom: 40px;
            font-family: Calibri;
        }
        .pswrd-forget a{
            text-decoration:underline;
            display: flex;
            justify-content: flex-end;
            font-size: 14px;
            color: #3f3f3f;
            margin-right: 5px;
        }
        .registration-form{
            padding-top: 0;
            padding-bottom: 0;
        }
        .form-break-heading{
            overflow: hidden;
             text-align: center;
             width: 96%;
             margin: 0 auto;
             margin-bottom: 7px;
        }
        .form-break-heading::before,.form-break-heading::after {
            background-color: #7f7f7f;
            content: "";
            display: inline-block;
            height: 1px;
            position: relative;
            vertical-align:middle;
            width: 50%;
        }
        .form-break-heading::before{
            right: 0;
            margin-left: -50%;
        }
        .form-break-heading::after{
            right: 0;
            margin-right: -50%;
        }
        .social-icons-divs .cont-button {
            padding: 12px 30px;
            margin: 6px 0;
            justify-content: space-between;
            color: #5a5a5a;
            display: flex;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            font-family: lato;
            line-height: 23px;
            border: 1px solid #7d7d7d;
            max-width: 290px;
            width: 100%;

        }
        .social-icons-divs .cont-button:hover{
            background-color: #4567b2;
            color: white;
        }
        .social-icons-divs .icons{
            color: #4567b2;
        }
        .social-icons-divs .cont-button:hover .icons{
            color: white!important;
        }
       .social-icon-first-row, .social-icon-second-row{
           display: flex;
           flex-wrap: wrap;
           justify-content: space-between;
       }
       .social-icon-second-row{
           margin-bottom: 43px;
       }
    
       .cv-upload{
           visibility: hidden;
       }
       .upload-resume{
           position: relative;
           cursor: pointer;
           /* display: flex;
           justify-content: center;
           align-items: center;
           text-align: center; */
       }
       .upload-btn{
           background-color: #d5d5d5;
           width: 94%;
           position: absolute;
           top: 0;
           left: 0;
           bottom: 20px;
           right: 0;
           margin-left: 10px;
           color: black;
           display: flex;
           text-align: center;
           /* justify-content: center; */
           padding: 0 30px;
           align-items: center;
           
       }
       .upload-btn img{
           margin-right: 20px;
       }
       @media(max-width:1360px){
        .registration-heading{
            font-size: 26px;
            line-height: 50px;
        }
        .regis-page h3{
            font-size: 15px;
        }
        .regis-page li {
            font-size: 16px;
        }
        .regis-page li .fas {
            font-size: 12px;
        }
        .reg-paragraphs p {
            font-size: 16px;
        }
        .social-icons-divs .cont-button {
            max-width: 248px;
            padding: 11px 18px;
        }
        .reg-top-heading {
            font-size: 17px;
            line-height: 19px;
        }
        .select-arrow::after{
            top:28px
        }
        .regis-radio-btn li{
            margin-bottom: 10px;
        }
        .registration-form-line{
            margin-top: 15px;
            margin-bottom: 22px;
        }

       }
       @media(max-width:1199px){
        .registration-form-inner .how_did{
            width: 100%;
        }
        .candidate-registration .reg-container {
            padding-top: 30px;
        }
        .forms-col{
            width: 100%;
        }
        .form-col-right {
            margin-bottom: 30px;
        }
        .social-icons-divs .cont-button{
            max-width: 428px;
            padding: 12px 43px;
        }
       }
       @media(max-width:991px){
        .social-icons-divs .cont-button {
            max-width: 330px;
        }
        .sec-locum-banner{
            min-height: 290px;
        }
        .banner-text{
            font-size: 48px;
            margin-left: 100px;
        }

       }
       @media(max-width:767px){
        .social-icons-divs .cont-button {
            max-width: 237px;
            padding: 12px 15px;
        }
        .sec-locum-banner{
            min-height: 216px;
        }
        .banner-text{
            font-size: 40px;
        }
       }
       @media(max-width:575px){
        .sec-locum-banner{
            min-height: 137px;
        }
        .banner-text{
            font-size: 25px;
            margin-left: 12px;
        }
        .social-icons-divs .cont-button {
            max-width: 130px;
            padding: 5px 5px;
            font-size: 11px;
            align-items: center;
        }
        .regis-btn{
            font-size: 14px;
            padding: 10px 40px;
        }
        .social-icon-second-row {
            margin-bottom: 8px;
        }
        .registration-heading {
            font-size: 20px;
            line-height: 38px;
        }
        .regis-page h3 {
            font-size: 12px;
            line-height: 16px;
        }
        .regis-page li {
            font-size: 12px;
        }
        .regis-page li .fas {
            font-size: 10px;
        }
        .reg-paragraphs p {
            font-size: 12px;
        }
        .reg-top-heading {
            font-size: 10px;
            line-height: 12px;
        }
        .regis-radio-btn li p {
            font-size: 13px;
        }
        .regis-radio-btn li:last-child p {
            font-size: 13px;
        }
        .regis-radio-btn li input {
            width: 20px;
            height: 20px;
        }


       }
    </style>
</head>
<body>
   <div class="wrapper">
    <!--header starts here-->
    @include('frontend.nz_layout.candidate_registration.header')
    <!-- header end here -->
       
    <!--content-->
    @yield('content')
    <!--content-->

       <!--footer--->
       @include('frontend.nz_layout.candidate_registration.footer')
       <!--footer end here-->
   </div>
   
    <!-- Testimonial slider start -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('frontend/css/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/./js/scripts.js') }}"></script>
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
        $(document).ready(function () {
            $('.upload-btn').click(function(){
                $('.cv-upload').click();
            });
        });
    </script>


    <!-- Testimonial slider end -->
</body>
</html>