<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/practices" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="practice[title]" placeholder="タイトル" value="{{ old('practice.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('practice.title') }}</p>
            </div>
            <div class="text">
                <h2>Text</h2>
                <textarea name="practice[text]" placeholder="今日も1日お疲れさまでした。">{{ old('practice.text') }}</textarea>
                <p class="text__error" style="color:red">{{ $errors->first('practice.text') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>