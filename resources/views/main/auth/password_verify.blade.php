<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{ $page_name ?? 'Email Doğrulama' }}</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="verify-container">
        <div class="verify-box">
            <h1>Doğrulama</h1>
            <p>Email adresinize doğrulama kodu iletildi. İletilen link üzerinden şifrenizi yenileyebilirsiniz.</p>
            <form action="/reset_user_password" method="POST">
                @csrf
                <label for="verification-code">Doğrulama Kodu</label>
                <input type="text" id="verification-code" name="verification_code" placeholder="Doğrulama Kodu.." required>
                <button type="submit">Doğrula</button>
            </form>
            <p>E-postayı almadınız mı? <a href="#">Tekrar Gönder</a></p>
        </div>
    </div>
</body>
</html>
