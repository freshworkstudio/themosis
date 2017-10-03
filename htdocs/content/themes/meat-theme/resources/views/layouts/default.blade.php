<!DOCTYPE html>
<html lang="es">
<head>
    @include('helpers.gtm-head')
    @include('helpers.robots')

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href="{{ themosis_theme_assets() }}/images/favicon.png" rel="shortcut icon" />
    <meta name="description" content="">
    @include('helpers.theme-color')
    @wp_head
</head>
<body class="body">
    @include('helpers.gtm-body')
    @include('components.header')

    <div class="wrapper">
        @yield("content")
    </div>

    @include('components.footer')
    @include('helpers.google-maps-script')
    @stack('scripts')
</body>
</html>