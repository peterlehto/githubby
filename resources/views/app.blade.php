<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GitHubby</title>

    {!! Html::style('css/all.css') !!}
    {{--<link rel="stylesheet" type="text/css" href="{{ elixir('assets/css/all.css') }}">--}}
</head>
<body>

@yield('nav')

@yield('content')

@include('partials/overlay')

<script src="{{ elixir('js/all.js') }}"></script>
@yield('footer')

</body>
</html>
