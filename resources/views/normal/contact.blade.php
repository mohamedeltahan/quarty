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

            <div class="row qrt-p-0-40">
              <div class="col-lg-12">

                <div class="qrt-page-cover">
                  <img src="{{asset("img/our_office.jpg")}}" alt="our office">
                  <div class="qrt-about-info qrt-info-lg">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Phone:</h5><a href="#." data-no-swup><span>+9 3(049) 482 95 23</span></a>
                        </li>
                        <li>
                          <h5 class="qrt-white">Email:</h5><a href="mailto:quarty.inbox@mail.com" data-no-swup><span>quarty.inbox@mail.com</span></a>
                        </li>
                        <li>
                          <h5 class="qrt-white">Adress:</h5><a href="https://goo.gl/maps/MAa6Au5d9ZMgSfBV7" target="_blank" data-no-swup><span>2420 Jane St, Downsview</span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Get in touch</h3>

              </div>
              <div class="col-lg-12">

                <form action="{{route("contactus.store")}}" id="form" class="qrt-contact-form" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="qrt-form-field">
                        <input id="name" name="name" class="qrt-input" type="text" placeholder="Name" required>
                        <label for="name"><i class="fas fa-user"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="qrt-form-field">
                        <input id="email" name="email" class="qrt-input" type="email" placeholder="Email Or Phone" required>
                        <label for="email"><i class="fas fa-at"></i></label>
                      </div>
                    </div>
                   
                    <div class="col-lg-12">
                      <div class="qrt-form-field">
                        <textarea id="message" name="text" class="qrt-input" placeholder="Message" required></textarea>
                        <label for="message"><i class="far fa-envelope"></i></label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="qrt-mb-20">We promise not to disclose your personal information to third parties.</div>
                    </div>
                    <div class="col-md-6">
                      <div class="qrt-submit-frame qrt-text-right qrt-sm-text-left qrt-mb-40">
                        <button class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale" type="submit"><span>Send message</span></button>
                      </div>
                    </div>

                  </div>
                </form>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
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
                  <h4>Learn more about us!</h4>
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="about-us.html"><span>About us</span></a>
                </div>

              </div>
            </div>

          </div>
          <div id="fixed" class="qrt-right">
            <div class="qrt-map-frame">
              <div class="qrt-lock"><i class="fas fa-lock"></i></div>
              <div id="map" class="qrt-map"></div>
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
