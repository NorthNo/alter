<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{ $page_name ?? 'Şifreyi Sıfırla' }}</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="verify-container">
    
        <div class="verify-box">
            <h1>Şifreyi Sıfırla</h1>

            <form action="/password_reset" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <label for="email">E-posta adresinizi girin:</label>
                <input type="email" name="email" value="{{ $email ?? old('email') }}" required>
                
                <label for="password">Yeni Şifre:</label>
                <input type="password" name="password" required>
                
                <label for="password_confirmation">Yeni Şifreyi Onaylayın:</label>
                <input type="password" name="password_confirmation" required>
                
                <button type="submit">Şifreyi Sıfırla</button>
            </form>
        </div>
    </div>
</body>
</html>
