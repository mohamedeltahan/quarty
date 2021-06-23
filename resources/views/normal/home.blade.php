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
        <div class="swiper-container qrt-main-slider-onepage">
          <div class="qrt-slider-pagination">
            <div class="swiper-pagination swiper-main-pagination"></div>
          </div>
          <div class="qrt-slider-navigation qrt-absolute">
            <div class="qrt-slider-nav-btn qrt-main-prev qrt-cursor-scale qrt-cursor-color"><i class="fas fa-arrow-left"></i><span>prev</span></div>
            <div class="qrt-slider-nav-btn qrt-main-next qrt-cursor-scale qrt-cursor-color"><span>next</span><i class="fas fa-arrow-right"></i></div>
          </div>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="img/projects/original-size/1.jpg" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Architecture - <br> petrified music</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="about-us.html" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="contact.html" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="img/projects/original-size/3.jpg" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Architecture is <br>about creating order</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="about-us.html" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="contact.html" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="qrt-project-cover">
                <div class="qrt-image-frame">
                  <img class="" src="img/projects/original-size/2.jpg" alt="project cover" data-swiper-parallax="400" data-swiper-parallax-scale="1.4">
                </div>
                <div class="qrt-overlay">
                  <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                    <div class="qrt-banner-title">
                      <h1 class="qrt-white qrt-mb-30">Our knowledge <br>is your property</h1>
                      <div class="qrt-divider-2"></div>
                      <div class="qrt-text qrt-white qrt-mb-20">Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, and hopefully, happiness.</div>
                      <a href="about-us.html" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Explore now</span><i class="fas fa-arrow-right"></i></a>
                      <a href="contact.html" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>Contact</span><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="qrt-content-frame">

          <div class="qrt-left">
            <div class="row">
              <div class="col-lg-4">

                <h3 class="qrt-mb-40">We are creative <br>building - design company</h3>

              </div>
              <div class="col-lg-8 qrt-mb-25">

                <p>We have intentionally never developed a stylistic formula for our work, which is why our projects never quite look or feel the same. Each of our spaces is the result of our ability to listen, which has turned our designs and
                  buildings into personal reflections of our clients’ personalities and values, which we co-construct through research, workshops and surveys.</p>

                <p>In our studio, every project is an open ended enquiry, helping people to challenge their existing state and work towards an alternative, desired one. We provide guidance, expertise and experience across all phases in the
                  architectural process, ranging from thinking, to designing, building, and ultimately finding the right way to communicate the results.</p>

              </div>
              <div class="col-lg-12">

                <blockquote>
                  Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, wellbeing and hopefully, happiness.
                </blockquote>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">10</span>
                  </div>
                  <h5>Years Experience</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">143</span>
                  </div>
                  <h5>Completed Projects</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">114</span>
                  </div>
                  <h5>Happy Customers</h5>
                </div>

              </div>
              <div class="col-lg-3 col-sm-6">

                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">20</span>
                  </div>
                  <h5>Honors and Awards</h5>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Our team</h3>

              </div>
              <div class="col-lg-3">

                <div class="qrt-team-member">
                  <a href="about-me.html" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                    <img src="img/team/tm1.jpg" alt="team member">
                  </a>
                  <div class="qrt-team-member-description">
                    <div class="qrt-member-name">
                      <h4 class="qrt-white qrt-qrt-mb-5">Viktoria Freeman</h4>
                      <span>Chief Architect</span>
                    </div>
                    <a href="about-me.html" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>

              </div>
              <div class="col-lg-3">

                <div class="qrt-team-member">
                  <a href="about-me.html" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                    <img src="img/team/tm2.jpg" alt="team member">
                  </a>
                  <div class="qrt-team-member-description">
                    <div class="qrt-member-name">
                      <h4 class="qrt-white qrt-qrt-mb-5">Paul trueman</h4>
                      <span>Chief Architect</span>
                    </div>
                    <a href="about-me.html" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>

              </div>
              <div class="col-lg-3">

                <div class="qrt-team-member">
                  <a href="about-me.html" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                    <img src="img/team/tm3.jpg" alt="team member">
                  </a>
                  <div class="qrt-team-member-description">
                    <div class="qrt-member-name">
                      <h4 class="qrt-white qrt-qrt-mb-5">Emma Newman</h4>
                      <span>Chief Architect</span>
                    </div>
                    <a href="about-me.html" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>

              </div>
              <div class="col-lg-3">

                <div class="qrt-team-member">
                  <a href="about-me.html" class="qrt-cursor-scale qrt-team-item qrt-anima-link">
                    <img src="img/team/tm4.jpg" alt="team member">
                  </a>
                  <div class="qrt-team-member-description">
                    <div class="qrt-member-name">
                      <h4 class="qrt-white qrt-qrt-mb-5">Anna Oldman</h4>
                      <span>Chief Architect</span>
                    </div>
                    <a href="about-me.html" class="qrt-cursor-scale qrt-member-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Prices</h3>

              </div>
              <div class="col-lg-3">

                <div class="qrt-a qrt-price">
                  <div class="qrt-price-body">
                    <h5 class="qrt-mb-20">Starter Price</h5>
                    <div class="qrt-price-cost">
                      <div class="qrt-number">FREE<sup>*</sup></div>
                    </div>
                    <ul class="qrt-price-list">
                      <li>Ui Design</li>
                      <li>Web Development</li>
                      <li class="qrt-empty-item">Logo design</li>
                      <li class="qrt-empty-item">SEO optimization</li>
                      <li class="qrt-empty-item">Wordpress integration</li>
                    </ul>
                    <a class="qrt-btn qrt-btn-md qrt-cursor-scale qrt-anima-link" href="contact.html"><span>Order now</span><i class="fas fa-arrow-right"></i></a>
                    <div class="qrt-asterisk"><sup>*</sup>Free only when ordering paid services</div>
                  </div>
                </div>

              </div>
              <div class="col-lg-3">

                <div class="qrt-a qrt-price qrt-popular-price">
                  <div class="qrt-price-body">
                    <h5 class="qrt-mb-20">Hourly payment</h5>
                    <div class="qrt-price-cost">
                      <div class="qrt-number"><span>$</span>29<span>h</span></div>
                    </div>
                    <ul class="qrt-price-list">
                      <li>Ui Design</li>
                      <li>Web Development</li>
                      <li>Logo design</li>
                      <li class="qrt-empty-item">SEO optimization</li>
                      <li class="qrt-empty-item">Wordpress integration</li>
                    </ul>
                    <a class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link" href="contact.html"><span>Order now</span><i class="fas fa-arrow-right"></i></a>
                  </div>

                </div>

              </div>
              <div class="col-lg-3">

                <div class="qrt-a qrt-price">
                  <div class="qrt-price-body">
                    <h5 class="qrt-mb-20">Part time</h5>
                    <div class="qrt-price-cost">
                      <div class="qrt-number"><span>$</span>1999<span>m</span></div>
                    </div>
                    <ul class="qrt-price-list">
                      <li>Ui Design</li>
                      <li>Web Development</li>
                      <li>Logo design</li>
                      <li>SEO optimization</li>
                      <li class="qrt-empty-item">Wordpress integration</li>
                    </ul>
                    <a class="qrt-btn qrt-btn-md qrt-cursor-scale qrt-anima-link" href="contact.html"><span>Order now</span><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>

              </div>
              <div class="col-lg-3">

                <div class="qrt-a qrt-price">
                  <div class="qrt-price-body">
                    <h5 class="qrt-mb-20">Full time</h5>
                    <div class="qrt-price-cost">
                      <div class="qrt-number"><span>$</span>2999<span>m</span></div>
                    </div>
                    <ul class="qrt-price-list">
                      <li>Ui Design</li>
                      <li>Web Development</li>
                      <li>Logo design</li>
                      <li>SEO optimization</li>
                      <li>Wordpress integration</li>
                    </ul>
                    <a class="qrt-btn qrt-btn-md qrt-cursor-scale qrt-anima-link" href="contact.html"><span>Order now</span><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Testimonials</h3>

              </div>
              <div class="col-lg-12">

                <div class="swiper-container qrt-testimonials-slider" style="overflow: visible">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="qrt-testimonial">
                        <div class="qrt-testimonial-header">
                          <img src="img/testimonials/t1.jpg" alt="customer">
                          <div class="qrt-testimonial-name">
                            <h4 class="qrt-mb-5">Paul Trueman</h4>
                            <div class="qrt-el-suptitle">Chief Architect</div>
                          </div>
                        </div>
                        <div class="qrt-testimonial-text">
                          We worked with Quarty Studio for approximately 2 years on the complete overhaul of our house. This included the design of the project, and the execution of the work. Quarty provided excellent design ideas but
                          were also
                          indispensable in managing the practical side of the build.
                        </div>
                        <ul class="qrt-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="qrt-testimonial">
                        <div class="qrt-testimonial-header">
                          <img src="img/testimonials/t2.jpg" alt="customer">
                          <div class="qrt-testimonial-name">
                            <h4 class="qrt-mb-5">Emma Newman</h4>
                            <div class="qrt-el-suptitle">Chief Architect</div>
                          </div>
                        </div>
                        <div class="qrt-testimonial-text">
                          We engaged Paul Trueman of quarty Studio to manage the planning process and to design and manage a full renovation and remodelling of our 1930s house. We really enjoyed working with Paul. We would not hesitate to
                          recommend Paul and Quarty.
                        </div>
                        <ul class="qrt-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="qrt-testimonial">
                        <div class="qrt-testimonial-header">
                          <img src="img/testimonials/t3.jpg" alt="customer">
                          <div class="qrt-testimonial-name">
                            <h4 class="qrt-mb-5">Viktoria freeman</h4>
                            <div class="qrt-el-suptitle">Chief Architect</div>
                          </div>
                        </div>
                        <div class="qrt-testimonial-text">
                          We worked with Quarty Studio for approximately 2 years on the complete overhaul of our house. This included the design of the project, and the execution of the work. Quarty provided excellent design ideas but
                          were also
                          indispensable in managing the practical side of the build.
                        </div>
                        <ul class="qrt-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li class="qrt-empty"><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="col-6">

                <div class="swiper-testi-pagination qrt-cursor-color qrt-cursor-scale"></div>

              </div>
              <div class="col-6">

                <div class="qrt-slider-nav">
                  <!-- prev -->
                  <div class="qrt-slider-prev qrt-testi-prev qrt-cursor-color qrt-cursor-scale"><i class="fas fa-arrow-left"></i></div>
                  <!-- next -->
                  <div class="qrt-slider-next qrt-testi-next qrt-cursor-color qrt-cursor-scale"><i class="fas fa-arrow-right"></i></div>
                </div>

              </div>


            </div>

            <div class="qrt-divider"></div>

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
                  <h4>Do you have a project?</h4>
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="contact.html"><span>Let's discuss</span></a>
                </div>

              </div>
            </div>

          </div>
          <div id="fixed" class="qrt-right">
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
