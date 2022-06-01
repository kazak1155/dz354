@extends('layout')

@section('content')

    <?php var_dump($_POST); ?>
    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <h3 class="mb-0">
                <p>авторизация</p>
            </h3>
            <form action="/create" method="POST">
                <div>
                    введите почту
                    <br>
                    <input type="text" name="email" value="<?= $_POST['email'] ?? '' ?>">
                </div>
                <div>
                    введите пароль
                    <br>
                    <input type="password" name="password" value="<?= $_POST['password'] ?? '' ?>">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <br><br>
                <input type="submit" name="newPost" value="авторизоваться">
            </form>
        </div>
    </div>

@endsection
