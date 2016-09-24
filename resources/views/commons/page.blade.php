<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BiDaoBlog') }}</title>

    <!-- Styles -->
    @include('commons.css.bootstrap')
    @yield('ex-css')

    <style>
        @yield('ex-plain-css')
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>

@include('commons.particals.nav')

@yield('content')

<!-- Scripts -->
@include('commons.js.jquery')
@include('commons.js.bootstrap')

@yield('ex-js')

<script>
    @yield('ex-plain-js')
</script>
</body>
</html>
