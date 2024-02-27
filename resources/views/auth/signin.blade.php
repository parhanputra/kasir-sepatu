<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Daftar Kasir</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/izitoast/css/iziToast.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
</head>
<style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('wp6430534.jpg'); /* Ganti 'path/to/your/image.jpg' dengan path ke gambar Anda */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
</style>
<body class="bg-white">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 mt-3">
                        <div class="login-brand">
                            <!-- <img src="stisla/img/stisla-fill.svg" alt="logo" width="100"
                                class="shadow-light rounded-circle"> -->
                        </div>

                        <div class="card card-dark shadow">
                            <div class="card-header">
                                <h4 class="text-dark">Daftar</h4>
                            </div>
                            @error('status')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="card-body">
                                <form method="POST" action="/user/daftar" class="needs-validation">
                                    @csrf
                                    <div class="form-group">
                                            <label class="text-dark" for="email">Nama</label>
                                            <input id="email" type="text" class="form-control" name="nama"
                                                tabindex="1" autofocus placeholder="Masukkan Nama">
                                        </div>
                                        <div class="form-group">
                                            <label class="text-dark" for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email"
                                                tabindex="1" autofocus placeholder="Masukkan Email">
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password"
                                                    class="control-label text-dark">Password</label>
                                                <input id="password" type="password" class="form-control"
                                                    name="password" tabindex="2" placeholder="Masukan Password">
                                                <div class="invalid-feedback">
                                                    please fill in your password
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Level">Level</label>
                                <select class="custom-select" name="level">
                                    <option value="">Pilih Level...</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Kasir">Kasir</option>
                                </select>
                            </div>
                        </div>

                                    <div class="form-group">
                                        <span>Sudah punya akun? </span>
                                        <a href="/login" class="text-dark">
                                            Login
                                        </a>
                                    </div>

                                    <div class="form-group col-sm-5 mx-auto">
                                        <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
                                            Daftar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
    <script src="{{asset('assets/modules/popper.js')}}"></script>
    <script src="{{asset('assets/modules/tooltip.js')}}"></script>
    <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/modules/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{asset('assets/modules/izitoast/js/iziToast.min.js')}}"></script>
    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    @if(session('status'))
    <script>
        iziToast.error({
            title: 'Gagal Daftar!',
            message: '{{session('status')}}',
            position: 'topRight'
        });

    </script>
    @endif
</body>

</html>