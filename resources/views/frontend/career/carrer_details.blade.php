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
      href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
      rel="stylesheet"
    />
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link
      href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}"
      rel="stylesheet"
    />
    <link href="frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/lodader.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/navbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/footer.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/careerDetails.css')}}" rel="stylesheet" />

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
      <main class="container">
        <!-- ======= Header ======= -->
        <style>
          #header {
            z-index: 100;
          }
        </style>
     @include('frontend.page.header')
        <!-- End Header -->
        
        <!-- Career Details -->
        <div class="career_details">
          <div class="carer_img_part">
            <img
              src="{{ asset('frontend/assets/img/4956898_2592285-removebg-preview.png')}}"
              alt=""
            />
          </div>
          <div class="Career_info_part">
            <h1 class="career_subject"><i class="fa-regular fa-hand-point-right"></i> Job Position : Web Development</h1>
            <h2>Requirements</h2>

            <h4>Education</h4>
            <ul>
              <li>
                Bachelor of Science (BSc) in Computer Science & Engineering
              </li>
            </ul>
            <h4>Experience</h4>
            <ul>
              <li>1 to 3 years</li>
            </ul>
            <h4>Additional Requirements</h4>
            <ul>
              <li>Age 21 to 45 years</li>
              <li>Should have advanced JavaScript knowledge.</li>
              <li>Should have advanced JavaScript knowledge.</li>
              <li>
                Proficiency in essential web development tools including
                JavaScript, HTML5, CSS3, React, and Next.js.
              </li>
              <li>Excellent problem-solving skills and attention to detail.</li>
              <li>Strong communication and collaboration skills.</li>
            </ul>

            <h3>Salary :  <span>Negotiable</span></h3>
           
            <h3>Workplace :  <span>Work from home</span></h3>
           
            <h3>Employment  : <span>Full Time</span></3>
            
          </div>
        </div>
        <!-- Apply form -->
        <div class="Apply_container">
          <span class="big-circle"></span>
          <span class="big-circle1"></span>

          <div class="form">
            <div class="contact-info">
              <h3 class="title">Apply Now !</h3>
              <p class="text">
                We are hello coders . A software solution provider. We are glad
                to see you here !
              </p>

              <div class="info">
                <div class="information">
                  <i class="fas fa-map-marker-alt"></i>

                  <p>Dhamrai,Dhaka 1350</p>
                </div>
                <div class="information">
                  <i class="fas fa-envelope"></i>
                  <p>hellocoders.info@gmail.com</p>
                </div>
                <div class="information">
                  <i class="fas fa-phone"></i>
                  <p>+880 - 1307450464</p>
                </div>
              </div>

              <div class="social-media">
                <p style="text-align: left">Connect with us :</p>
                <div class="social-icons">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>
            </div>

            <div class="contact-form">
              <span class="circle one"></span>
              <span class="circle two"></span>

              <form action="{{route('career.cv.store')}}" class="form-holder" autocomplete="off">
              @csrf
                <h3 class="title">Fill The Apply Form</h3>
                <div class="input-container">
                  <input type="text" name="name" class="input" />
                  <label for="">Name</label>
                 
                  @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="input-container">
                  <input type="email" name="email" class="input" />
                  <label for="">Email</label>
                 
                  @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
                <div class="input-container">
                  <input type="tel" name="phone" class="input" />
                  <label for="">Phone</label>
                  @if ($errors->has('phone'))
                      <span class="text-danger">{{ $errors->first('phone') }}</span>
                  @endif
                </div>
                <div class="input-container textarea">
                  <textarea name="message" class="input"></textarea>
                  <label for="">Shot Description</label>
                  @if ($errors->has('message'))
                      <span class="text-danger">{{ $errors->first('message') }}</span>
                  @endif
                </div>
                <div class="input-container focus">
                  <input type="file" name="cv" class="input_special" />
                  <label for="">Upload CV</label>
                  @if ($errors->has('cv'))
                      <span class="text-danger">{{ $errors->first('cv') }}</span>
                  @endif
                </div>
                <input type="submit" value="Send" class="btn" />
              </form>
            </div>
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
                <a href="#"
                  ><i class="fab fa-facebook-f facebook-bg"></i
                ></a>
                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                <a href="#"
                  ><i class="fab fa-google-plus-g google-bg"></i
                ></a>
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
    <script src="{{ asset('frontend/assets/js/main.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/careerDetails.js')}}"></script>
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
