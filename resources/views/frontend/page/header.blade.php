<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo">
        <a href="{{ route('index.page')}}">
          <span style="color: #00a1c4">He</span>//<span style="color: #00a1c4">o</span>
          <span class="text-danger">Coders BD</span>
        </a>
      </h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <a class="nav-link menu_item scrollto " href="{{ route('index.page')}}">Home</a>
          </li>
          <li>
            <a class="nav-link scrollto menu_item" href="{{route('service.page')}}">Services</a>
          </li>
          <li>
            <a class="nav-link scrollto menu_item" href="{{ route('about.page')}}">About</a>
          </li>
          <li>
            <a class="nav-link scrollto menu_item" href="{{ route('career.page')}}">Career</a>
          </li>
          <li>
            <a class="nav-link scrollto menu_item" href="{{ route('contact.page')}}">Contact</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const menuItems = document.querySelectorAll('.menu_item');

      menuItems.forEach(item => {
        item.addEventListener('click', function (event) {
          // Remove 'active_menu' class from all menu items
          menuItems.forEach(menuItem => menuItem.classList.remove('active_menu'));

          // Add 'active_menu' class to the clicked menu item
          event.target.classList.add('active_menu');
        });
      });
    });
  </script>