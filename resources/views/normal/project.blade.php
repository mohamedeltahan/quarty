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
        <div class="qrt-half-content-frame">
          <div class="qrt-left">

            <div class="row">
              <div class="col-lg-12">

                <h2 class="qrt-mb-40">{{$project->en_title}}</h2>

                <div class="qrt-page-cover qrt-cover-center">
                  <img src="{{asset("projects-photos/$project->photo_link")}}" alt="">
                  <div class="qrt-about-info qrt-right-position">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Order Date:</h5><span>{{$project->order_date}}</span>
                        </li>
                        <li>
                          <h5 class="qrt-white">Final Date:</h5><span>{{$project->final_date}}</span>
                        </li>
                        <li>
                          <h5 class="qrt-white">Location:</h5><span>{{$project->en_location}}</span>
                        </li>
                        <li>
                          <h5 class="qrt-white">Client:</h5><span>{{$project->en_client}}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="qrt-just-text">
                  <p>{{$project->en_description}}</p>
                  <p></p>
                </div>

                <div class="qrt-masonry-grid">
                  <div class="qrt-grid-sizer"></div>
                  @foreach(json_decode($project->GetPhotosNames(),true) as $photo)
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 architecture repair">
                    <div class="qrt-work-item"><a data-fancybox="works" href="{{asset("$photo")}}" class="qrt-cursor-scale qrt-work-cover-frame"><img src="{{asset("$photo")}}" alt="work cover">
                        <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      </a>
                    </div>
                  </div>
                  @endforeach
                </div>

                <div class="qrt-just-text">
                  <p>{{$project->en_description}}</p>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row d-none">
              <div class="col-lg-12">

                <div class="swiper-container qrt-brands-slider" style="overflow: visible">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="img/brands/b1.svg" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="img/brands/b2.svg" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="img/brands/b3.svg" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="img/brands/b4.svg" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="img/brands/b5.svg" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="img/brands/b6.svg" alt="brand">
                    </div>
                    <div class="swiper-slide">
                      <img src="img/brands/b7.svg" alt="brand">
                    </div>
                  </div>
                </div>

              </div>
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
            <div class="qrt-half-banner qrt-left-align qrt-animated-zoom">
              <div class="qrt-image-frame">
                <img src="{{asset("img/download.jpg")}}" alt="banner">
              </div>
              <div class="qrt-overlay ">
                <div class="qrt-scroll-hint d-none"><span></span></div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10 d-none">Our Works</h2>
                  <div class="qrt-divider-2 d-none"></div>
                  <a href="contact.html" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Get in
                      touch</span></a>
                </div>
              </div>
            </div>
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
