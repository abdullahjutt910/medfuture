<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dashboard-responsive.css') }}" rel="stylesheet" />
    @yield('styles')

</head>

<body class="sidebar-mini skin-purple" style="height: auto; min-height: 100%;">
    <div class="wrapper" style="height: auto; min-height: 100%;">
        <header class="main-header">
            <a href="#" class="logo">
                <img src="{{asset('img/dashboard/Medfuture_Logo.png')}}" class="img-fluid" alt="logo"> 
              </a>

            <nav class="navbar navbar-static-top">
              <div class="toggle-btn">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">{{ trans('global.toggleNavigation') }}</span>
                </a>
              </div>
                @if(count(config('panel.available_languages', [])) > 1)
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{ strtoupper(app()->getLocale()) }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <ul class="menu">
                                            @foreach(config('panel.available_languages') as $langLocale => $langName)
                                                <li>
                                                    <a href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endif
                <div class="form-search">  
                    <form action="#" method="">
                      <div class="search-bar">
                      <i class="fas fa-search"></i>
                      <!-- <img src="img/loupe.png" alt="search_icon"> -->
                      <input type="text" name="quick_access" placeholder="Quick Access">
                      </div>
                    </form>
                </div>
                <div class="nav-icons">
                  <div class="nav-icons-inner">
                    <a href="#">
                    <img src="{{asset('img/dashboard/bell-icon.png')}}" alt="bell-icon">
                    </a>
                  </div>
                  <div class="nav-icons-inner">
                    <a href="#">
                    <img src="{{asset('img/dashboard/Medkit.png')}}" alt="Medkit">
                    </a>
                  </div>
                  <div class="nav-icons-inner">
                  <a href="#">
                    <img src="{{asset('img/dashboard/doctors-logo.png')}}" alt="doctors-logo">
                    </a>
                  </div>
                  <div class="nav-icons-inner">
                  <a href="#">
                    <img src="{{asset('img/dashboard/job_icon.png')}}" alt="job_icon">
                    </a>
                  </div>
                  <div class="nav-icons-inner">
                  <a href="#">
                    <img src="{{asset('img/dashboard/document-icon.png')}}" alt="document-icon">
                    </a>
                  </div>
                </div>
                <div class="nav-profile">
                  <span>
                    <p>Peter Adams</p>
                    <p>peter23@gmail.com</p>
                  </span>
                    <img src="{{asset('img/dashboard/profile_img.png')}}" alt="profile_img">
                </div>
               
            </nav>
        </header>

        @include('partials.menu')

        <div class="content-wrapper" style="min-height: 960px;">
            @if(session('message'))
                <div class="row" style='padding:20px 20px 0 20px;'>
                    <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    </div>
                </div>
            @endif
            @if($errors->count() > 0)
                <div class="row" style='padding:20px 20px 0 20px;'>
                    <div class="col-lg-12">
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            @yield('content')
        </div>
        <footer class="main-footer text-center">
            <strong>{{ trans('panel.site_title') }} &copy;</strong> {{ trans('global.allRightsReserved') }}
        </footer>

        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js'></script>
    <script src="{{ asset('js/main.js') }}"></script>

  <!-- counter start here -->
  <script type='text/javascript'>
    !function(a){a.fn.percentageLoader=function(b){this.each(function(){function q(){p.customAttributes.arc=function(a,b,c){var h,d=360/b*a,e=(90-d)*Math.PI/180,f=j+c*Math.cos(e),g=k-c*Math.sin(e);return h=b==a?[["M",j,k-c],["A",c,c,0,1,1,j-.01,k-c]]:[["M",j,k-c],["A",c,c,0,+(d>180),1,f,g]],{path:h}},p.path().attr({arc:[100,100,l],"stroke-width":d.strokeWidth,stroke:d.bgColor}),e&&(m=p.path().attr({arc:[.01,100,l],"stroke-width":d.strokeWidth,stroke:d.ringColor,cursor:"pointer"}),r(e,100,l,m,2)),n=p.text(j,k,e).attr({font:d.fontWeight+" "+d.fontSize+" Lato",fill:d.textColor})}function r(a,b,c,d){f?d.animate({arc:[a,b,c]},900,">"):a&&a!=b?d.animate({arc:[a,b,c]},750,"elastic"):(a=b,d.animate({arc:[a,b,c]},750,"bounce",function(){d.attr({arc:[0,b,c]})}))}var c=a(this),d=a.extend({},a.fn.percentageLoader.defaultConfig,b),e=parseInt(c.children(d.valElement).text()),f=!0,h=parseInt(c.css("width")),i=parseInt(c.css("height")),j=h/2,k=i/2,l=j-d.strokeWidth/2,m=null,n=null,p=Raphael(this,h,i);q()})},a.fn.percentageLoader.defaultConfig={valElement:"p",strokeWidth:20,bgColor:"#D9D9D9",ringColor:"#686868",textColor:"#9A9A9A",fontSize:"33px",fontWeight:"normal"}}(jQuery);
  </script>
    <script type="text/javascript">
        $('.percent').percentageLoader({
          bgColor: '#686868',
          ringColor: '#0ABDE3',
          textColor: '#000',
          fontSize: '50px',
          strokeWidth: 10
        });
    </script>
    <!-- counter end here -->


   
    <script>
        $(function() {
  let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
  let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
  let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
  let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
  let printButtonTrans = '{{ trans('global.datatables.print') }}'
  let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
  let selectAllButtonTrans = '{{ trans('global.select_all') }}'
  let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

  let languages = {
    'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
  };

  $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
  $.extend(true, $.fn.dataTable.defaults, {
    language: {
      url: languages['{{ app()->getLocale() }}']
    },
    columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
    }, {
        orderable: false,
        searchable: false,
        targets: -1
    }],
    select: {
      style:    'multi+shift',
      selector: 'td:first-child'
    },
    order: [],
    scrollX: true,
    pageLength: 100,
    dom: 'lBfrtip<"actions">',
    buttons: [
      // {
      //   extend: 'selectAll',
      //   className: 'btn-primary',
      //   text: selectAllButtonTrans,
      //   exportOptions: {
      //     columns: ':visible'
      //   },
      //   action: function(e, dt) {
      //     e.preventDefault()
      //     dt.rows().deselect();
      //     dt.rows({ search: 'applied' }).select();
      //   }
      // },
      // {
      //   extend: 'selectNone',
      //   className: 'btn-primary',
      //   text: selectNoneButtonTrans,
      //   exportOptions: {
      //     columns: ':visible'
      //   }
      // },
      // {
      //   extend: 'copy',
      //   className: 'btn-default',
      //   text: copyButtonTrans,
      //   exportOptions: {
      //     columns: ':visible'
      //   }
      // },
      // {
      //   extend: 'csv',
      //   className: 'btn-default',
      //   text: csvButtonTrans,
      //   exportOptions: {
      //     columns: ':visible'
      //   }
      // },
      {
        extend: 'print',
        className: 'btn-default',
        text: 'Print',
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'excel',
        className: 'btn-default',
        text: excelButtonTrans,
        exportOptions: {
          columns: ':visible'
        }
      },
     
     
      {
        extend: 'colvis',
        className: 'btn-default',
        // text: colvisButtonTrans,
        text: 'Panel',
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: 'selectAll',
        className: 'btn-default',
        text: 'Per Page 100',
        exportOptions: {
          columns: ':visible'
        }
      },
      {
        extend: '',
        className: 'btn-default hide-search',
        text: '',
        exportOptions: {
          columns: ':visible'
        }
      }
    ]
  });

  $.fn.dataTable.ext.classes.sPageButton = '';
});

    </script>




<!-- <script>
      $("document").ready(function(){
          $("td").removeClass("sorting sorting_desc sorting_asc");
          $("td").removeAttr("aria-label aria-sort");
          $("td").removeAttr("aria-label aria-sort");
      })
     
    </script> -->
    <script>
      $("document").ready(function(){
         $(".candidate-crud-list-btn").each(function(){
           $(this, '.three-dots').click(function(){
            $(".three-dots").removeClass("v-hide");
          $('.candidate-update').addClass('v-hide');
             $(this).find(".three-dots").addClass("v-hide");
            $(this).find('.candidate-update').removeClass('v-hide');
           })
           
         })

       $(".table thead tr:last-child th:first-child").addClass("select-checkbox").prepend("<span class='check-box'></span>");
       $(".table thead tr:last-child th:first-child .check-box").click(function(){
        $(this).removeClass('check-box-select');

         if(!$("tbody tr").hasClass('selected')) {
          $("tbody tr").addClass('selected');
          $(this).addClass('check-box-select');
         }
         else {
         
         $("tbody tr").removeClass('selected');
         }
         });

         $(".candidate-profile-table .pagination .previous a").html(" ");
         $(".candidate-profile-table .pagination .next a").html(" ");
        //  $(".candidate-profile-table #dtpipeline_filter label").html('<input type="search" class="form-control input-sm" placeholder="" aria-controls="dtpipeline">');
         
         $(".hide-search").click(function(){
           $(".search-fields").toggleClass("search-fields-toggle");
         });

      $(".candidate-edit-btn").click(function(){
        $(".profile-information").hide();
        $(".profile-eidt-form").show();
      });

      $(".back-btn").click(function(){
        $(".profile-eidt-form").hide();
        $(".profile-information").show();
      });
      $(".profile-right-edit").click(function(){
        $(".profile-details-d-none").hide();
        $(".profile-details-eidt-form").show();
      });
      $(".back-btn").click(function(){
        $(".profile-details-eidt-form").hide();
        $(".profile-details-d-none").show();

      });

      $(".assign-edit-btn").click(function(){
        $(".assign-form-d-none").hide();
        $(".assign-eidt-form").show();
      });
      $(".back-btn").click(function(){
        $(".assign-eidt-form").hide();
        $(".assign-form-d-none").show();
      });

      $(".reference-edit-btn").click(function(){
        $(".reference-form-inner").hide();
        $(".reference-form-inner-d-none").show();
      });
      $(".back-btn").click(function(){
        $(".reference-form-inner-d-none").hide();
        $(".reference-form-inner").show();
      });
     
      $(".counter-edit-btn").click(function(){
        $(".counter-circle-d-none").hide();
        $(".counter-circle-form").show();
      });
      
      $(".back-btn").click(function(){
        $(".counter-circle-form").hide();
        $(".counter-circle-d-none").show();
      });

      $(".interview-edit-btn").click(function(){
        $(".interview-table").hide();
        $(".interview-form-d-none").show();
      });
      
      $(".back-btn").click(function(){
        $(".interview-form-d-none").hide();
        $(".interview-table").show();
      });

      $(".job-summary-eidt-btn").click(function(){
        $(".job-summary-eidt").hide();
        $(".job-summary-d-none").show();
      });
      
      $(".back-btn").click(function(){
        $(".interview-form-d-none").hide();
        $(".interview-table").show();
      });

      $(".testimonial-edit-btn").click(function(){
        $(".testimonial-txt-edit").hide();
        $(".testimonial-txt-d-none").show();
      });
      
      $(".back-btn").click(function(){
        $(".testimonial-txt-d-none").hide();
        $(".testimonial-txt-edit").show();
      });
      
    })
     
    </script>

    <!-- <script>
       $("window").load(function(){
        $(".candidate-profile-table .previous").addClass("abc");
      })
    </script> -->

    @yield('scripts')
</body>

</html>