<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>MOVIE DETAILS</h1>
    <h2>Title: {{$movie->title}}</h2>
    <h3>Genre: {{$movie->genre}}</h3>
    <p>Synopsis: {{$movie->synopsis}}</p>
    <a href={{route("movies.index")}}>_Go back to Best Movie list_</a>

</body>
</html>