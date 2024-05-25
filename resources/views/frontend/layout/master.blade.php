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
    <link href="frontend/assets/css/navbar.css" rel="stylesheet" />
    <link href="frontend/assets/css/footer.css" rel="stylesheet" />
    <link href="frontend/assets/css/lodader.css" rel="stylesheet" />

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

      <!-- ====Modal for video -->
      <style>
        .maintain {
          right: 12px;
          top: 10px;
          position: absolute;
        }
        .popup_edit {
          padding: 10px;
          background: #163647;
        }
        @media only screen and (max-width: 991px) {
          .maintain {
            top: 50px;
          }
        }
      </style>
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <button
          type="button"
          class="btn-close maintain"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content popup_edit">
            <video id="contentVideo" controls>
              <source src="./frontend/assets/video/ContentVideo.mp4" />
            </video>
          </div>
        </div>
      </div>

      <!-- ======= Hero Section ======= -->
     @include('frontend.page.hero_section')
      <!-- End Hero -->


        <!-- start Technology Section -->
        <section class="clients clients-slider section-bg">
            <div class="container-fluid">
              <div class="section-title">
                <!-- <span>Technology</span> -->
                <h2>Our Technology</h2>
                <p>
                  We use various technologies to make your software attractive.
                </p>
              </div>
  
              <div class="clients-slider swiper" style="background-color: white">
                <div
                  class="swiper-wrapper align-items-center"
                  style="background-color: white"
                >
                  <div
                    class="swiper-slide"
                    style="background-color: white; height: auto"
                  >
                    <img
                      src="frontend/assets/img/technology/jquery-removebg-preview.png"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="frontend/assets/img/technology/vue.png"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="frontend/assets/img/technology/mysql.png"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="frontend/assets/img/technology/laravel1.png"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="frontend/assets/img/technology/node.png"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="frontend/assets/img/technology/angular-removebg-preview.png"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="frontend/assets/img/technology/mongo1.png"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <div class="swiper-slide">
                    <img
                      src="frontend/assets/img/technology/net1.png"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </section>
          <!-- End Clients Section -->
  
      <main id="main">
        <!-- ======= Featured Services Section ======= -->

        <!-- End Featured Services Section -->

        <!-- ======= Clients Section ======= -->



        <!-- ======= Services Section ======= -->
     

@yield('content')

        <!-- End Services Section -->

        <!-- Way you choose us -->
        <section class="section_holder">
          <div class="section-title">
            <!-- <span>Technology</span> -->
            <h2>Why you choose our solution</h2>
          </div>
          <div class="solition_data_holder">
            <div class="item">
              <div class="circle-fun"></div>
              <div class="item_details_holder holder_one">
                <h2 class="">uI/uX creative design</h2>
                <p class="text-start">
                  Our UI/UX Creative Design ensuring your website stands out in a sea of competition. Our designs aren't just beautiful; they're strategically crafted to enhance user experiences and drive results. Partner with us to unlock the full potential of your digital presence.
                </p>
              </div>
              <div class="icon"></div>
            </div>
            <div class="item">
              <div class="circle-fun"></div>
              <div class="item_details_holder holder_two">
                <h2 class="">visual graphic design</h2>
                <p class="text-start">
                  We breathe life into brands with captivating visuals that leave a lasting impression. From logos to graphics, we're your partners in crafting a visually stunning brand identity that stands out.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="circle-fun"></div>
              <div class="item_details_holder holder_one">
                <h2 class="">strategy & digital marketing</h2>
                <p class="text-start">
                  We deploy data-driven strategies to amplify your online reach, engage your audience, and achieve measurable results. Partner with us to navigate the digital landscape and elevate your brand's presence.
                </p>
              </div>
            </div>
            <div class="item">
              <div class="circle-fun"></div>
              <div class="item_details_holder holder_two">
                <h2 class="">effective business growth</h2>
                <p class="text-start">
                  Empower your business growth with our proven strategies. We analyze, innovate, and execute tailored plans to drive sustainable growth. Partner with us to unlock your business's full potential and achieve lasting success.
                </p>
              </div>
            </div>
          </div>
        </section>

      </main>
      <!-- End #main -->




      <!-- ======= Footer ======= -->
   @include('frontend.page.footer')
      <!-- End Footer -->

      <a
        href="#"
        class="back-to-top d-flex align-items-center justify-content-center"
        ><i class="bi bi-arrow-up-short"></i
      ></a>
    </div>
    <!-- Vendor JS Files -->
    <script src="frontend/assets/vendor/purecounter/purecounter.js"></script>
    <script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="frontend/assets/vendor/typed.js/typed.min.js"></script>

    <!-- Template Main JS File -->
    <script src="frontend/assets/js/main.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      // for loading
      const loading = () => {
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

    <script>
      var $videoSrc;
      $(".btn-play").click(function () {
        $videoSrc = $(this).data("src");
      });
      console.log($videoSrc);
      $("#videoModal").on("shown.bs.modal", function (e) {
        $("#video").attr(
          "src",
          $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
        );
      });
      $("#videoModal").on("hide.bs.modal", function (e) {
        $("#video").attr("src", $videoSrc);
      });
    </script>
  </body>
</html>
