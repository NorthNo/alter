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

    <div class="buy-container">
        <div class="buy-title">
            <h1>{{ $product_name }}</h1>
        </div>
        <div class="part-1">
            <div class="product-showbase">
                <div class="product-container">
                    <div class="product-image">
                        <img src="{{ asset('storage/' . $product_image) }}" alt="">
                    </div>
                </div>
            </div>
            <div class="product-main">
                <div class="product-container">
                    <div class="product-upper">
                        <div class="grid-part-1">
                            <p>By</p>
                            <a href="#">{{ $product_manager }}</a>
                            <p class="sales">
                                <i class=" fa-solid fa-cart-shopping"></i>
                                {{ $sales_number }}
                            </p>
                            <p class="sales-number">sales</p>
                        </div>
                        <div class="grid-part-3">
                            <p>Recently Updated <i class="fa-regular fa-circle-check"></i></p>
                        </div>
                        <div class="grid-part-2">
                            <h1>{{ $product_price }}</h1>
                        </div>
                    </div>
                    <div class="product-features-container">
                        @foreach (json_decode($product_features) as $feature)
                            @if ($feature)
                                <p>> {{ $feature }}<br></p>
                            @endif
                        @endforeach
                    </div>
                    <div class="product-buy-container">
                        <button class="buy-product">
                            @if($bought == null)
                                <i class="fa-solid fa-cart-shopping"></i><a href="/payment?product_id={{ $product_id }}">Satın Al</a>
                            @else
                                <a href="#">Ürünü Satın Aldınız</a>
                            @endif
                        </button>
                        <p>Price is in US dollars and excludes tax and handling fees</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="part-2">
            <div class="image-controller">
                <div class="product-container2">
                    <div class="image-item">
                        <img src="img/{{ $product_image }}" alt="">
                    </div>
                    <div class="version-scet">
                        <p>- Latest Version 1.2.0 – Updated {{ $last_update }}</p>
                    </div>
                </div>
            </div>
            <div class="about-more">
                <div class="product-container">
                    <div class="div1">
                        <div>Son Güncelleme</div>
                        <div>Paylaşım</div>
                    </div>
                    <div class="div2">
                        <div>{{ $last_update }}</div>
                        <div>{{ $share_date }}</div>
                    </div>
                        <div class="div3"><a href="#">Daha Fazla</a><i class="fa-solid fa-sort-down"></i></div>
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
  
    <script src="js/script.js"></script>
</body>

</html>