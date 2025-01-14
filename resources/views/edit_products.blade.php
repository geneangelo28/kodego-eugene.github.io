<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Products</title>
    <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="/admin/statistics"><img src="/assets/images/Icon.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="/admin/statistics"><img src="/assets/images/icon1.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">ADMIN NAME</p>
                </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/statistics">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/orders">
                <span class="menu-title">Orders</span>
                <i class="mdi mdi mdi-cart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin/products">
                <span class="menu-title">Products</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/add_new_products">
                <span class="menu-title">Add New Products</span>
                <i class="mdi mdi mdi-database-plus menu-icon"></i>
              </a>
            </li>
            <li class="nav-item mt-3">
            <a href="/logout" style="text-decoration: none; color: gray">
                    <span class="menu-title">Logout</span>
                    <i class="mdi mdi mdi-logout menu-icon" style="padding-left: 120px"></i>
             </a>
            </li>
          </ul>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title" style="margin-left: 210px">Edit Products </h3>
            </div>
            <div class="row">
                <div class="col lg 2"></div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    @foreach ($products as $product)
                    <form class="forms-sample" action="/admin/products/{{$product->product_ID}}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" placeholder="Cheesecake" value="{{$product->product_name}}" name="pname">
                      </div>
                      <div class="form-group">
                        <label >Price</label>
                        <input type="text" class="form-control"  placeholder="₱899.00" name="price" value="{{$product->price}}">
                      </div>
                      <div class="form-group">
                        <label>Stock</label>
                        <input type="number" class="form-control" placeholder="20" name="stock" value="{{$product->stock}}">
                      </div>
                      <button type="submit" class="btn btn-gradient-dark me-2">Submit</button>
                    </form>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="col lg 2"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/assets/js/off-canvas.js"></script>
    <script src="/assets/js/hoverable-collapse.js"></script>
    <script src="/assets/js/misc.js"></script>
    <script src="/assets/js/file-upload.js"></script>
  </body>
</html>