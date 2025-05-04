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
    <div class="bars-contain">
        <div class="left-bar">
            <ul>
                <li>
                    <a href="account">
                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                        <p>İşlemler</p>
                    </a>
                </li>
                <li>
                    <a href="wallet">
                        <i class="fa-solid fa-wallet"></i>
                        <p>Cüzdan</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">
                        <i class="fa-solid fa-gear"></i>
                        <p>Hesap Ayarları</p>
                    </a>
                </li>
                <li>
                    <a href="logout">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <p>Çıkış Yap</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="account">
            <div class="account-settings">
                <div class="div1">
                    <h1>Kişisel Bilgiler</h1>
                    <p>Nullam a ante felis. Donec fermentum justo at orci placerat, nec congue ex eleifend. Etiam vitae
                        gravida sem, in convallis ante.</p>
                </div>
                <div class="div2">
                    <h2>Ad Soyad</h2>
                </div>
                <div class="div3">
                    <input type="text" placeholder="Ad(*)" value="{{ $user->first_name ?? '' }}" readonly>
                </div>
                <div class="div4">
                    <input type="text" placeholder="Soyad(*)" value="{{ $user->last_name ?? '' }}" readonly>
                </div>
                <div class="div5">
                    <h2>Email Adresi</h2>
                </div>
                <div class="div6">
                    <input type="email" name="" id="" placeholder="Email Adresi(*)" value="{{ $user->email ?? '' }}" readonly>
                </div>
                <div class="div7">
                    <h2>Telefon Numarası</h2>
                </div>
                <div class="div8">
                    <input type="tel" name="" id="" placeholder="Telefon Numarası(*)" value="{{ $user->phone_number ?? '' }}" readonly>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>