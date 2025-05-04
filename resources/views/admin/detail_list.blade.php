<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{$page_name ?? 'Mesaj'}}</title>
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
                    <li><a href="admin" class="active">
                            <i class="fa-solid fa-house"></i>
                            <p>Dashboard</p>
                        </a></li>
                    <li><a href="#" id="x1"><i class="fa-solid fa-credit-card"></i>
                            <p>Manage Products</p>
                        </a></li>
                    <div class="elements" id="1">
                        <li><a href="products" onclick="showContent('p-1')" class="element">
                                <p>Ürünler</p>
                            </a></li>
                        <li><a href="products" onclick="showContent('p-2')" class="element">
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
                <div class="grid-dashboard-full grid-dashboard-title" data-title="{{ $page_name ?? 'Users' }}">
                    <div class="table_component" role="region" tabindex="0">
                        <table>
                            @if($page == "users")
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Mobile Number</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                    <tr>
                                        <td>{{$item->first_name ?? '-'}}</td>
                                        <td>{{$item->last_name ?? '-'}}</td>
                                        <td>{{$item->email ?? '-'}}</td>
                                        <td>{{$item->phone_number ?? '-'}}</td>
                                        <td><button><a href="user_control?id={{ $item->id ?? '' }}">İncele</a></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            @elseif($page == "products")
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Satış Sayısı</th>
                                    <th>Fiyat</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                    <tr>
                                        <td>{{$item->name ?? '-'}}</td>
                                        <td>{{$item->sales_number ?? '-'}}</td>
                                        <td>{{$item->price ?? '-'}}</td>
                                        <td><button><a href="user_control">İncele</a></button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            @elseif($page == "buy_history")
                            <thead>
                                <tr>
                                    <th>Ürün</th>
                                    <th>Email</th>
                                    <th>Fiyat</th>
                                    <th>Tarih</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                    <tr>
                                        <td>{{$item->product_name ?? '-'}}</td>
                                        <td>{{$item->email ?? '-'}}</td>
                                        <td>{{$item->price ?? '-'}}</td>
                                        <td>{{$item->created_at ?? '-'}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            @elseif($page == "contacts")
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Başlık</th>
                                    <th>Tarih</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                    <tr>
                                        <td>{{$item->id ?? '-'}}</td>
                                        <td>{{$item->email ?? '-'}}</td>
                                        <td>{{$item->title ?? '-'}}</td>
                                        <td>{{$item->created_at ?? '-'}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            @endif
                        </table>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>