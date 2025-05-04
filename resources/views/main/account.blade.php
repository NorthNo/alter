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
                    <a href="#" class="active">
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
                    <a href="settings">
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
        <div class="transactions">
            <table>
                @if($transactions != null)
                    <thead>
                        <tr>
                            <th scope="col">Ürün</th>
                            <th scope="col">Tutar</th>
                            <th scope="col">Tarih</th>
                            <th scope="col">Detaylar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $data)
                            <tr>
                                <td data-label="Ürün">{{$data->product_name}}</td>
                                <td data-label="Tutar">{{$data->price}} TL</td>
                                <td data-label="Tarih">{{$data->updated_at}}</td>
                                <td data-label="Detaylar"><a href="#">İndir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                @else
                    <span><center>Hiç bir ürün satın almadınız.</center></span>
                @endif
            </table>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>