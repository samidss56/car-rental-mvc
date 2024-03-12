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
                    <h5 class="card-title">Jumlah Pelanggan</h5>
                    <div class="d-flex justify-content-between">
                        <h1 class="w-75">50</h1>
                        <div class="d-flex align-items-center justify-content-center w-25">
                            <img src="<?= BASE_URL; ?>/img/people-fill.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-primary" style="width: 18rem;">
                <div class="card-body d-flex flex-column gap-3">
                    <h5 class="card-title text-white">Buat Pesanan Disini</h5>
                    <button class="btn btn-light fw-bolder" data-bs-toggle="modal" data-bs-target="#sewaModal">Buat Pesanan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sewaModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Form Sewa Mobil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group my-2">
                            <label for="nama_user">Nama Penyewa</label>
                            <input type="text" class="form-control" id="nama_user" name="nama_user">
                        </div>
                        <div class="form-group my-2">
                            <label for="alamat">Alamat Penyewa</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group my-2">
                            <label for="nomor_telepon">Nomor Telepon Penyewa</label>
                            <input type="number" class="form-control" id="nomor_telepon" rows="5" name="nomor_telepon">
                        </div>
                        <div class="form-group my-2">
                            <label for="email">Email Penyewa</label>
                            <input type="email" class="form-control" id="email" rows="5" name="email">
                        </div>
                        <hr class="fw-bolder">
                        <div class="form-group my-2">
                            <label for="nama_mobil">Nama Mobil</label>
                            <select class="form-select" name="nama_mobil" id="nama_mobil">
                                <option value="Toyota Avanza">Toyota Avanza</option>
                                <option value="Honda Jazz">Honda Jazz</option>
                                <option value="Mitsubishi Xpander">Mitsubishi Xpander</option>
                                <option value="Toyota Yaris">Toyota Yaris</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="jenis_mobil">Jenis Mobil</label>
                            <select class="form-select" name="jenis_mobil" id="jenis_mobil">
                                <option value="MPV">MPV</option>
                                <option value="Hatchback">Hatchback</option>
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="plat_nomor">Plat Nomor</label>
                            <input type="text" class="form-control" id="plat_nomor" rows="5" name="plat_nomor">
                        </div>
                        <div class="form-group my-2">
                            <label for="harga_sewa_per_hari">Harga Sewa / Hari</label>
                            <input type="number" class="form-control" id="harga_sewa_per_hari" rows="5" name="harga_sewa_per_hari">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Buat Pesanan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>