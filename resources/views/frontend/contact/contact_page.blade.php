<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link href="frontend/assets/css/contact.css" rel="stylesheet" />
    <link href="frontend/assets/css/navbar.css" rel="stylesheet" />
    <link href="frontend/assets/css/footer.css" rel="stylesheet" />
    <link href="frontend/assets/css/Pagebanner.css" rel="stylesheet" />
    <link href="frontend/assets/css/lodader.css" rel="stylesheet" />
  </head>
  <body onload="loading()">
    <div class="loder">
      <div class="loderitem loderitem-1"></div>
      <div class="loderitem loderitem-2"></div>
      <div class="loderitem loderitem-3"></div>
      <div class="loderitem loderitem-4"></div>
    </div>
    <div id="mainPanel" style="display: none">
      <main id="main">
        <!-- ======= Header ======= -->
 @include('frontend.page.header')
        <!-- End Header -->

        <!-- ==Banner === -->
        <style>
          .page_banner {
            width: 100%;
            position: relative;
            margin-top: 5px;
            background-image: url("./frontend/assets/img/blackShadow.png"),
              url("./frontend/assets/img/contact\ us.jpg");
            height: 250px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
          }
        </style>

        <div class="page_banner mt-5 container">
          <h1 class="txt-ne" data-text="Contact Us">
            Contact <span style="color: #ffffff">Us</span>
          </h1>
        </div>

        <!-- ======= Contact Section ======= -->
        <div class="main-container py_100" style="margin-top: 100px">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1 class="page-title fw-bold" style="color: #00156a">
                  Hello. <span class="fw-light">How can we help you?</span>
                </h1>
              </div>
            </div>
            <div class="contact-address">
              <div class="row g-3 d-flex justify-content-center mb-5 gap-5">
                <div class="col-xl-3 col-sm-6">
                  <div class="bg_grad h-100 px-4 py-5">
                    <h5>Bangladesh Office.</h5>
                    Dhamrai <br />
                    Dhaka-1350, Bangladesh.
                    <br />
                    +88-01307450464

                    <a href="mailto:hellocoders.info@gmail.com"
                      >hellocoders.info@gmail.com</a
                    >
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                  <div class="bg_grad2 h-100 px-4 py-5">
                    <h5>Careers.</h5>
                    Recruiting<br />
                    +88-01307450464<br />
                    <a href="mailto:hellocoders.info@gmail.com"
                      >hellocoders.info@gmail.com</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section class="service-contact py_100 bg_grad">
          <div class="container">
            <div class="row">
              <!--Form Column-->
              <div class="form-column col-lg-6 col-xs-12">
                <div class="column-inner">
                  <!--Contact Form-->
                  <div class="contact-form">
                    <form
                      method="post"
                      action=""
                      id="contact-form"
                      novalidate="novalidate"
                    >
                      <div class="form-group">
                        <input
                          class="form-control pd3"
                          name="name"
                          id="senderName"
                          placeholder="Full Name"
                          required=""
                          type="text"
                        />
                      </div>
                      <div class="form-group">
                        <input
                          class="form-control pd3"
                          name="email"
                          id="senderMail"
                          placeholder="Email Address*"
                          required=""
                          type="email"
                        />
                      </div>

                      <div class="form-group">
                        <input
                          class="form-control pd3"
                          name="phone"
                          id="senderMail"
                          placeholder="Phone*"
                          required=""
                          type="phone"
                        />
                      </div>

                      <div class="form-group">
                        <textarea
                          name="message"
                          class="form-control pd3"
                          id="form_message"
                          placeholder="Your Message*"
                          rows="4"
                        ></textarea>
                      </div>
                      <div class="form-group">
                        <button
                          type="button"
                          class="btn btn-success px-4 py-3"
                          id="frmbutton"
                        >
                          Send Message
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!--Info Column-->
              <div class="col-lg-6 col-xs-12">
                <div class="ps-0 ps-lg-5">
                  <div class="sec-title">
                    <h2 class="fw-bold fs-40">
                      Don’t Hesitate to <br />
                      Contact with us for any <br />
                      kind of information
                    </h2>
                  </div>
                  <div class="text">Call us for query</div>
                  <h3>+88-01307450464</h3>
                  <!--Social Icon Four-->
                  <ul class="d-flex list-unstyled mt-4">
                    <li>
                      <a
                        class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon"
                        href="https://www.facebook.com/bdtaskteam/"
                        rel="nofollow"
                        title="Facebook"
                        target="_blank"
                        ><i class="ti-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon"
                        href="https://www.pinterest.com/bdtask/"
                        rel="nofollow"
                        title="Pinterest"
                        target="_blank"
                        ><i class="ti-pinterest"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon"
                        href="https://www.linkedin.com/company/bdtask/"
                        rel="nofollow"
                        title="Linkedin"
                        target="_blank"
                        ><i class="ti-linkedin"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        class="align-items-center d-flex justify-content-center me-2 text-decoration-none text-white social_icon"
                        href="https://twitter.com/bdtask"
                        title="Twitter"
                        rel="nofollow"
                        target="_blank"
                        ><i class="ti-twitter"></i
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Map Start-->
        <div class="py_100">
          <div class="container-md">
            <div class="row">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1217.1872283980078!2d90.22039638840508!3d23.90945349938827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755ef9387f6a067%3A0x885cadeb8c3c50eb!2sHello%20Coders%20BD!5e0!3m2!1sen!2sbd!4v1654683388667!5m2!1sen!2sbd"
                style="border: 0; width: 100%; height: 290px"
                allowfullscreen
              >
              </iframe>
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
