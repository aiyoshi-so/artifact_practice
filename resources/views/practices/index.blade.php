<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='practices'>
            @foreach ($practices as $practice)
                <div class='practice'>
                    <h2 class='title'>{{ $practice->title }}</h2>
                    <p class='text'>{{ $practice->text }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $practices->links() }}
        </div>
    </body>
</html>