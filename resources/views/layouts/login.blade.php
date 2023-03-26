<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./frontend/libraries/bootstrap/css/bootstrap.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- main css -->
    <link rel="stylesheet" href="./frontend/styles/main.css">
</head>
<body>
     
   @yield('content')

    <!-- jquery -->
    <script src="{{ asset('./frontend/libraries/jquery/jquery-3.5.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('./frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
    <!-- retina js -->
    <script src="{{ asset('./frontend/libraries/retina/retina.min.js') }}"></script>

</body>
</html>