<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hardees`s</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('user') }}/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('user') }}/css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sign in form -->

        <div class="">
            @yield('content')
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('user') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('user') }}/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>