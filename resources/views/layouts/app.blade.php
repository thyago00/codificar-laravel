<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="{{csrf_token()}}">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}} ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
    .navbar{
        margin-bottom: 20px;
    }
</style>
</head>
<body>
    @component('menu', ["current" => $current]) 
    @endcomponent
    <div class="container">
        <main role="main">
            @hasSection('body')
            @yield('body')
            @endif
        </main>
    </div>
<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>