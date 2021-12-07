<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    @yield('bootstrap')

    <style>
        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }
        input[type="radio"]{
            margin: 0 5px 0 10px;
        }
        .mb-auto {
            margin-bottom: auto!important;
        }
        .flex-column {
            flex-direction: column!important;
        }
        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
        }
        .p-3 {
            padding: 1rem!important;
        }
        .d-flex {
            display: flex!important;
        }
    </style>

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
    src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
</head>

<body>
    <header class="col-12 p-3 mb-3 border-bottom d-flex justify-content-center py-3">
            <div class="navbar-nav col-lg-11 ">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li class="nav-item mx-5">Daffa' Daris Mahendra Ansori</li>
                    <li class="nav-item">5026201122</li>
                  </ul>
            </div>
            <div class="dropdown text-end">
                <img src="images\Heavy Weather.png" width="32" height="32" class="rounded-circle">
            </div>
    </header>


    @section('sidebar')
    <nav id="navbar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar-nav" >
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"><a href="/pegawai">Pegawai</a></li>
            <li class="nav-item"><a href="/absen">Absen</a></li>
            <li class="nav-item"><a href="/tugas">Tugas</a></li>
            <li class="nav-item"><a href="">Minggu Depan</a></li>
            <li class="nav-item"><a href="">Praktikum</a></li>
        </ul>
    </nav>
    <div class="col-md-8 col-lg-10">
    @section('konten')
    @show
    </div>
    @show

<div class="container-fluid">
    <footer >
            <p class="col-md-4 mb-0 text-muted">&copy; Hak Cipta Daffa' Daris Mahendra Ansori</p>
    </footer>
</div>
</body>

</html>
