<title>Rijksoverheid Examen</title>

{{--custom css stylesheets--}}
    <link rel="stylesheet" href="{{ URL::to('css/stylesheet.css') }}">

{{--bootstrap 5.0--}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
{{--3rd party fonts--}}
    <script src="https://kit.fontawesome.com/56650c4ca9.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
{{--application--}}
<body>
    @include('layouts.navigation')

    @yield('content')

    @include('layouts.footer')
</body>

