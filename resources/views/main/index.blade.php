<!DOCTYPE html>
<html lang="tr">


@includeIf('templates.header')

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
    <section class="intro-section">
        <div class="intro-container">
            <div class="intro-slide active" style="background-image: url('img/ai-image-3.jpg');">
                <div class="intro-overlay"></div>
                <div class="intro-text">
                    <h1>Yapay Zeka Destekli Borsa Analizleri</h1>
                    <p>Borsa yapay zeka çözümlerimizle yatırım kararlarınızı optimize edin. Gelişmiş algoritmalarımız ve
                        makine öğrenimi tekniklerimizle piyasa trendlerini öngörün, riskleri minimize edin ve
                        kazancınızı maksimize edin. Güvenilir ve yenilikçi yapay zeka çözümlerimizle borsa dünyasında
                        bir adım önde olun.</p>
                    <a href="#" class="cta-button">Daha Fazla Bilgi Edinin</a>
                </div>
            </div>
            <div class="intro-slide" style="background-image: url('img/ai-image-2.jpg');">
                <div class="intro-overlay"></div>
                <div class="intro-text">
                    <h1>Gelişmiş Yapay Zeka Analizleri</h1>
                    <p>Yapay zeka çözümlerimizle yatırım kararlarınızı güçlendirin. Akıllı analizler ve tahminler
                        sayesinde piyasa trendlerini önceden yakalayın, riskleri azaltın ve getirinizi artırın.
                        Yenilikçi yapay zeka teknolojilerimizle borsa dünyasında fark yaratın.</p>
                    <a href="#" class="cta-button">Yatırımınızı Güçlendirin</a>
                </div>
            </div>
        </div>
    </section>

    <div class="most-popular" id="div2">
        <div class="card-info">
            <h1>En Çok Tercih Edilenler</h1>
            <p>Yatırımlarınızda kazandıran yapay zeka destekli scriptlerimiz.</p>
        </div>
        <div class="overlay">
            @foreach ($products as $product)
            <div class="card">
                <div class="part">
                    <div class="title">
                        <h1>{{ $product->name }}</h1>
                        <p>{{ $product->creator }}</p>
                    </div>
                    <div class="features">
                        <ul>
                            @foreach (json_decode($product->features) as $feature)
                                @if ($feature)
                                    <li>
                                        <p><a>> </a>{{ $feature }}</p>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="details">
                        <button class="cta-button"><a href="buy?product={{ $product->id }}">Detaylar</a></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="whatwearedoing" id="div3">
        <div class="title-section">
            <div class="box">
                <h1>Neler Sağlıyoruz</h1>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="column div1">
                    <div class="icon">
                        <img src="img/icon1.png" alt="">
                    </div>
                    <h1>Paranızı Koruyun</h1>
                    <div class="ourproc">
                        Aenean varius feugiat dolor, at porta ante malesuada vel. Curabitur congue, augue quis iaculis
                        egestas, ante nisl egestas sem, eget mollis eros felis ut est.
                    </div>
                </div>
                <div class="column div2">
                    <div class="icon">
                        <img src="img/icon2.png" alt="">
                    </div>
                    <h1>Yüksek Kazanç</h1>
                    <div class="ourproc">
                        Morbi accumsan ipsum at scelerisque commodo. Morbi ullamcorper, ligula at iaculis mollis,
                        nisi
                        neque vehicula nisi, vel aliquet leo quam a lacus.
                    </div>
                </div>
                <div class="column div3">
                    <div class="icon">
                        <img src="img/icon3.png" alt="">
                    </div>
                    <h1>Otomasyon</h1>
                    <div class="ourproc">
                        Sed volutpat aliquet aliquam. Aliquam vitae turpis at leo congue aliquet vitae vel leo. Cras
                        ipsum ex, convallis quis imperdiet nec, fermentum eget dui. In ut augue orci.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="faqs" id="div4">
        <div class="faqs-container">
            <div class="faqs-title">
                <div class="box">
                    <h1>Sıkça Sorulan Sorular</h1>
                </div>
            </div>
            <?php $time = 1; ?>
            @foreach($data as $item)
            <div class="row">
                <div class="row">
                    <div class="columnn">
                        <div class="dropdown-faqs" id="ddb-{{$time}}">
                            <div class="dropdown-faqs-title">
                                <h2>{{ $item->answer }}</h2>
                            </div>
                            <div class="dropdown-more">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div class="content-dropdown-faqs" id="ddc-{{$time}}">
                            <p>{{ $item->question }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php $time++; ?>
            @endforeach        
        </div>
    </div>

    <footer id="div5">
        <div class="footer-top">
            <div class="footer-content">
                <div class="cont">
                    <h1>Sizlere Neler Sunuyoruz?</h1>
                    <p>Yatırımlarınızda kazancınızı her zaman yüksek tutmak mı istiyorsun?</p>
                    <div class="send-message">
                        <button onclick=""><a href="/contact"><a href="/contact">İletişime Geç</a></button>
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
                                <a href="index">Ana Sayfa</a>
                            </div>
                            <div class="f-navbar-element">
                                <a href="servisler">Servisler</a>
                            </div>
                            <div class="f-navbar-element">
                                <a href="kurulum">Kurulum</a>
                            </div>
                            <div class="f-navbar-element">
                                <a href="contact">İletişim</a>
                            </div>
                            <div class="f-navbar-element">
                                <a href="account">Hesabım</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>