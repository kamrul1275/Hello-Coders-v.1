<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Hello Coders</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/1.png')}}" rel="icon" />
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

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
      href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}"
      rel="stylesheet"
    />
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link
      href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}"
      rel="stylesheet"
    />
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/services.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/Pagebanner.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/navbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/footer.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/lodader.css')}}" rel="stylesheet" />

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
              url("./frontend/assets/img/service_details.jpg");
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

     
        <!-- OUR ENGAGEMENT -->

        <div class="container  mobi mt-5 mx-auto w-75  align-items-center">
           <div class="row">
            <div class="col-md-6">
        <img
            src="{{asset($servicesDetails->services_image)}}"
            alt=""
            height="300px"
          />
        </div>

         <div class="col-md-6">
          
           <h2>
          {{ $servicesDetails->title }}
          </h2>  
          <p> {{$servicesDetails->describtion}}</p>
                
                <a  href="{{route('contact.page')}}" class="btn btn-success">Order Now</a>
        </div>
          
        </div>

        </div>

        
      </main>

        <!-- ======= Footer ======= -->
   @include('frontend.page.footer')
        <!-- End Footer -->
    </div>
    <!-- Template Main JS File -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

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
