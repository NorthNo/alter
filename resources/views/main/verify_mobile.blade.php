<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{ $page_name ?? '' }}</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/minilogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    @includeIf('templates.head')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="verification-container">
        <div class="verification-box">
            <form action="/mobile/verify" method="POST">
                @csrf
                <div class="header">
                    <img src="../img/alter-high-resolution-logo-transparent%20(1).png" alt="Logo" class="logo">
                    <h1>Telefon Doğrulama</h1>
                </div>
                <p>Lütfen devam etmek için telefonunuza gönderdiğimiz kodu girin.</p>
                <input type="text" name="verification_code" id="" required maxlength="6" autocomplete="off">
                <button class="verify-btn">Doğrula</button>
                <p class="resend">Kod almadınız mı? <a href="verify-email">Tekrar gönder</a></p>
            </form>
        </div>
    </div>
</body>
</html>
