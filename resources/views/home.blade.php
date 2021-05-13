
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Movies</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="shortcut icon" href="{{asset("img/favicon.ico")}}" type="image/x-icon">
</head>
<body>
    <h1>BEST MOVIES</h1>
    
        @foreach ($movies as $movie)
        <h2>Title: {{$movie['title']}}</h2>
        <h3>Director: {{$movie['director']}}</h3>
        <p>Genre: {{$movie['genre']}}</p>
        <p>Synopsis: {{$movie['synopsis']}}</p>
        @endforeach
        
    
</body>
</html>