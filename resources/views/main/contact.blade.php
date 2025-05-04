<!DOCTYPE html>
<html lang="tr">

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
    <!-- Contact -->
    <div class="contact">
        <div class="content">
            <div class="grid-container">
                <div class="contact-column">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div>
                            <label for="fullname">Tam Ad*</label>
                            <input type="text" name="fullname" id="fullname" placeholder="Adınızı girin.." required />
                        </div>
                        
                        <div>
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" placeholder="Email adresinizi girin.." required />
                        </div>
                        
                        <div>
                            <label for="title">İletişim Başlığı</label>
                            <input type="text" name="title" id="title" placeholder="Lütfen mesajınız ile ilgili kısa bir başlık belirtin.." />
                        </div>
                        
                        <div>
                            <label for="message">Mesaj*</label>
                            <textarea name="message_content" id="message" placeholder="Mesajınızı girin.." required></textarea>
                        </div>
                        
                        <button type="submit">Mesaj Gönder</button>
                    </form>
                    
                </div>
                <div class="login-column">
                    <form action="{{ route('signup-contact') }}" method="POST">
                        @csrf        
                        <h1>Bize Katılın</h1>
                        <p>{{ $data->content ?? '' }}</p>

                        <label for="email">Email Adresi*</label>
                        <input type="email" name="email" id="email" placeholder="Email adresinizi girin.." />
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer id="div5">
        <div class="footer-top">
            <div class="footer-content">
                <div class="cont">
                    <h1>Sizlere Neler Sunuyoruz?</h1>
                    <p>Yatırımlarınızda kazancınızı her zaman yüksek tutmak mı istiyorsun?</p>
                    <div class="send-message">
                        <button onclick="">İletişime Geç</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-container">
                <div class="row">
                    <div class="column-footer">
                        alter.com © 2024 Tüm Hakları Saklıdır.
                    </div>
                    <div class="column-footer">
                        <div class="footer-grid">
                            <div class="f-navbar-element">
                                <a href="index.html">Ana Sayfa</a>
                            </div>
                            <div class="f-navbar-element">
                                <a href="index.html">Servisler</a>
                            </div>
                            <div class="f-navbar-element">
                                <a href="index.html">İletişim</a>
                            </div>
                            <div class="f-navbar-element">
                                <a href="index.html">Hesabım</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>