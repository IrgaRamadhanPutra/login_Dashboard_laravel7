<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }}</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>
<style type="text/css">
    .btn-primary {
        background-color: #20598f;

        font-size: 18px;
    }
</style>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    {{-- <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <span class=" border text-warning">Welc<span class="text-primary">ome</span></span>
                            {{-- <div class="d-inline-flex p-2">Welcome</div> --}}
                    {{-- </div>  --}}
                    {{-- <img src="../assets/img/avatar/TCH_full.jpg" class="img-fluid" width="1000" alt="..."> --}}
                    <div class="container-fluid rounded-lg"
                        style="background-image: url('../assets/img/avatar/tch.jpg'); background-repeat: no-repeat; background-size: cover; overflow-hidden; width: 22rem;"
                        id="boxPassword">
                        </br>
                        <div class="d-flex justify-content-center">

                            {{-- <img src="../assets/img/avatar/gambar2.png" class="rounded" width="50px alt="LOGO"> --}}
                            {{-- <img src="gambar2.jpg" class="img-thumbnail" width="30" cosplay="logo">LOGO</a> --}}
                            {{-- <h1> Sistem </h1> --}}
                            <h3 class="text-white">TMS <span class="text-warning">IN</span></h3>
                        </div>
                        <br>
                        @yield('content')
                        <div class="simple-footer text-white">
                            Copyright &copy; {{ date('Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
