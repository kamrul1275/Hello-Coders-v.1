<header id="header" class="fixed-top">
    <div
      class="container d-flex align-items-center justify-content-between"
    >
      <h1 class="logo">
        <a href="{{ route('index.page')}}">
          <span style="color: #00a1c4">He</span>//<span
            style="color: #00a1c4"
            >o</span
          >
          <span class="text-danger">Coders BD</span>
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a
              class="nav-link menu_item scrollto active_menu"
              href="{{ route('index.page')}}"
              >Home</a
            >
          </li>
          <!-- <li><a class="nav-link scrollto" href="courses.html">Course</a></li> -->
          <li>
            <a class="nav-link scrollto menu_item" href="services.html"
              >Services</a
            >
          </li>
          <li>
            <a class="nav-link scrollto menu_item" href="{{ route('about.page')}}"
              >About</a
            >
          </li>
          <li>
            <a class="nav-link scrollto menu_item" href="{{ route('career.page')}}"
              >Career</a
            >
          </li>
          <li>
            <a class="nav-link scrollto menu_item" href="{{ route('contact.page')}}"
              >Contact</a
            >
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>