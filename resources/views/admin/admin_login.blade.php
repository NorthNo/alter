<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{ $page_name ?? 'Admin Login' }}</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login-container">
        <div class="login-box">
            <h2>Yönetici Girişi</h2>
            <form action="/admin_login" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Email</label>
                    <input type="text" id="username" name="username" placeholder="Email adresini girin" required>
                </div>
                <div class="input-group">
                    <label for="password">Şifre</label>
                    <input type="password" id="password" name="password" placeholder="Şifre girin" required>
                </div>
                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const alertBox = document.querySelector('.alert');

            if (alertBox) {
                setTimeout(function () {
                    alertBox.classList.add('show');
                }, 100);

                setTimeout(function () {
                    alertBox.classList.add('hide');
                }, 5000);

                setTimeout(function () {
                    alertBox.remove();
                }, 5500);
            }
        });
    </script>
</body>
</html>
