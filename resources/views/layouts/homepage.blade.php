<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
@include('homepage.css.bootstrap')
<!-- Scripts -->

    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>

@include('homepage.particals.nav')

@yield('content')

<!-- Scripts -->
@include('homepage.js.jquery')
@include('homepage.js.bootstrap')

</body>
</html>
