<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alter ● {{ $page_name ?? '^Ürün Kontrol' }}</title>
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
                        <li><a href="products" class="element">
                                <p>Ürünler</p>
                            </a></li>
                        <li><a href="#" class="element">
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
                <div class="product-control-grid grid-dashboard-title" data-title="Seçilen Ürün - {{$item->name ?? ''}}">
                    <div class="control-area">
                        <div class="control">
                            <div class="product-left">
                                <form action="/update_product?id={{$item->id}}" method="POST">
                                    @csrf
                                    <div class="product-title-control">
                                        <input class="product-input" type="text" name="name" placeholder="Product_Name"
                                            value="{{$item->name ?? ''}}">
                                    </div>
                                    <div class="product-about-control">
                                        <textarea class="product-input" name="_content" id=""
                                            placeholder="Ürün Açıklaması">{{$item->content ?? ''}}</textarea>
                                    </div>
                                    <div class="product-price-control">
                                        <input class="product-input" type="number" name="price" placeholder="Product_Price" value={{$item->price ?? ''}}>
                                    </div>
                                    <div class="select-product">
                                        <input class="product-input" type="text" name="" placeholder="Selected_Product"
                                            value={{$item->name ?? ''}} readonly>
                                    </div>
                                    <div class="product-update">
                                        <input class="product-input" type="submit" value="Güncelle">
                                    </div>
                                </form>
                            </div>
                            <div class="product-right">
                                <form action="/product_update?id={{ $item->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="logo-control">
                                        <div class="selected-logo-img">
                                            <img id="preview" src="img/{{ $item->image_path ?? '' }}" alt="" />
                                        </div>
                                        <div class="formbold-form-wrapper">
                                                <div class="formbold-file-input">
                                                    <input type="file" name="file" id="file" accept="image/*" onchange="previewImage(event)" required />

                                                    <label for="file">
                                                        <div>
                                                            <span class="formbold-drop-file"> Dosya Sürükle
                                                            </span>
                                                            <span class="formbold-or"> Ya da </span>
                                                            <span class="formbold-browse"> Gözat </span>
                                                        </div>
                                                    </label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="product-features">
                                        <ul>
                                            <?php $count = 0; ?>
                                            @foreach(json_decode($item->features) as $element)
                                                <li>
                                                    <input type="text" placeholder="Product Feature"
                                                        value="{{ $element }}" name="features[{{ $count }}]" />
                                                </li>
                                                <?php $count++; ?>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="product-update">
                                        <input class="product-input" type="submit" value="Güncelle">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
    
            reader.onload = function(e) {
                const img = document.getElementById('preview');
                img.src = e.target.result; // Seçilen dosyanın önizlemesini ayarlayın
            }
    
            if (file) {
                reader.readAsDataURL(file); // Dosyayı okuyun
            }
        }
    </script>
</body>

</html>