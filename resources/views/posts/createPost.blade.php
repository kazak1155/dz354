@extends('layout')

@section('content')
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <h3 class="mb-0">
                <p>Create post</p>
            </h3>
            <form action="/create" method="POST">
                <div>
                    символьный код (только латинские символы, цифры, и символов тире и подчеркивания)
                    <br>
                    <input required type="text" name="characterСode" value="<?= $_POST['characterСode'] ?? '' ?>">
                </div>
                <div>
                    название статьи (не менее 5 и не более 100 символов)
                    <br>
                    <input required type="text" name="title" minlength="5" maxlength="100" value="<?= $_POST['title'] ?? '' ?>">
                </div>
                <div>
                    краткое описание статьи (не более 255 символов)
                    <br>
                    <input required type="text" name="topic"  maxlength="255" value="<?= $_POST['topic'] ?? '' ?>">
                </div>
                <div>
                    текст статьи
                    <br>
                    <textarea required rows="10" cols="45" name="text" ><?= $_POST['text'] ?? '' ?></textarea>
                </div>
                <div>
                    опубликовано
                    <input type="checkbox" name="published" value="1" checked>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br>

                <input type="submit" name="newPost" value="новая статья">
            </form>
        </div>
    </div>

@endsection
