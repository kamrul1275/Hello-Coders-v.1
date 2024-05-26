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
    <link href="frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="frontend/assets/css/style.css" rel="stylesheet" />
    <link href="frontend/assets/css/career.css" rel="stylesheet" />
    <link href="frontend/assets/css/lodader.css" rel="stylesheet" />
    <link href="frontend/assets/css/navbar.css" rel="stylesheet" />
    <link href="frontend/assets/css/footer.css" rel="stylesheet" />
    <link href="frontend/assets/css/Pagebanner.css" rel="stylesheet" />

    <!-- =======================================================
        * Template Name: eNno - v4.7.0
        * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    <style></style>
  </head>
  <body onload="loading()">
    <div class="loder">
      <div class="loderitem loderitem-1"></div>
      <div class="loderitem loderitem-2"></div>
      <div class="loderitem loderitem-3"></div>
      <div class="loderitem loderitem-4"></div>
    </div>
    <div id="mainPanel" style="display: none">
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
              url("./frontend/assets/img/2147702101.jpg");
            height: 250px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
          }
        </style>

        <div class="page_banner mt-5">
          <h1 class="txt-ne" data-text="Build your Career ">
            Build your Career
          </h1>
          <h1 class="txt-by" data-text="With Hello Coders">
            With Hello Coders
          </h1>
        </div>

        <!-- ===Carrer option -->

        <div class="container-fluid">
          <div class="row justify-content-md-center">
            <div class="col">
              <div class="job pt-5">
                <span
                  data-v-4f036f0f=""
                  class="badge rounded-pill text-bg-light bg-white herosection__jobs d-inline-flex"
                  ><svg
                    data-v-4f036f0f=""
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                    class="me-2"
                  >
                    <g data-v-4f036f0f="" clip-path="url(#clip0_888_15533)">
                      <path
                        data-v-4f036f0f=""
                        d="M12.6667 2.66667H11.9333C11.7786 1.91428 11.3692 1.23823 10.7742 0.752479C10.1791 0.266727 9.4348 0.000969683 8.66667 0L7.33333 0C6.5652 0.000969683 5.82088 0.266727 5.22583 0.752479C4.63079 1.23823 4.2214 1.91428 4.06667 2.66667H3.33333C2.4496 2.66773 1.60237 3.01925 0.97748 3.64415C0.352588 4.26904 0.00105857 5.11627 0 6L0 8H16V6C15.9989 5.11627 15.6474 4.26904 15.0225 3.64415C14.3976 3.01925 13.5504 2.66773 12.6667 2.66667ZM5.456 2.66667C5.59339 2.27806 5.84749 1.94139 6.18353 1.70273C6.51958 1.46406 6.92116 1.33504 7.33333 1.33333H8.66667C9.07884 1.33504 9.48042 1.46406 9.81647 1.70273C10.1525 1.94139 10.4066 2.27806 10.544 2.66667H5.456Z"
                        fill="#0060AF"
                      ></path>
                      <path
                        data-v-4f036f0f=""
                        d="M8.66667 9.9987C8.66667 10.1755 8.59643 10.3451 8.47141 10.4701C8.34638 10.5951 8.17681 10.6654 8 10.6654C7.82319 10.6654 7.65362 10.5951 7.5286 10.4701C7.40357 10.3451 7.33333 10.1755 7.33333 9.9987V9.33203H0V12.6654C0.00105857 13.5491 0.352588 14.3963 0.97748 15.0212C1.60237 15.6461 2.4496 15.9976 3.33333 15.9987H12.6667C13.5504 15.9976 14.3976 15.6461 15.0225 15.0212C15.6474 14.3963 15.9989 13.5491 16 12.6654V9.33203H8.66667V9.9987Z"
                        fill="#0060AF"
                      ></path>
                    </g>
                    <defs data-v-4f036f0f="">
                      <clipPath data-v-4f036f0f="" id="clip0_888_15533">
                        <rect
                          data-v-4f036f0f=""
                          width="16"
                          height="16"
                          fill="white"
                        ></rect>
                      </clipPath>
                    </defs>
                  </svg>
                  <span style="color: black">Jobs</span></span
                >
              </div>
            </div>
          </div>

          <div class="job-headline">
            <h2 class="herosection__title">
              Empower <span class="text-highlight">Your Career</span>
              Journey with Us
            </h2>
          </div>

          <div class="query">
            <h6 class="queries">For Any Queries Email:</h6>
            <h4 class="email">hellocoders.info@gmail.com</h4>
          </div>
        </div>

        <div class="container p-5">
          <div class="careerHeader">
            <h2
              class="title text-center"
              style="color: #00156a; font-weight: 700"
            >
              Career Openings
            </h2>
          </div>
          <div class="careerDetails text-center">
            <h6>
              We are always looking for creative, skillful, talented person to
              join with us.<br />Check out our open positions.
            </h6>
          </div>
        </div>

        <div class="container">
          <div class="job-container">

          @foreach ($careers as $career)

          <!-- {{$career->career_image }} -->

          <div class="job-card">
              <div class="img-Container">
              <img src="{{ asset($career->career_image) }}" style="max-width: 100%; height: auto;" alt="{{ $career->career_name }}" />
              </div>
              <div class="Data-Container">
                
                <div class="content__item">
                  <a href="{{ route('career.details',$career->id)}}" class="button button--telesto"
                    ><span><span>Apply Now</span></span></a
                  >
                </div>
              </div>
            </div>
            
          @endforeach
            <!-- card 1 -->
          
 
     
          </div>
        </div>
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
                    <a class="text-danger copyright-area-name">Hello Coders BD</a>
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
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- Template Main JS File -->
    <script src="frontend/assets/js/main.js"></script>
    <script>
      // for loading
      const loading = () => {
        const myVar = setTimeout(showLoder, 1000);
      };
      function showLoder() {
        document.querySelector(".loder").style.display = "none";
        document.getElementById("mainPanel").style.display = "block";
      }
    </script>
  </body>
</html>
