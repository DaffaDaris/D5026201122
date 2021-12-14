<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link rel="icon" href="http://www.domain.com/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://www.domain.com/favicon.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    @yield('bootstrap')
    <link href="\css\template.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
    src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

</head>

<body>

        <div class="container header">
            <header class=" py-3 px-2">
                    <div class="nav-navbar text-center">
                            <div class="header-judul"><strong>@yield('judulhalaman')</strong></div><br>
                            <img  src="/img/profile/Heavy Weather.png" width="100" class="rounded-circle"><br>
                            <span ><strong>Daffa' Daris Mahendra Ansori</strong></span><br>
                            <span ><strong>5026201122</strong></span><br>

                    </div>
            </header>
            <hr>
            <div class="row">
            <nav id="sidebarMenu" class="nav-menu sidebar" >
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item"><a href="/pegawai" class="nav-link text-white">Pegawai</a></li>
                    <li class="nav-item"><a href="/absen" class="nav-link text-white">Absen</a></li>
                    <li class="nav-item"><a href="/tugas" class="nav-link text-white">Tugas</a></li>
                    <li class="nav-item"><a href="/bedak" class="nav-link text-white">Bedak</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-white">Praktikum</a></li>
                </ul>
            </nav>
            </div>

        </div>


        <div class="main container ">
            <div class="container-fluid">
                <h1>@yield('judulhalaman')</h1>
                    @section('konten')
                    @show
            <div >

            </div>
            </div>
        </div>
        <footer>
            <div class="footer-content" >&copy; Hak Cipta Daffa' Daris Mahendra Ansori</div>
        </footer>



</body>

</html>
