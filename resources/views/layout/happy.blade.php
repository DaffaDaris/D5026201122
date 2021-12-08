<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

    @yield('bootstrap')

    <style>
        .header{
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 300px;
            transition: all ease-in-out 0.5s;
            padding: 0 15px;
            box-shadow: -20px 0 35px -25px black, 20px 0 35px -25px black;
            background: #1C1C26;
            overflow-y: auto;
            color: ghostwhite;
        }
        .card {
            position: absolute;
            width: 800px;
            padding: 25px;
            padding-top: 0;
            padding-bottom: 0;
            left: 50%;
            top: 67.5px;
            margin-left: -400px;
            z-index: 5;
        }
        .foot{
            margin: 5%;
            margin-top: 80%;
        }

        input[type="radio"]{
            margin: 0 10px;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            flex-wrap: nowrap;
            height: 100vh;
            height: -webkit-fill-available;
            max-height: 100vh;
            overflow-x: auto;
            overflow-y: hidden;
        }
        .rounded-circle{
            border-radius: 4px;
            border:solid ghostwhite ;
            margin-bottom: 20px;
        }
        .header-judul{
            font-size: 30px;
            font-weight: bolder;
        }
        .nav-pills{
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 10%;
        }
        li a:hover{
            color: #1C1C26
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
    <div class="container">


    <div class="col-md-3 col-lg-4">
    <div class="header">
    <header class="col-12  border-bottom d-flex justify-content-center py-3">
            <div class="nav-navbar text-center">
                    <div class="header-judul"><strong>@yield('judulhalaman')</strong></div><br>
                    <span ><strong><img  src="images\Heavy Weather.png" width="100"  class="rounded-circle"></a></strong></span><br>
                    <span ><strong>Daffa' Daris Mahendra Ansori</strong></span><br>
                    <span ><strong>5026201122</strong></span><br>

            </div>
    </header>


    <nav id="sidebarMenu" class="nav-menu sidebar" >
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" aria-current="page"><a href="/pegawai" class="nav-link text-white">Pegawai</a></li>
            <li class="nav-item" aria-current="page"><a href="/absen" class="nav-link text-white">Absen</a></li>
            <li class="nav-item" aria-current="page"><a href="/tugas" class="nav-link text-white">Tugas</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Minggu Depan</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Praktikum</a></li>
        </ul>
    </nav>

    <footer class="foot">
            <div class="row text-center">
                <span>&copy; Hak Cipta Daffa' Daris Mahendra Ansori</span>
            </div>
    </footer>
    </div>
    </div>


    <div class="col-lg-6">
        <div class="card">
            <h1>@yield('judulhalaman')</h1>
            <div class="card-body">
                @section('konten')
                @show
            </div>
        </div>
    </div>


</div>
</body>

</html>
