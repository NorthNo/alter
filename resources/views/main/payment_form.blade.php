<head>
    <link rel="stylesheet" href="css/style_payment.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Alter Ödeme</title>
</head>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="container p-0">
    <div class="card px-4">
        <p class="h8 py-3">Ödeme</p>
        <form action="/checkout?id={{ $product->id }}" method="post">
            @csrf
            <div class="row gx-3">
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Ad</p>
                        <input class="form-control mb-3" type="text" placeholder="Ad" value="" name="name">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Soyad</p>
                        <input class="form-control mb-3" type="text" placeholder="Soyad" value="" name="last_name">
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Kart Numarası</p>
                        <input class="form-control mb-3" type="text" placeholder="1234 5678 435678" name="card_no">
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Ay</p>
                        <input class="form-control mb-3" type="text" placeholder="Ay" name="expire_month">
                    </div>
                </div>
                <div class="col-3">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">Yıl</p>
                        <input class="form-control mb-3" type="text" placeholder="Yıl" name="expire_year">
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex flex-column">
                        <p class="text mb-1">CVV/CVC</p>
                        <input class="form-control mb-3 pt-2 " type="password" placeholder="***" name="cvc">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary w-100 mb-3">
                        <span class="ps-3">Satın Al - {{$product->name}}  <span class="ps-4 h5">{{$product->price}} TL</span></span>
                        <span class="fas fa-arrow-right"></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>