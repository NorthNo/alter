<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{ $page_name ?? 'Email Doğrulama' }}</title>
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
            <h1>Doğrulama</h1>
            <p>Şifre sıfırlama işlemi için Mail adresinizi doğrulamanız gerekmekte.
                Mail adresinize gelen link ile şifrenizi sıfırlayabilirsiniz.
            </p>
            <form action="/password_email" method="POST">
                @csrf
                <label for="email">Email Adresiniz</label>
                <input type="email" id="email" name="email" placeholder="Email Adresiniz.." required>
                <button type="submit">Doğrula</button>
            </form>
        </div>
    </div>
</body>
</html>
