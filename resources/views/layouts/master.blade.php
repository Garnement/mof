<html>
<head>
    <title>MOF</title>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link ref="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/max1200.css" />
    <link rel="stylesheet" media="screen and (max-width: 968px)" href="css/max968.css" />
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/max768.css" />
</head>
<body>
  <div class="container-fluid">
            @include('partials.nav')
  </div>

        @yield('content')

<div class="container-fluid">
            @include('partials.footer')
</div>

    <script src="js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/application.js"></script>
</body>
</html>
