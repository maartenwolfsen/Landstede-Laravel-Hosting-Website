<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wie is hier nou de hosting!?</title>
        <style>
            body {
                background-image: url("https://www.detechniekacademie.nl/wp-content/uploads/2017/08/landstede-logo.png");
            }

            .content {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
            }

            .content-item {
                width: calc(25% - 20px);
            }

            .content-item h2 {
                color: pink;
            }

            .content-item img {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="content">
            @foreach ($content as $contentItem)
            <div class="content-item">
                <h2>{{ $contentItem->title }}</h2>
                <img src="{{ $contentItem->image }}" alt="{{ $contentItem->title }}">
                <p>{{ $contentItem->value }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>
