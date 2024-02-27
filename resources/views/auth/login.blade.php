<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login Kasir</title>

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
<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <!-- <img src="stisla/img/stisla-fill.svg" alt="logo" width="100"
                                class="shadow-light rounded-circle"> -->
                        </div>

                        <div class="card card-dark">
                            <div class="card-header">
                                <h4 class="text-dark">Aplikasi Kasir</h4>
                            </div>
                            @error('status')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="card-body">
                                <form method="POST" action="/postlogin" class="needs-validation">
                                    @csrf
                                    <div class="form-group">
                                        <label class="text-dark" for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required autofocus placeholder="Masukkan Email">
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label text-dark">Password</label>
                                            <input id="password" type="password" class="form-control" name="password"
                                                tabindex="2" required placeholder="Masukan Password">
                                            <div class="invalid-feedback">
                                                please fill in your password
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-12 ml-3">
                                        <input class="form-check-input" name="hide_password" type="checkbox"
                                            id="hide-password">
                                        <label class="text-dark">
                                            Tampilkan Password
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <span>Belum punya akun? </span>
                                        <a href="/daftar" class="text-dark">
                                            Daftar
                                        </a>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                    <div class="card-footer text-center">
                                         <a href="/forgot-password" class="text-dark">Lupa Password?</a>
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
            title: 'Gagal Login!',
            message: '{{session('status')}}',
            position: 'topRight'
        });
    </script>
    @endif
    <script>
        var hidePassword = document.getElementById("hide-password");
        var formPassword = document.getElementById("password");

        hidePassword.addEventListener('change', function() {
            if (hidePassword.checked) {
                formPassword.setAttribute('type', 'text');
            } else {
                formPassword.setAttribute('type', 'password');
            }
        });
    </script>
</body>

</html>
