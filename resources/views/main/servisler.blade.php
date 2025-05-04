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
    <!-- Script Buy -->
    <div class="scriptbuy">
        <div class="container">
        @if ($products->isNotEmpty())
            @foreach($products as $index => $product)
                <div class="row">
                    @if ($index % 2 == 0)
                        <div class="column">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="">
                        </div>
                        <div class="column">
                            <div class="title">
                                <h1>{{ $product->name }}</h1>
                            </div>
                            <p>{{ $product->content }}</p>
                            <div class="send-message">
                                <button><a href="buy?product={{ $product->id }}">Satın Al</a></button>
                            </div>
                        </div>
                    @else
                        <div class="column">
                            <div class="title">
                                <h1>{{ $product->name }}</h1>
                            </div>
                            <p>{{ $product->content }}</p>
                            <div class="send-message">
                                <button><a href="buy?product={{ $product->id }}">Satın Al</a></button>
                            </div>
                        </div>
                        <div class="column">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="">
                        </div>
                    @endif
                </div>
            @endforeach
        @else
            <p>Maalesef aktif ürünümüz bulunmuyor.</p>
        @endif
        </div>
    </div>

    <!-- Script Features -->
    <div class="whatwearedoing">
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

    <!-- FAQs -->
    <div class="faqs" id="div4">
        <div class="faqs-container">
            <div class="faqs-title">
                <div class="box">
                    <h1>Sıkça Sorulan Sorular</h1>
                </div>
            </div>
            <div class="grid-section">
                <div class="row">
                    <div class="columnn">
                        <div class="dropdown-faqs" id="ddb-1">
                            <div class="dropdown-faqs-title">
                                <h2>Yapay zeka destekli borsa scripti nasıl çalışır?</h2>
                            </div>
                            <div class="dropdown-more">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                        <div class="content-dropdown-faqs" id="ddc-1">
                            <p>Yapay zeka destekli borsa scripti, piyasa verilerini analiz ederek alım-satım kararları
                                verir. Bu script, makine öğrenimi algoritmaları kullanarak geçmiş verileri inceler ve
                                gelecekteki piyasa hareketlerini tahmin eder. Kullanıcılar, scripti kendi stratejilerine
                                göre özelleştirebilir ve belirli kriterlere göre işlem yapmasını sağlayabilir.</p>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="columnn">
                    <div class="dropdown-faqs" id="ddb-2">
                        <div class="dropdown-faqs-title">
                            <h2>Scriptin kurulumu ve kullanımı kolay mıdır?</h2>
                        </div>
                        <div class="dropdown-more">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>

                    <div class="content-dropdown-faqs" id="ddc-2">
                        <p>Evet, scriptin kurulumu ve kullanımı oldukça kolaydır. Adım adım talimatlarla
                            birlikte
                            gelir
                            ve herhangi bir teknik bilgiye ihtiyaç duymadan kurulabilir. Ayrıca, kullanıcı dostu
                            bir
                            arayüzü vardır ve kullanıcıların ihtiyaçlarına göre özelleştirilebilir. Destek
                            ekibimiz
                            de
                            herhangi bir sorun yaşamanız durumunda size yardımcı olacaktır.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="columnn">
                    <div class="dropdown-faqs" id="ddb-3">
                        <div class="dropdown-faqs-title">
                            <h2>Bu script hangi borsalarla uyumludur?</h2>
                        </div>
                        <div class="dropdown-more">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>

                    <div class="content-dropdown-faqs" id="ddc-3">
                        <p>Yapay zeka destekli borsa scripti, dünyanın önde gelen borsalarıyla uyumludur.
                            Örneğin,
                            NYSE,
                            NASDAQ, LSE, ve Tokyo Borsası gibi büyük borsalarda kullanılabilir. Ayrıca,
                            çeşitli
                            kripto
                            para borsalarıyla da uyumlu olacak şekilde tasarlanmıştır. Desteklenen
                            borsaların tam
                            listesini sitemizden inceleyebilirsiniz.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="columnn">
                    <div class="dropdown-faqs" id="ddb-4">
                        <div class="dropdown-faqs-title">
                            <h2>Scriptin güvenliği nasıl sağlanmaktadır?</h2>
                        </div>
                        <div class="dropdown-more">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>

                    <div class="content-dropdown-faqs" id="ddc-4">
                        <p>Scriptin güvenliği bizim için bir önceliktir. Tüm kullanıcı verileri şifrelenmiş
                            bir
                            şekilde
                            saklanır ve SSL sertifikaları kullanılarak güvenli bir bağlantı sağlanır.
                            Ayrıca,
                            düzenli
                            güvenlik güncellemeleri yapılmakta ve en son güvenlik protokolleri
                            uygulanmaktadır.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>