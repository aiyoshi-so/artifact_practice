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
        <a href='/practices/create'>create</a>
        <div class='practices'>
            @foreach($practices as $practice)
                <div class='practice'>
                    <h2 class='title'>
                        <a href="/practices/{{ $practice->id }}">{{ $practice->title }}</a>
                    </h2>
                    <p class='text'>{{ $practice->text}}</p>
                    <form action="/practices/{{ $practice->id }}" id="form_{{ $practice->id }}" method="practice">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePractice({{ $practice->id }})">delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>{{ $practices->links()}}</div>
        <script>
            function deletePractice(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>