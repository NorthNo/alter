<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{$page_name ?? 'Sections'}}</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/38fe485012.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/minilogo.png">
</head>

<body>
    <div class="admin-dashboard">
        <div class="bars-containn">
            <div class="left-bar">
                <a class="logo-container" href="/">
                    <img src="../img/alter-high-resolution-logo-transparent (1).png" alt="Logo">
                </a>
                <ul>
                    <li><a href="/admin">
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
                        <li><a href="/products" onclick="showContent('p-2')" class="element">
                                <p>Ürün Kontrolleri</p>
                            </a></li>
                    </div>

                    <li><a href="#" id="x2" class="active">
                            <i class="fa-solid fa-file"></i>
                            <p>Manage Sections</p>
                        </a></li>
                    <div class="elements open" id="2">
                        <li><a href="/sections/intro" class="element">
                                <p>Intro Section</p>
                            </a></li>
                        <li><a href="/sections/mps" class="element">
                                <p>Most Populer Section</p>
                            </a></li>
                        <li><a href="/sections/wwo" class="element">
                                <p>What We Offer</p>
                            </a></li>
                        <li><a href="/sections/sss" class="element">
                                <p>SSS</p>
                            </a></li>
                        <li><a href="/sections/juc" class="element">
                                <p>Join Us Content</p>
                            </a></li>
                        <li><a href="/sections/setup" class="element">
                                <p>Setup Section</p>
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
            <header>
                <div class="navbar-dashboard">
                    <div class="vertical-container">
                        <div class="search-div">
                            <div class="icon"><i class="fa-solid fa-search"></i></div>
                            <input type="search" placeholder="Search here..">
                        </div>
                        <div class="user-sect">
                            <div class="notification">
                                <i class="fa-solid fa-bell"></i>
                            </div>
                            <div class="user-info">
                                <i class="fa-solid fa-user interactable"></i><i
                                    class="fa-solid fa-caret-down interactable-menu"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="dash-content interactive-tab">
                <form method="POST" action="/section/add/sss">
                    @csrf
                    <div class="grid-dashboard-half grid-dashboard-title" data-title="Sıkça Sorulan Sorular">
                        <a class="item">
                            <h1>Soru 1</h1>
                            <input type="text" placeholder="Soru" name="questions[0][title]" value="{{ $data[0]->answer ?? '' }}">
                            <textarea name="questions[0][content]" placeholder="Açıklama">{{ $data[0]->question ?? '' }}</textarea>
                        </a>
                        <a class="item">
                            <h1>Soru 2</h1>
                            <input type="text" placeholder="Soru" name="questions[1][title]" value="{{ $data[1]->answer ?? '' }}">
                            <textarea name="questions[1][content]" placeholder="Açıklama">{{ $data[1]->question ?? '' }}</textarea>
                        </a>
                        <a class="item">
                            <h1>Soru 3</h1>
                            <input type="text" placeholder="Soru" name="questions[2][title]" value="{{ $data[2]->answer ?? '' }}">
                            <textarea name="questions[2][content]" placeholder="Açıklama">{{ $data[2]->question ?? '' }}</textarea>
                        </a>
                        <a class="item">
                            <h1>Soru 4</h1>
                            <input type="text" placeholder="Soru" name="questions[3][title]" value="{{ $data[3]->answer ?? '' }}">
                            <textarea name="questions[3][content]" placeholder="Açıklama">{{ $data[3]->question ?? '' }}</textarea>
                        </a>
                    </div>
                    <div class="grid-dashboard-full">
                        <button class="upgrade-button">Güncelle</button>
                    </div>
                </form>
                
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>