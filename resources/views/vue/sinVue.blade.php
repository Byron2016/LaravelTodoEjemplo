<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shop Catalog</title>
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shop-homepage.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/loading.css') }}" rel="stylesheet"> --}}
</head>
<body>
  {{-- <h1>Holaaaa desde desplegar.blade.php</h1> --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Shop Catalog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Shop Catalog</h1>
        <div class="list-group">
          @foreach ($categories as $category)
          <a class="list-group-item">
            {{ $category->name }}
          </a>
          @endforeach
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row mt-4">
          @foreach ($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="%">
                <img src="http://placehold.it/700x400" alt="" class="card-img-top">
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{ $product->name }}</a>
                </h4>
                <h5>$ {{ number_format($product->price / 100 , 2) }}</h5>
                <p class="card-text">{{ $product->description }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  @yield('content')

  <footer class="footer py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website {{ date('Y') }}</p>
    </div>
  </footer>
{{-- <script src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>