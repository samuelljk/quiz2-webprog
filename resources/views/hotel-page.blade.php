<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reviews | ETS Web Programming</title>
</head>
<body>
    <article>
        @foreach ($reviews as $review)
            <h1>
                <a href="/hotel-page/{{ $review["slug"] }}">{{ $review["hotel"] }}</a>
            </h1>
            <h3><strong>By {{  $review["author"] }}</strong></h3> 
            <h5>Rating: {{ $review["rating"] }} , Likes: {{ $review["likes"] }}</h5>
            <p>{{ $review["content"] }}</p>
        @endforeach
    </article>
</body>
</html>