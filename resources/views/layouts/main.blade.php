<html lang="en">
<head>
    <title>@yield('title') - Pendaftaran Registasi Baru RSUD Pasar Rebo</title>
    <meta charset="utf-8" />
    <meta name="description" content="Pendaftaran registrasi baru RSUD Pasar Rebo berbasis digital" />
    <meta name="keywords" content="Rumah sehat, RSUD Pasar Rebo, rumah sakit, daftar online" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="RSUD Pasar Rebo | Daftar Online Baru" />
    <meta property="og:site_name" content="Registrasi Online Baru | RSUD Pasar Rebo" />
    <link rel="shortcut icon" href="{{ asset('plugins/logos/favicon-rspr.ico') }} " />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        .teks-asterisk::after{
            color: #d00;
            content: "*";
            position: absolute;
            margin-left: 8px;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</body>
</html>