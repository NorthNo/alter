<header id="div1">
    <div class="container">
        <a class="logo-container" href="/">
            <img src="img/alter-high-resolution-logo-transparent (1).png" alt="Logo">
        </a>
        <div class="navbar">
            <div class="nav">
                <ul class="nav-links">
                    <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}"><span>Home</span></a></li>
                    <li><a href="/servisler"
                            class="{{ Request::is('servisler') ? 'active' : '' }}"><span>Servisler</span></a></li>
                    <li><a href="/kurulum" class="{{ Request::is('kurulum') ? 'active' : '' }}"><span>Kurulum</span></a>
                    </li>
                    <li><a href="/contact"
                            class="{{ Request::is('contact') ? 'active' : '' }}"><span>İletişim</span></a></li>

                    @if (Auth::check())
                        <li><a href="/account" class="{{ Request::is('account') ? 'active' : '' }}"><i
                                    class="fa-solid fa-user"></i><span>Hesabım</span></a></li>
                    @else
                        <div class="login-signup">
                            <ul>
                                <li><a href="user" class="nav-button login-button"><span><i
                                                class="fa-solid fa-right-to-bracket"></i>Giriş Yap</span></a></li>
                                <li><a href="user" class="nav-button register-button"><span><i
                                                class="fa-solid fa-user"></i>Kayıt
                                            Ol</span></a></li>
                            </ul>
                        </div>
                    @endif
                </ul>
            </div>
        </div>
        <div class="nav-links-menu" id="navbar-dropdown">
            <ul>
                <li><a href="/"><span>Home</span></a></li>
                <li><a href="servisler" class="active"><span>Servisler</span></a></li>
                <li><a href="kurulum"><span>Kurulum</span></a></li>
                <li><a href="contact"><span>İletişim</span></a></li>
                <li><a href="account"><span>Hesabım</span></a></li>
            </ul>
        </div>
    </div>
</header>