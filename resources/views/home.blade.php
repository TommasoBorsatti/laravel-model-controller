
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>BEST MOVIES</h1>
    
        @foreach ($movies as $movie)
        <h2>Title: {{$movie['title']}}</h2>
        <h3>Director: {{$movie['director']}}</h3>
        <h6>Genre: {{$movie['genre']}}</h6>
        <h6>Synopsis: {{$movie['synopsis']}}</h6>
        @endforeach
        
    
</body>
</html>