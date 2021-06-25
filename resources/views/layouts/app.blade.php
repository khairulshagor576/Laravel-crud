<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="header" style="height: 100px;width:100%;background-color:#282A35;;text-align:center;color:white;padding:15px;">
    <p>CRUD with Laravel</p>
</div>
<div class="section" style="height: 430px;width:100%;">
    @yield('content')
</div>
<div style="height: 100px;width:100%;background-color:#282A35;text-align:center;color:white;padding:15px;">
    <p></p>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>