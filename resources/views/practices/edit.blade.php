<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/practices/{{ $practice->id }}" method="POSTS">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='practice[title]' value="{{ $practice->title }}">
            </div>
            <div class='content__text'>
                <h2>本文</h2>
                <input type='text' name='practice[text]' value="{{ $practice->text }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>