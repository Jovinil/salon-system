<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Language" content="en">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap-5.0.0-alpha.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}">
		<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        @livewireStyles
    </head>
    <body>

        @include('layouts.header');

        @yield('content')

		<!-- ========================= JS here ========================= -->
        <script src="{{ asset('jquery/jquery-3.7.1.js') }}"></script>
		<script src="{{ asset('js/bootstrap.bundle-5.0.0.alpha-min.js') }}"></script>
        <script src="{{ asset('js/count-up.min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.min.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

        <script>
            // Get references to the modal and form
            const modal = new bootstrap.Modal(document.getElementById('myModal'));
            const form = document.getElementById('myForm');

            // Add an event listener for the form submission
            form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            // You can process the form data here (AJAX, etc.)

            // Optionally, keep the modal open and show a success message or other feedback
            alert('Form submitted, but modal remains open!');
            // No need to close the modal, so it stays open
            });
        </script>

    @livewireScripts
    </body>
</html>
