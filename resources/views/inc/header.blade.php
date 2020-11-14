<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fly Stream</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./images/favicon.png">
    <!-- All CSS -->
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="./plugins/slick-slider/css/slick.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fix.css">   

    @stack('styles')

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>

<body>