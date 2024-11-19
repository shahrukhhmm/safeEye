<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>

    <div class="navbar" id="home">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('frontend/images/safeeyes.png') }}" alt="" style="width: 50px; height: 50px;">
            </a>
        </div>
        <nav class="nav">
            <ul class="mble">
                <li><a href="/">Home</a></li>
                <li><a href="#services">Services</a></li>

                <li><a href="#footer">Contact Us</a></li>
            </ul>
        </nav>
        <div class="sign-login">
            <ul>
                {{-- <li><a href="">Sign Up</a></li> --}}
                <li class="login"><a href="{{ url('login') }}" style="color: white;">Login</a></li>
            </ul>
        </div>
        <div class="hamburger">
            <div class="hamburg"><i class="fa-solid fa-bars"></i></div>
            <div class="cross"><i class="fa-solid fa-xmark"></i></div>
        </div>
    </div>

