@php
    $cacheStr = 'CI_CACHE_REPLACE_ME';
@endphp

<!DOCTYPE html>
<html lang="{{ get_locale() }}">
<!--
Made Together
[https://together.agency]
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Stylesheets --}}
    {{--  <link rel="stylesheet" href="/wp-content/themes/theme/dist/webpack/styles.css?v={!! $cacheStr !!}"> --}}

    {{-- Add anything wordpressy --}}
    {{ wp_head() }}
</head>

<body>

    @include('components.header')

    <main class="content">
        @yield('content')
    </main>

    @include('components.footer')

    {{-- JS --}}
    {{-- <script src="/wp-content/themes/theme/dist/webpack/main.js?v={!! $cacheStr !!}"></script> --}}

    {{ wp_footer() }}

</body>

</html>
