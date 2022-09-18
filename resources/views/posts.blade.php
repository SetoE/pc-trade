<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PC Trade</title>

    <link rel="stylesheet" href="app.css">
</head>

<body>
    <article>
        @foreach ($posts as $post)
            <h1>{{ $post->title }}</h1>
            <sub>Posted by: {{ $post->author }}</sub>

            <p>
                {{ $post->description }}
            </p>
        @endforeach
    </article>
</body>

</html>
