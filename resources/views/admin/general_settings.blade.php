<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● Dashboard</title>
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

                    <li><a href="#" id="x3" class="active">
                            <i class="fa-solid fa-gear"></i>
                            <p>Settings</p>
                        </a></li>
                    <div class="elements open" id="3">
                        <li><a href="#" class="element" onclick="showContent('g-1')">
                                <p>General Settings</p>
                            </a></li>
                        <li><a href="#" class="element" onclick="showContent('g-2')">
                                <p>API Settings</p>
                            </a></li>
                        <li><a href="#" class="element" onclick="showContent('g-3')">
                                <p>Error Pages</p>
                            </a></li>
                    </div>
                </ul>
            </div>
        </div>
        <section class="dashboard">
            
            @includeIf('admin.templates.header')
            <!--
            <div class="dash-content interactive-tab" id="g-1">
                <div class="grid-dashboard grid-dashboard-title" data-title="General Settings">
                    <form action="/general_settings">
                    
                    </form>
                </div>
            </div>
            -->
            <!--
            <div class="dash-content interactive-tab" id="g-2" style="display: none;">
                <div class="grid-dashboard-full grid-dashboard-title" data-title="API Settings">
                    <form action="/api_credits_update" method="post">
                        <a class="item" href="#">
                            <input type="text" name="" id="" placeholder="SMTP mail">
                            <input type="text" name="" id="" placeholder="Google Client ID">
                            <input type="text" name="" id="" placeholder="Google Client Secret ID">
                            <input type="text" name="" id="" placeholder="Redirect URL">
                            <input type="submit" value="">
                        </a>
                    </form>
                </div>
            </div>
            -->
            <!--
            <div class="dash-content interactive-tab" id="g-3" style="display: none;">
                <div class="grid-dashboard-full grid-dashboard-title" data-title="Error Pages">
                    <a class="item" href="#">

                    </a>
                </div>
            </div>
            -->
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>