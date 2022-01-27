$(document).ready(function () {

    // $(window).on('load', function(){
    
    
    // var path = $('.refer-reward').attr('path');
    // $('.sec-doctor-list .nav-link').removeClass('active');
    // $('.sec-doctor-list .tab-pane').removeClass('active');
    // $('#'+path+'-tab').addClass('active');
    // $('.sec-doctor-list #v-pills-refer').addClass('active show');

    // $('.doctor-permanent').click(function(){
    //     $('#v-pills-refer-tab').removeClass('active');
    //     $('.sec-doctor-list #v-pills-refer').removeClass('active show');
    //     var secondPath = $('.doctor-permanent').attr('path');
    //     $('.sec-doctor-list .nav-link').removeClass('active');
    //     $('.sec-doctor-list .tab-pane').removeClass('active');
    //     $('#'+secondPath+'-tab').addClass('active');
    //     $('.sec-doctor-list #v-pills-permanent').addClass('active show');
        
    // });


// })

$('.check-btn').click(function () {
    $('.locum-check-details').hide(); 
    $(this).parents('.locum-check-details-shade').find('.locum-check-details').toggle();
});

$('.check-btn-locum').click(function () {
    $('.locum-check-details').hide(); 
    $(this).parents('.locum-patent').find('.locum-check-details').toggle();
});

// filter start here

$('.locum-filter-patent .locum-filter-icon-hide').click(function(){
    $(this).parents('.locum-filter-patent').find('.locum-filter-hide').toggle();
    $(this).find('i').toggleClass('fa-minus fa-plus');
});

});

// filter
// check button details


$(document).ready(function () {

    $(".same-tab").click(function(){
        $(".sec-adv-search").show();
        $(".sec-adv-search-detail").show();
    });
    $(".same-tab-again").click(function(){
        $(".sec-adv-search").hide();
        $(".sec-adv-search-detail").hide();
    });



    // candidate profession filter
    $('.profession-doctor-filter').change(function () {
        var text = $('option:selected', this).text();
        if(text === "Doctor"){
          $(" .doctor-specialty-d-none").show();
          $(" .nurse-specialty-d-none,.AHP-Specialty-d-none, .HE-Specialty-d-none").hide();
          $(" .seniority-doctor-d-none").show();
          $(" .nurse-seniority-d-none").hide();
        }
        if(text === "Nurse"){
          $(" .nurse-specialty-d-none").show();
          $(".doctor-specialty-d-none,  .AHP-Specialty-d-none, .HE-Specialty-d-none").hide();
          $(" .nurse-seniority-d-none").show();
          $(" .seniority-doctor-d-none").hide();
         }
         if(text === "Allied Health Professionals"){
          $("  .AHP-Specialty-d-none").show();
          $(" .doctor-specialty-d-none,  .nurse-specialty-d-none,  .HE-Specialty-d-none").hide();
         }
         if(text === "Healthcare Executives"){
          $(" .HE-Specialty-d-none").show();
          $(" .doctor-specialty-d-none,  .AHP-Specialty-d-none,  .nurse-specialty-d-none").hide();
         }

        });

        
});

// candidate slider start here
        $(document).ready(function () {
            $('.north-dropdown-slider').slick({
                dots: false,
                variableWidth: true,
                infinite: false,
                arrows: true,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
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

// candidate slider end here


// footer top slider start here

        $(document).ready(function () {
            $('.testi-slider').slick({
                dots: false,
                infinite: false,
                arrows: true,
                autoplay: true,
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