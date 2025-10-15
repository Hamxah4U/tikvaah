<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tikvaah Tech Solutions</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="robots" content="noindex, nofollow">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/tikvahTechSolution.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/swiper-bundle.min.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <style>
        .error-message {
            transition: opacity 0.6s ease;
        }
        .error-message.fade-out {
            opacity: 0;
        }
    </style>

</head>

<body>
  {{ $slot }}
  <x-footer />
</body>
</html>