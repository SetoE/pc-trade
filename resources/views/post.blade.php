<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PC Trade</title>

    <link rel="stylesheet" href="/app.css">
</head>

<body>
    <article>
        <h1><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h1>
        <sub>Posted by: <a href="/user/{{ $post->author->username }}">{{ $post->author->name }}</a></sub>

        <p>
            {{ $post->description }}
        </p>

        <a href="/">Go back</a>
    </article>
</body>

</html>
