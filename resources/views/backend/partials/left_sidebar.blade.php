<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image"> <img src="{{asset('images/faces/face4.jpg')}}" alt="image"/> <span class="online-status online"></span> </div>
        <div class="profile-name">
          <p class="name">Richard V.Welsh</p>
          <p class="designation">Manager</p>
          <div class="badge badge-teal mx-auto mt-3">Online</div>
        </div>
      </div>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{route('admin.pages.index')}}"><img class="menu-icon" src="{{asset('images/menu_icons/01.png')}}" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>
    <li class="nav-item"><a class="nav-link" href="{{route('index')}}"><img class="menu-icon" src="{{asset('images/menu_icons/01.png')}}" alt="menu icon"><span class="menu-title">Home</span></a></li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('images/menu_icons/08.png')}}" alt="menu icon"> <span class="menu-title">Products</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.products')}}">Manage Products</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.product.create')}}">Ad Products</a></li>

        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('images/menu_icons/08.png')}}" alt="menu icon"> <span class="menu-title">Categories</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="category-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.categories')}}">Manage Categories</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.category.create')}}">Add Categories</a></li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('images/menu_icons/08.png')}}" alt="menu icon"> <span class="menu-title">Brands</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="brand-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{route('admin.brands')}}">Manage brands</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.brand.create')}}">Add brands</a></li>

        </ul>
      </div>
    </li>




  </ul>
</nav>
<!-- partial -->
