<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Şifre Oluştur</title>
</head>
<body>
    <h1>Yeni Şifre Oluştur</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="email" name="email" required placeholder="E-posta adresinizi girin">
        <input type="password" name="password" required placeholder="Yeni Şifre">
        <input type="password" name="password_confirmation" required placeholder="Yeni Şifreyi Onaylayın">
        <button type="submit">Şifreyi Sıfırla</button>
    </form>
</body>
</html>
