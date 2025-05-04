<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{ $list->email }}</title>
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
                <div class="grid-dashboard-half grid-dashboard-title" data-title="User Detail - {{$list->email ?? ''}}">
                    <div class="item b-white">
                        <label for="">First Name</label>
                        <input type="text" name="" id="" value="{{ $list->first_name ?? '-' }}" readonly>
                    </div>
                    <div class="item b-white">
                        <label for="">Last Name</label>
                        <input type="text" name="" id="" value="{{ $list->last_name ?? '-' }}" readonly>
                    </div>
                    <div class="item b-white">
                        <label for="">Email</label>
                        <input type="text" name="" id="" value="{{ $list->email ?? '-' }}" readonly>
                    </div>
                    <div class="item b-white">
                        <label for="">Phone Number</label>
                        <input type="text" name="" id="" value="{{ $list->phone_number ?? '-' }}" readonly>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>