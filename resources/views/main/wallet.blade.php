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
                    <a href="#" class="active">
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
            <div class="wallet-grid">
                <div class="wallet-control">
                    @if($has_credit_card ?? '')
                        <div class="credit-card">
                            <h1>VISA</h1>
                            <p>**** **** **** 1234</p>
                        </div>
                    @endif
                    <button class="credit-card-add" id="credit-card-modal">
                        <i class="fa-solid fa-square-plus"></i>
                    </button>
                </div>
                <div class="wallet-balance">
                    <div class="wallet-title">
                        <h1>Cüzdan Bakiyesi</h1>
                        <p>{{ $data->balance ?? '-'}} TL</p>
                    </div>
                    <div class="wallet-history">
                        @if($data && count($transactions) > 0)  
                            @foreach($transactions as $transaction)
                                <div class="wallet-op">
                                    <div class="operation-type-buy"><i class="fa-solid fa-circle-minus"></i></div>
                                    <div class="information">
                                        <p id="card">{{$transaction->product_name}}</p>
                                        <p id="date">{{$transaction->updated_at}}</p>
                                    </div>
                                    <div class="amount">
                                        <p id="{{ $transaction->type }}">{{$transaction->price}} TL</p>
                                        <p id="type">Transfer</p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <span><center>Satın alma geçmişiniz boş :(</center></span>
                        @endif
                    </div>                    
                </div>
            </div>
        </div>
        <div class="add-card-modal" id="card-modal">

        </div>
    </div>
    </div>
    <script>
        document.getElementById("credit-card-modal").addEventListener('click', () => {
            document.getElementById("card-modal").classList.toggle("open");
        });
    </script>
    <script src="js/script.js"></script>
</body>

</html>