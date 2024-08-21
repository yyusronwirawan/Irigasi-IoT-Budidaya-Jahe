<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Tailwind Style --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- favicon --}}
    <link rel="website icon" type="png" href="{{ asset('img/morf-vanili.png') }}">

    <title>Bethaponik | {{ $title }}</title>
</head>

<body class="bg-main-bg font-sans">
    @include('partials.slidebar')

    <main class="p-2 lg:p-4 !pl-[260px] text-center" id="content">
        @yield('container')
    </main>

    <script src="{{ asset('../node_modules/tw-elements/dist/js/tw-elements.umd.min.js') }}"></script>
    <script src="{{ asset('../node_modules/flowbite/dist/flowbite.min.js') }}"></script>
</body>

</html>
