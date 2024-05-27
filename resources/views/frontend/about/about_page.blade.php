<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Hello Coders</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="frontend/assets/img/1.png" rel="icon" />
    <link href="frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,300;1,400&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Vendor CSS Files -->

    <link
      href="frontend/assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="frontend/assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="frontend/assets/css/who_We_Are.css" rel="stylesheet" />
    <link href="frontend/assets/css/style.css" rel="stylesheet" />
    <link href="frontend/assets/css/navbar.css" rel="stylesheet" />
    <link href="frontend/assets/css/footer.css" rel="stylesheet" />
    <link href="frontend/assets/css/about.css" rel="stylesheet" />
    <link href="frontend/assets/css/Pagebanner.css" rel="stylesheet" />
    <link href="frontend/assets/css/lodader.css" rel="stylesheet" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap");
    </style>
  </head>
  <body onload="loading()">
    <div class="loder">
      <div class="loderitem loderitem-1"></div>
      <div class="loderitem loderitem-2"></div>
      <div class="loderitem loderitem-3"></div>
      <div class="loderitem loderitem-4"></div>
    </div>
    <div id="mainPanel">
      <!-- ======= Header ======= -->
 @include('frontend.page.header')
      <!-- End Header -->

      <main class="container">
        <!-- ==Banner === -->
        <style>
          .page_banner {
            width: 100%;
            position: relative;
            margin-top: 5px;
            background-image: url("./frontend/assets/img/blackShadow.png"),
              url("./frontend/assets/img/About.jpg");
            height: 250px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
          }
        </style>

        <section class="page_banner mt-5">
          <h1 class="txt-ne" data-text="We Are Hello Coders">
            We Are He//o <span style="color: #ffffff">Coders</span>
          </h1>
          <h1 class="txt-by" data-text="A Software Solution Provider">
            A Software Solution Provider
          </h1>
        </section>
        <!-- Who we are -->

        <section class="we_are">
          <div class="who" style="color: #00156a"><span>WHO</span> WE ARE</div>
          <div class="line"></div>
          <div class="who_details">
            <p>
              Hello Coders BD provides attractive and dynamic software. Having
              talented software engineers on board, we craft compelling web,
              desktop, and mobile applications for our clients.
            </p>
            <p>
              Since the beginning of our existence, we have collaborated with
              many businesses and provided operational gains to newly created,
              developing, and established organizations in Bangladesh and others
              countries.
            </p>
          </div>
        </section>
        <!--#### Our Team start  ###-->

        <!-- update work 01 start -->
        <div class="section-title">
          <h2>TEAM MEMBERS</h2>
        </div>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">


          @foreach ($teams as $team)
            
          

            <div class="swiper-slide">
              <div class="team_card">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img
                      src="{{asset($team->team_image)}}"
                      class="team_img img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="member-info">
                    <h5>{{$team->team_name}}</h5>
                    <span>{{$team->job_position}}</span>
                  </div>
               
                </div>
              </div>
            </div>

            @endforeach

           

   

    

            

          

   
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <!-- End Team Section -->

  
        <!-- BENEFITS OF WORKING WITH US -->
        <section class="container benefit">
          <h1 style="color: #00156a">BENEFITS OF WORKING WITH US</h1>
          <div class="row gap-4 mt-5">
            <div class="col data_holder">
              <img src="./frontend/assets/img/icons8-rocket-100.png" alt="" />
              <h2>Quick Start</h2>
              <p>
                Our advanced team executes plans quickly and autonomously. With
                proactive management, your projects move forward with speed and
                precision.
              </p>
            </div>
            <div class="col data_holder">
              <img src="./frontend/assets/img/icons8-operation-64.png" alt="" />
              <h2>Operational Efficiency</h2>
              <p>
                With a top-level engineers team, we deliver high-quality
                solutions at low costs, while also minimizing costs and
                maximizing quality.
              </p>
            </div>
          </div>
          <div class="row gap-4 mt-3">
            <div class="col data_holder">
              <img src="./frontend/assets/img/icons8-engineer-64.png" alt="" />
              <h2>Top Quality Product</h2>
              <p>
                We never compromises on quality. Every product, service or
                solution of our team is carefully crafted to ensuring your
                absolute satisfaction.
              </p>
            </div>
            <div class="col data_holder">
              <img src="./frontend/assets/img/icons8-management-64.png" alt="" />
              <h2>End to End Management</h2>
              <p>
                From start to end, only we take a responsible approach . That
                ensures not only high-quality solutions but also
                cost-effectiveness throughout the process.
              </p>
            </div>
          </div>
        </section>
      </main>

      <!-- ======= Footer ======= -->
      <footer class="footer-section mt-5">
        <div class="container">
          <div class="footer-cta pt-3 pb-3">
            <div class="row">
              <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                  <i class="fas fa-map-marker-alt text-danger"></i>
                  <div class="cta-text">
                    <h4>Find us</h4>
                    <span>Dhamrai,Dhaka 1350</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                  <i class="fas fa-phone text-danger"></i>
                  <div class="cta-text">
                    <h4>Call us</h4>
                    <span>+880-1307450464</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-4 mb-30">
                <div class="single-cta">
                  <i class="far fa-envelope-open text-danger"></i>
                  <div class="cta-text">
                    <h4>Mail us</h4>
                    <span>hellocoders.info@gmail.com</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-content pt-3 pb-3">
            <div class="row">
              <div class="col-xl-4 col-lg-4 mb-50">
                <div class="footer-widget">
                  <div class="footer-logo">
                    <a
                      style="
                        font-size: 42px;
                        color: #00a1c4;
                        font-family: 'Lato', sans-serif;
                      "
                      href="index.html"
                      >He<span style="color: #5f687b">//</span>o
                      <span class="text-danger" style="font-weight: 700"
                        >Coders BD</span
                      ></a
                    >
                  </div>
                  <div class="footer-text text-left">
                    <p class="text-left">
                      When you have software issues, we are here to help. We are
                      commited to provide the finest possible solution.
                    </p>
                  </div>
                  <div class="footer-social-icon for_disktop">
                    <span>Follow us</span>
                    <a href="#"
                      ><i class="fab fa-facebook-f facebook-bg"></i
                    ></a>
                    <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                    <a href="#"
                      ><i class="fab fa-google-plus-g google-bg"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                  <div class="footer-widget-heading">
                    <h3>Useful Links</h3>
                  </div>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Expert Team</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="footer-social-icon for_mobile">
                <span>Follow us</span>
                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                <div class="footer-widget">
                  <div class="footer-widget-heading">
                    <h3>Subscribe</h3>
                  </div>
                  <div class="footer-text mb-25">
                    <p>
                      Don’t miss to subscribe to our new feeds, kindly fill the
                      form below.
                    </p>
                  </div>
                  <div class="subscribe-form">
                    <form action="#">
                      <input type="text" placeholder="Email Address" />
                      <button><i class="fab fa-telegram-plane"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-area">
          <div class="container">
            <div class="row">
              <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                <div class="copyright-text">
                  <p>
                    Copyright &copy; 2024, All Right Reserved
                    <a class="text-danger copyright-area-name"
                      >Hello Coders BD</a
                    >
                  </p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                <div class="footer-menu">
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Policy</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer -->
    </div>
    <!-- Template Main JS File -->
    <script src="frontend/assets/js/Who_We_Are.js"></script>
    <script src="frontend/assets/js/main.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      // for loading
      const loading = () => {
        document.getElementById("mainPanel").style.display = "none";
        const myVar = setTimeout(showLoder, 1000);
      };
      function showLoder() {
        document.querySelector(".loder").style.display = "none";
        document.getElementById("mainPanel").style.display = "block";
      }
      // for team
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        // slidesPerGroup: 4,
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
        loopFillGroupWithBlank: true,

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 0,
          },
          980: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
        },
      });
    </script>
  </body>
</html>
