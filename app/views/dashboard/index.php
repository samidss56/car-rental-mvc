<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
</head>

<body>
    <div class="container">
        <h1 class="my-4"><?= $data['judul']; ?></h1>
        <div class="card-wrapper d-flex gap-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Transaksi</h5>
                    <div class="d-flex justify-content-between">
                        <h1 class="w-75">50</h1>
                        <div class="d-flex align-items-center justify-content-center w-25">
                            <img src="<?= BASE_URL; ?>/img/cash-coin.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Mobil</h5>
                    <div class="d-flex justify-content-between">
                        <h1 class="w-75">50</h1>
                        <div class="d-flex align-items-center justify-content-center w-25">
                            <img src="<?= BASE_URL; ?>/img/car-front.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Pengguna</h5>
                    <div class="d-flex justify-content-between">
                        <h1 class="w-75">50</h1>
                        <div class="d-flex align-items-center justify-content-center w-25">
                            <img src="<?= BASE_URL; ?>/img/people-fill.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>