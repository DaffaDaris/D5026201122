<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    @yield('bootstrap')

    <style>
        table {
            width: 50%;
        }
        th, td {
            text-align: left;
        }
        input[type="radio"]{
            margin: 0 5px 0 10px;
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
    <header class="col-12  border-bottom d-flex justify-content-center py-3">
            <div class="navbar-nav col-lg-11 ">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li class="nav-item mx-5" style="font-size: 20px"><strong>@yield('judulhalaman')</strong></li>
                    <li class="nav-item mx-3"><strong>Daffa' Daris Mahendra Ansori</strong></li>
                    <li class="nav-item "><strong>5026201122</strong></li>
                  </ul>
            </div>
            <div class="navbar-nav mx-5">
                <img src="images\Heavy Weather.png" width="48" height="48" class="rounded-circle">
            </div>
    </header>


    @section('sidebar')
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar-nav" >
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"><a href="/pegawai">Pegawai</a></li>
            <li class="nav-item"><a href="/absen">Absen</a></li>
            <li class="nav-item"><a href="/tugas">Tugas</a></li>
            <li class="nav-item"><a href="">Minggu Depan</a></li>
            <li class="nav-item"><a href="">Praktikum</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="col-md-4 col-lg-6">
            @section('konten')
            @show
        </div>
    </div>
    @show

<div class="container-fluid">
    <footer >
            <p class="col-md-4 mb-0 text-muted">&copy; Hak Cipta Daffa' Daris Mahendra Ansori</p>
    </footer>
</div>
</body>

</html>
