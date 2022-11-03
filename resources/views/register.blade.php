<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Ahmad Gozali - Jobtest K24</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/styles/core.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/styles/icon-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/styles/style.css')}}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');

    </script>
</head>
<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <h4 class="text-primary mt-3">Ahmad Gozali</h4>
            </div>
            <div class="login-menu">
                <h4 class="text-primary mt-1">Jobtest K-24</h4>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ url('assets/vendors/images/login-page-img.png')}}" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Halaman Login</h2>
                        </div>
                        <form action="/registerProses" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">No KTP</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="no_ktp" type="text" placeholder="No KTP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="nama" placeholder="Nama" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">No HP</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="no_hp" type="number" placeholder="Nomor Hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-12 col-md-10">
                                    <select name="jenis kelamin" id="jenis_kelamin" class="custom-select col-12">
                                        <option value="">--Pilih--</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="tgl_lahir" type="date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Foto</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="foto" type="file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="password" type="password">
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-sm-12 mt-2">
                                <div class="input-group mb-0">
                                    <a type="button" class="btn btn-primary btn-lg btn-block" href="/">Sign in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="{{ url('assets/vendors/scripts/core.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/script.min.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/process.js')}}"></script>
    <script src="{{ url('assets/vendors/scripts/layout-settings.js')}}"></script>
</body>
</html>
