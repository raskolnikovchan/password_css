<x-app>
  <h1>新規登録</h1>
    <form action="{{ route('register') }}" method="post">
      @csrf
      <x-input id="name" name="name" type="name" label="名前" />
      <x-input id="email" name="email" type="email" label="メールアドレス" />
      <x-input id="password" name="password" type="password" label="パスワード" />
      <x-input id="password_confirmation" name="password_confirmation" type="password" label="パスワード確認" />
      <button type="submit">新規登録</button>
  </form>
    <p>または</p>
    <a href="{{ route('login') }}">ログイン</a>
</x-app>
