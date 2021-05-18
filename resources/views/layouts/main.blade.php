
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="shortcut icon" href="{{asset("img/favicon.ico")}}" type="image/x-icon">
</head>

<body>
    <main>
        <div class="container">
            <h1>@yield('pageTitle')</h1>
            @yield('content')
        </div>        
    </main>
</body>


