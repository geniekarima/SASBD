<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <title>Full Screen Contact Us Form Design | Smarteyeapps.com</title> --}}
    @yield('title')

    @yield('custom_css')
    @include('User.include.style')

</head>

<body class="bg-white">


    @include('User.include.header')

    @yield('content')



    @include('User.include.footer')


</body>

@include('User.include.script')
@yield('custom_js')

</html>
