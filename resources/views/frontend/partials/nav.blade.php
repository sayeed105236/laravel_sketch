<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container">


  <div class="container-fluid">
<a class="navbar-brand" href="{{ route('index')}}">Grozby.com</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('index')}}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('products')}}">Products</a>
  </li>

  <!--<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </li>-->
  <li class="nav-item">
    <a class="nav-link disabled" href="{{ route('contact')}}" tabindex="-1" aria-disabled="true">Contact</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="{{route('admin.pages.index')}}" tabindex="-1" aria-disabled="true">Admin</a>
  </li>
</ul>
<form class="d-flex margin-left-30" action="{{route('search')}}" method="get">
  <div class="input-group mb-3">
<input type="text" class="form-control" name="search" placeholder="Search Products" aria-label="Recipient's username" aria-describedby="button-addon2">
<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
</div>
</form>
</div>
</div>
</div>
</nav>
