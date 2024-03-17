<body>
    <div class="col-10">
        <div class="container">
            <h2 class="my-4">
                <?= $data['judul']; ?>
            </h2>
            <div class="card-wrapper d-flex gap-3 flex-wrap">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Transaksi</h5>
                        <div class="d-flex justify-content-between">
                            <h2 class="w-75">
                                <?= number_format($data['transaksi']) ?>
                            </h2>
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
                            <h2 class="w-75">
                                <?= $data['jumlah_mobil'] ?>
                            </h2>
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
                            <h2 class="w-75"><?= $data['jumlah_user'] ?></h2>
                            <div class="d-flex align-items-center justify-content-center w-25">
                                <img src="<?= BASE_URL; ?>/img/people-fill.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-primary" style="width: 18rem;">
                    <div class="card-body d-flex flex-column gap-3">
                        <h5 class="card-title text-white">Buat Pesanan Disini</h5>
                        <button class="btn btn-light fw-bolder" data-bs-toggle="modal" data-bs-target="#sewaModal">Buat
                            Pesanan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="sewaModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="<?= BASE_URL; ?>/orders/tambahOrder" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="judulModal">Form Sewa Mobil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">

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
                            <select class="form-select" name="id_mobil" id="nama_mobil">
                                <?php foreach ($data['mobil'] as $mobil) : ?>
                                    <option value="  <?php echo $mobil['mobil_id'] ?>">
                                        <?php echo $mobil['nama_mobil'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="tanggal_pemesanan">Tanggal Mulai Sewa</label>
                            <input type="date" class="form-control" id="tanggal_pemesanan" rows="5" name="tanggal_pemesanan">
                        </div>
                        <div class="form-group my-2">
                            <label for="tanggal_akhir">Tanggal Akhir Sewa</label>
                            <input type="date" class="form-control" id="tanggal_akhir" rows="5" name="tanggal_akhir">
                        </div>
                        <hr class="fw-bolder">
                        <div class="form-group my-2">
                            <label for="tipe_pembayaran">Metode Pembayaran</label>
                            <select class="form-select" name="tipe_pembayaran" id="tipe_pembayaran">
                                <?php foreach ($data['metode_pembayaran'] as $metode) : ?>
                                    <option value="  <?php echo $metode['tipe_pembayaran_id'] ?>">
                                        <?php echo $metode['tipe_pembayaran'] ?> (
                                        <?php echo $metode['kategori_tipe_pembayaran'] ?> )
                                    </option>
                                <?php endforeach; ?>

                            </select>
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