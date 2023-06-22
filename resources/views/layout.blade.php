<!-- Stored in resources/views/layouts/layout.blade.php -->
<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    EMPRESA ELECTRICA S.A
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
