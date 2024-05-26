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
    <link href="frontend/assets/css/services.css" rel="stylesheet" />
    <link href="frontend/assets/css/Pagebanner.css" rel="stylesheet" />
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
      <main class="container">
        <!-- ==Banner === -->
        <style>
          .page_banner {
            position: relative;
            margin-top: 5px;
            background-image: url("./frontend/assets/img/blackShadow.png"),
              url("./frontend/assets/img/4548450.jpg");
            height: 250px !important;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
          }
        </style>

        <div class="page_banner mt-5">
          <h1 class="txt-ne" data-text="Our Services">
            Our <span style="color: #ffffff">Services</span>
          </h1>
          <h1 class="txt-by" data-text="A Software Solution Provider">
            A Software Solution Provider
          </h1>
        </div>
        <!-- Main service part -->

        <section class="we-offer-area text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="site-heading text-center">
                  <h2 style="color: #00156a">What we Offer</h2>
                  <h4></h4>
                </div>
              </div>
            </div>
            <div class="row our-offer-items less-carousel">
              <!-- Single Item -->
              <a href="#" class="col-md-6 col-sm-12 col-lg-4 equal-height">
                <div class="item">
                  <i class="fa-solid fa-laptop-code"></i>
                  <h4>Website Development</h4>
                  <p>
                    A website can represent your business identity we can
                    develop it according to the motive of your business.
                  </p>
                </div>
              </a>
              <!-- End Single Item -->

              <!-- Single Item -->
              <a href="#" class="col-md-6 col-sm-12 col-lg-4 equal-height">
                <div class="item">
                  <i class="fa-solid fa-store"></i>
                  <h4>E-Commerce</h4>
                  <p>
                    We can develop an SEO-friendly e-commerce management system
                    to publish your Products and improve your sells, and so on.
                  </p>
                </div>
              </a>
              <!-- End Single Item -->

              <!-- Single Item -->
              <a href="#" class="col-md-6 col-sm-12 col-lg-4 equal-height">
                <div class="item">
                  <i class="fa-solid fa-hospital"></i>
                  <h4>Medical</h4>
                  <p>
                    We have readymade medical software solutions as well as
                    develop the medical solution based on your demand.
                  </p>
                </div>
              </a>
              <!-- End Single Item -->

              <!-- Single Item -->
              <a href="#" class="col-md-6 col-sm-12 col-lg-4 equal-height">
                <div class="item">
                  <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                  <h4>ERP</h4>
                  <p>
                    ERP is a business management software. it's help you to grow
                    your business to next level.
                  </p>
                </div>
              </a>
              <!-- End Single Item -->

              <!-- Single Item -->
              <a href="#" class="col-md-6 col-sm-12 col-lg-4 equal-height">
                <div class="item">
                  <i class="fa-regular fa-newspaper"></i>
                  <h4>Web Designing</h4>
                  <p>
                    We design the best eye catching and professional template
                    for you on your demand .
                  </p>
                </div>
              </a>
              <!-- End Single Item -->

              <!-- Single Item -->
              <a href="#" class="col-md-6 col-sm-12 col-lg-4 equal-height">
                <div class="item">
                  <i class="fa-brands fa-connectdevelop"></i>
                  <h4>Multi Vendor E-Commerce</h4>
                  <p>
                    It is a great way to manage your products, vendors, and
                    commissions .
                  </p>
                </div>
              </a>
              <!-- End Single Item -->
            </div>
          </div>
        </section>

        <!-- OUR ENGAGEMENT -->

        <section class="font container">
          <div class="Engagement">
            <div class="row mt-0">
              <div class="col-md-12">
                <div class="site-heading2 text-center">
                  <h2 style="color: #00156a">Our ENGAGEMENT MODEL</h2>
                  <div class="font Width 100% text-center">
                    We focus and value the priorities of our clients' needs as
                    their extended team. Based on the requirements we are able
                    to provide a complete plan and dedicated engineers to
                    complete the project. We are highly flexible in customizing
                    our engagement model to satisfy client demands.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- New Our Engagement section -->
        <section class="container">
          <div class="our-engagement">
            <div class="our-engagement-wrapper">
              <!-- single engagement 1-->
              <div class="engagement-card-wrapper">
                <div class="eng-first-letter full-time"><span>f</span></div>
                <div class="engagement-card eng-card-1">
                  <div>
                    <h3>full time engagement</h3>
                    <p>
                      Unlock your potential ongoing projects with our advanced
                      expertise. Discover the power to fully commit to your
                      goals and passions. Moreover, embrace every task as an
                      opportunity for growth and mastery.And Take your projects
                      to new heights of success with our "Full Time
                      Engagement Model".
                    </p>
                  </div>

                  <div><i class="fa-solid fa-bullseye"></i></div>
                </div>
              </div>
              <!-- single engagement 2-->
              <div class="engagement-card-wrapper">
                <div class="eng-first-letter project-based"><span>p</span></div>
                <div class="engagement-card eng-card-2">
                  <div>
                    <h3>project based</h3>
                    <p>
                      Unlock your potential ongoing projects with our advanced
                      expertise. We analyze your needs thoroughly and then
                      provide time and cost estimates for specific target
                      projects.To help in understanding delivery phases,
                      budgets, and timelines, a comprehensive project plan is
                      produced.The allocation of necessary resources is
                      contingent upon the intricacy of the project and its
                      timeline.We promise to fulfill all deadlines and provide
                      high-quality items at reasonable costs.
                    </p>
                  </div>

                  <div><i class="fa-solid fa-handshake"></i></div>
                </div>
              </div>
              <!-- single engagement 3-->
              <div class="engagement-card-wrapper">
                <div class="eng-first-letter custom-plan"><span>c</span></div>
                <div class="engagement-card eng-card-3">
                  <div>
                    <h3>custom plan engagement</h3>
                    <p>
                      Not all tasks are not created equal. Our model helps to
                      create customized and prioritize key projects. Your vision
                      with our custom project solutions according to your needs.
                      From concept to completion, our experts bring your ideas
                      to life with precision and innovation. Let's collaborate
                      and create something extraordinary together."
                    </p>
                  </div>
                  <div><i class="fa-solid fa-circle-nodes"></i></div>
                </div>
              </div>
              <!-- single engagement 4-->
              <div class="engagement-card-wrapper">
                <div class="eng-first-letter lifetime"><span>l</span></div>
                <div class="engagement-card eng-card-4">
                  <div>
                    <h3>lifetime engagement</h3>
                    <p>
                      In our "Lifetime Engagement Plan" we make commitments that
                      transcend time. You can enjoy exclusive benefits,
                      continuous support and everlasting value.Our relentless
                      focus will help you succeed in your project..So join us to
                      embark on a journey of lifelong satisfaction. All the
                      engagement that the story in question has ever generated.
                    </p>
                  </div>
                  <div><i class="fa-solid fa-snowflake"></i></div>
                </div>
              </div>
            </div>
            <div class="engagement-title-wrapper">
              <h2>Our Engagement</h2>
            </div>
          </div>
        </section>

        <div
          class="mobi mt-5 mx-auto w-75 d-flex justify-content-evenly align-items-center gap-3"
        >
          <img
            src="./frontend/assets/img/services-engagement-300x300.png"
            alt=""
            height="300px"
          />
          <h2 style="color: #3a3a3a; font-weight: 700; max-width: 450px">
            We provide the opportunity to
            <span style="color: #ea2a35">evaluate our services</span> before any
            formal engagement.
          </h2>
        </div>
      </main>

        <!-- ======= Footer ======= -->
    @include('frontend.page.footer')
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