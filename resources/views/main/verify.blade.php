<!DOCTYPE html>
<html lang="en">

@include('templates.header')

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
            <form action="/verify_account" method="POST">
                @csrf
                <div class="header">
                    <img src="img/alter-high-resolution-logo-transparent%20(1).png" alt="Logo" class="logo">
                    <h1>Email Doğrulama</h1>
                </div>
                <p>Lütfen devam etmek için size gönderdiğimiz kodu girin.</p>
                <input type="text" name="verification_code" id="" required maxlength="6" autocomplete="off">
                <button class="verify-btn">Verify Email</button>
                <p class="resend">Kod almadınız mı? <a href="verify-email">Tekrar gönder</a></p>
            </form>
        </div>
    </div>
</body>
</html>
