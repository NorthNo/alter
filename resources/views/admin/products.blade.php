<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{$page_name ?? 'Ürünler'}}</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/38fe485012.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/minilogo.png">
</head>

<body>
    <div class="admin-dashboard">
        <div class="bars-containn">
            <div class="left-bar">
                <a class="logo-container" href="/">
                    <img src="{{asset('img/alter-high-resolution-logo-transparent.png')}}" alt="Logo">
                </a>
                <ul>
                    <li><a href="admin">
                            <i class="fa-solid fa-house"></i>
                            <p>Dashboard</p>
                        </a></li>
                    <li><a href="#" id="x1" class="active">
                            <i class="fa-solid fa-credit-card"></i>
                            <p>Manage Products</p>
                        </a></li>
                    <div class="elements open" id="1">
                        <li><a href="#" class="element">
                                <p>Ürünler</p>
                            </a></li>
                        <li><a href="product_control" class="element">
                                <p>Ürün Kontrolleri</p>
                            </a></li>
                    </div>

                    <li><a href="#" id="x2">
                            <i class="fa-solid fa-file"></i>
                            <p>Manage Sections</p>
                        </a></li>
                        <div class="elements" id="2">
                            <!--<li><a href="/sections/intro" class="element" onclick="showContent('s-1')">
                                    <p>Intro Section</p>
                                </a></li>
                            -->
                            <li><a href="/sections/mps" class="element" onclick="showContent('s-2')">
                                    <p>Most Populer Section</p>
                                </a></li>
                            <!--<li><a href="/sections/wwo" class="element" onclick="showContent('s-3')">
                                    <p>What We Offer</p>
                                </a></li>
                            <li><a href="/sections/sss" class="element" onclick="showContent('s-4')">
                                    <p>SSS</p>
                                </a></li>
                            -->
                            <li><a href="/sections/juc" class="element" onclick="showContent('s-5')">
                                    <p>Join Us Content</p>
                                </a></li>
                        </div>

                    <li><a href="#" id="x3">
                            <i class="fa-solid fa-gear"></i>
                            <p>General Settings</p>
                        </a></li>
                    <div class="elements" id="3">
                        <li><a href="general_settings" class="element" onclick="showContent('g-1')">
                                <p>API Settings</p>
                            </a></li>
                        <li><a href="general_settings" class="element" onclick="showContent('g-2')">
                                <p>Error Pages</p>
                            </a></li>
                    </div>
                </ul>
            </div>
        </div>
        <section class="dashboard">
            @includeIf('admin.templates.header')
            
            <div class="dash-content interactive-tab" id="p-1">
                <div class="product-grid grid-dashboard-title" data-title="Ürünler">
                    @foreach ($item as $element)
                    <div class="pop-item item product" href="#">
                        <div class="product-title">
                            <h1>{{ $element->name ?? '' }}</h1>
                        </div>
                        <div class="product-about">
                            <p>{{ $element->content ?? '' }}</p>
                        </div>
                        <div class="product-price">
                            <label for="">Fiyat</label>
                            <p>{{ $element->price ?? '' }} TL</p>
                        </div>
                        <div class="product-control">
                            <button class="p-inspect"><a href="/product_control?id={{ $element->id ?? '' }}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                            <button class="p-remove"><a href="/delete_product?id={{ $element->id ?? '' }}"onclick="return confirm('Bu ürünü silmek istediğinizden emin misiniz?')"><i class="fa-solid fa-trash"></i></a></button>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    @endforeach
                    <div class="pop-item item add-product" href="#">
                        <a href="/product_control/new_product">+</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>