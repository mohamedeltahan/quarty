<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#28292C">
  <!-- favicon  -->
  <link rel="shortcut icon" href="{{asset("quarty_styles/img/thumbnail.ico")}}"  type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{asset("quarty_styles/css/plugins/bootstrap.min.css")}}">
  <!-- font awesome css -->
  <link rel="stylesheet" href="{{asset("quarty_styles/css/plugins/font-awesome.min.css")}}" >
  <!-- swiper css -->
  <link rel="stylesheet" href="{{asset("quarty_styles/css/plugins/swiper.min.css")}}">
  <!-- fancybox css -->
  <link rel="stylesheet" href="{{asset("quarty_styles/css/plugins/fancybox.min.css")}}">
  <!-- mapbox css -->
  <link  href="{{asset("quarty_styles/css/plugins/mapbox-style.css")}}" rel='stylesheet'>
  <!-- main css -->
  <link rel="stylesheet"  href="{{asset("quarty_styles/css/style.css")}}" >

  <title>Quarty</title>
</head>

<body>

  <div class="qrt-app">
    <div class="qrt-preloader">
      <div class="qrt-preloader-content">
        <div class="qrt-logo">
          <img src="img/logo.svg" alt="Quarty">
        </div>
        <div id="preloader" class="qrt-preloader-load"></div>
      </div>
    </div>
    <div id="cursor" class="qrt-cursor">
      <div></div>
      <div class="qrt-follower"><i class="fas fa-circle-notch"></i></div>
    </div>
    
    @include("includes.topbar")
    @include("includes.leftbar");
   
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-content-frame">
          <div class="qrt-left">

            <div class="qrt-filter qrt-mb-40">
              <a href="#" data-filter="*" class="qrt-work-category qrt-current qrt-filter-icon qrt-cursor-color qrt-cursor-scale"><i class="fas fa-filter"></i>All Categories</a>
              @foreach(App\Models\Category::all() as $category)
              <a href="#" data-filter=".{{$category->en_title}}" class="qrt-work-category qrt-cursor-color qrt-cursor-scale">{{$category->en_title}}</a>
              @endforeach
            </div>

            <div class="qrt-masonry-grid qrt-mb-40">
              <div class="qrt-grid-sizer"></div>
              @foreach(App\Models\Project::all() as $project)
              <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 {{App\Models\Category::find($project->id)->en_title}}">
                <div class="qrt-work-item"><a data-fancybox="works" href="{{asset("projects-photos/$project->photo_link")}}" class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{asset("projects-photos/$project->photo_link")}}" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>{{App\Models\Category::find($project->id)->en_title}}</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="{{route("projects.show",$project->id)}}" class="qrt-anima-link">{{$project->en_title}}</a></h4><a href="{{route("projects.show",$project->id)}}" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>            
            @endforeach
          </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="qrt-call-to-action">
                  <h4>Do you have a project?</h4><a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="contact.html"><span>Let's discuss</span></a>
                </div>
              </div>
            </div>
          </div>
          <div id="fixed" class="qrt-right">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jquery js -->
  <script  src="{{asset("quarty_styles/js/plugins/jquery.min.js")}}"></script>
  <!-- anime js -->
  <script  src="{{asset("quarty_styles/js/plugins/anime.min.js")}}"></script>
  <!-- swiper js -->
  <script src="{{asset("quarty_styles/js/plugins/swiper.min.js")}}"></script>
  <!-- progressbar js -->
  <script  src="{{asset("quarty_styles/js/plugins/progressbar.min.js")}}"></script>
  <!-- smooth scrollbar js -->
  <script src="{{asset("quarty_styles/js/plugins/smooth-scrollbar.min.js")}}" ></script>
  <!-- overscroll js -->
  <script src="{{asset("quarty_styles/js/plugins/overscroll.min.js")}}" ></script>
  <!-- isotope js -->
  <script src="{{asset("quarty_styles/js/plugins/isotope.min.js")}}"></script>
  <!-- fancybox js -->
  <script src="{{asset("quarty_styles/js/plugins/fancybox.min.js")}}" ></script>
  <!-- swup js -->
  <script src="{{asset("quarty_styles/js/plugins/swup.min.js")}}"></script>
  <!-- mapbox js -->
  <script src="{{asset("quarty_styles/js/plugins/mapbox.min.js")}}"></script>

  <!-- main js -->
  <script src="{{asset("quarty_styles/js/main.js")}}"></script>

</body>

</html>
