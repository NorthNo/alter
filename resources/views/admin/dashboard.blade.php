<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{ $page_name ?? 'Dashboard'}}</title>
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
                    <li><a href="/admin" class="active">
                            <i class="fa-solid fa-house"></i>
                            <p>Dashboard</p>
                        </a></li>
                    <li><a href="#" id="x1"><i class="fa-solid fa-credit-card"></i>
                            <p>Manage Products</p>
                        </a></li>
                    <div class="elements" id="1">
                        <li><a href="/products" onclick="showContent('p-1')" class="element">
                                <p>Ürünler</p>
                            </a></li>
                        <li><a href="/product_control" onclick="showContent('p-2')" class="element">
                                <p>Ürün Kontrolleri</p>
                            </a></li>
                    </div>

                    <li><a href="#" id="x2"><i class="fa-solid fa-file"></i>
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
                        <li><a href="general_settings" class="element">
                                <p>API Settings</p>
                            </a></li>
                        <li><a href="general_settings" class="element">
                                <p>Error Pages</p>
                            </a></li>
                    </div>
                </ul>
            </div>
        </div>
        <section class="dashboard">
            @includeIf('admin.templates.header')

            <div class="dash-content">
                <div class="grid-dashboard grid-dashboard-title" data-title="Kullanıcılar">
                    <div class="pop-item item">
                        <h1>Kullanıcılar</h1>
                        <p>{{ $data->users_count ?? ''}}</p>
                        <a href="users_list" class="item-interactive">View All</a>
                    </div>
                    <div class="pop-item item" href="">
                        <h1>Email Doğrulanmamış</h1>
                        <p>{{ $data->e_unverified ?? ''}}</p>
                        <a href="users_list?item=e" class="item-interactive">View All</a>
                    </div>
                    <div class="pop-item item" href="">
                        <h1>Mobil Doğrulanmamış</h1>
                        <p>{{ $data->m_unverified ?? ''}}</p>
                        <a href="users_list?item=m" class="item-interactive">View All</a>
                    </div>
                </div>
                <div class="grid-dashboard grid-dashboard-title" data-title="Ürün">
                    <div class="pop-item item" href="">
                        <h1>Aktif Ürünler</h1>
                        <p>{{ $data->products_count ?? ''}}</p>
                        <a href="products" class="item-interactive">View All</a>
                    </div>
                    <div class="pop-item item" href="">
                        <h1>Satın Alma Geçmişi</h1>
                        <p>{{$data->buy_history}}</p>
                        <a href="buy_history" class="item-interactive">View All</a>
                    </div>
                    <div class="pop-item item" href="">
                        <h1>İletişim Mailleri</h1>
                        <p>{{$data->contacts}}</p>
                        <a href="contacts" class="item-interactive">View All</a>
                    </div>
                </div>
                <div class="grid-dashboard-half grid-dashboard-title" data-title="Toplam Gelir">
                    <div class="pop-item item" href="">
                        <h2 class="income-text">{{ $data->total_income }}<span class="minus-transaction"><i
                                    class="fa-solid fa-angle-down"></i>0.4%</span></h2>
                        <span>Toplam Satış</span>
                    </div>
                    <div class="pop-item item" href="">
                        <h2 class="income-text">{{ $data->weekly_income }}<span class="plus-transaction"><i
                                    class="fa-solid fa-angle-up"></i>1.2%</span></h2>
                        <span>Haftalık Satış</span>
                    </div>
                </div>
                <div class="grid-dashboard-full grid-dashboard-title" data-title="Son Satışlar">
                    <div class="pop-item item last-income" href="">
                        <ul>
                            @if($data->sell_history && count($data->sell_history) > 0)
                                @foreach($data->sell_history as $item)
                                    <li>
                                        <p class="date">{{ $item->created_at }}</p>
                                        <p class="user">{{ $item->email }}</p>
                                        <p class="service">{{ $item->product_name }}</p>
                                        <h2 class="income-text">{{ $item->price }}</h2>
                                    </li>
                                @endforeach
                            @else
                                <li>
                                    <p class="date"></p>
                                    <p class="user">Satış bulunmuyor</p>
                                    <p class="service"></p>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>