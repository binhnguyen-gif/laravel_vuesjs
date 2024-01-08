<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bean</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div id="app">
{{--    <example-component></example-component>--}}
{{--    <my-component></my-component>--}}
{{--    <review-component></review-component>--}}
{{--    <computed-component></computed-component>--}}
{{--    <conditional-component></conditional-component>--}}
{{--    <list-rendering></list-rendering>--}}
    <user-dashboard></user-dashboard>
</div>

<script src="/js/app.js"></script>
</body>
</html>
