<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href={{asset("image/logo.png")}}>
        <title>أكاديمية ارتياح</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
{{--            @include('layouts.navigation')--}}

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <div class="main-wrapper">
                @include('layouts.header')
                @include('layouts.sidebar')
                <div class="page-wrapper">
                    {{ $slot }}
                </div>
            </div>
        </div>
        </div>

        <script src={{asset("assets/js/jquery-3.2.1.min.js")}}></script>
        <script src={{asset("assets/js/popper.min.js")}}></script>
        <script src={{asset("assets/js/bootstrap.min.js")}}></script>
        <script src={{asset("assets/js/jquery.slimscroll.js")}}></script>
        <script src={{asset("assets/js/Chart.bundle.js")}}></script>
        <script src={{asset("assets/js/jquery.dataTables.min.js")}}></script>
        <script src={{asset("assets/js/chart.js")}}></script>
        <script src={{asset("assets/js/app.js")}}></script>
    </body>
</html>

