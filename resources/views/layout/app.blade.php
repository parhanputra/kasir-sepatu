
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/modules/izitoast/css/iziToast.min.css')}}">
  <script src="{{asset('assets/modules/sweetalert/sweetalert.min.js')}}"></script>

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>


<body class="layout-3" onload="hitungTotal()">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      @include('layout.navbar')

      @include('layout.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
      </div>
      @include('layout.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets/modules/popper.js')}}"></script>
  <script src="{{asset('assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script>
  <script src="{{asset('assets/modules/izitoast/js/iziToast.min.js')}}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
  @if(session('gagal'))
    <script>
      iziToast.error({
      title: 'Gagal',
      message: '{{session('gagal')}}',
      position: 'topRight'
      });
    </script>
  @elseif(session('sukses'))
    <script>
      iziToast.success({
      title: 'Complate',
      message: '{{session('sukses')}}',
      position: 'topRight'
      });
    </script>
    @endif
  @stack('script')
</body>
</html>