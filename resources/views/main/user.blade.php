<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login_style.css" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    <div class="left-bottom-button" id="returnbutton">
        <i class="fa-solid fa-arrow-left"></i>
        <span class="button-text">Ana sayfaya dön</span>
    </div>

    <div class="container sign-up-mode">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="/login" method="POST" class="sign-in-form">
                    @csrf
                    <h2 class="title">Giriş Yap</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Email" name="email" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Şifre" name="password" required/>
                    </div>
                    <input type="submit" value="Giriş Yap" class="btn solid" />
                    <p class="social-text">Ve ya sosyal platformlar ile giriş yap</p>
                    <div class="social-media">
                        <a href="/auth/google" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
                <form action="/register_user" method="POST" class="sign-up-form">
                    @csrf
                    <h2 class="title">Kayıt Ol</h2>
                    
                    <div class="input-fields">
                        <div class="input-field names">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Ad" name="first-name"/>
                        </div>
                        <div class="input-field names">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Soyad" name="last-name"/>
                        </div>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required
                        value="{{ session('email', old('email')) }}" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Şifre" name="password" required minlength="8"/>
                    </div>
                    <input type="submit" class="btn" value="Kayıt Ol" />
                    <p class="social-text">Ve ya sosyal platformlar ile kayıt ol</p>
                    <div class="social-media">
                        <a href="/auth/google" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Burada yeni misiniz?</h3>
                    <p>
                        Yapay zeka destekli yönetim scriptlerimizden faydalanmak için tamamen ücretsiz bir şekilde kayıt olabilirsiniz!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        KAYIT OL
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Kayıtlı hesabın var mı?</h3>
                    <p>
                        Hizmetimizden faydalanmak için giriş yapabilirsiniz!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        GİRİŞ YAP
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script>
        document.getElementById('returnbutton').addEventListener('click', () => {
            window.location.href = '/';
        });

        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>