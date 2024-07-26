<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body data-bs-theme="dark" class="minecraft">
        @include('partials.header')

        {!! $conten !!}

        @include('partials.footer')
    </body>
</html>
<style>
    @font-face {
        font-family: 'Minecraftia';
        src: url('/fonts/Family.woff') format('woff');
    }

    body {
        font-family: 'Minecraftia', sans-serif;
        background-image: url('/img/imagen_tierra.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        overflow-x: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    div {
        background-color: transparent;
    }
</style>