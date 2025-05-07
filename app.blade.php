<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>{{ $title ?? '掲示板アプリ' }}</title>
</head>

<body>
    <header>
        <div class="container">
            <a href="/">
                <h2>掲示板アプリ</h2>
            </a>
        </div>
    </header>
    <main class="container">
        {{ $slot }}
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
