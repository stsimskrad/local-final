<!DOCTYPE html>
<html lang="en">
    @php $css_file = "css/app.css"; @endphp
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <link rel="icon" href="{{ url('sei.ico') }}">
        <script src="{{ mix('/js/manifest.js') }}" defer></script>
        <script src="{{ mix('/js/vendor.js') }}" defer></script>
        <script src="{{ mix('/js/app.js') }}" defer></script>
        <script>window.User = {!! json_encode(optional(auth()->user())->only('role')) !!}</script>
        @inertiaHead
    </head>

    <body>
        @inertia
    </body>
</html>
