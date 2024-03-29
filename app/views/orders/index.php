<body>
    <div class="col-10">
        <div class="container">
            <h2 class="my-4">
                <?= $data['judul']; ?> Page
            </h2>

            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>

            <table class="table border table-responsive table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Nama User</th>
                        <th>Mobil</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Tanggal Kembali</th>
                        <th>Total Harga</th>
                        <th>Status Sewa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['order'] as $pesanan) : ?>
                        <tr class="align-middle text-start">
                            <td>
                                <?= $pesanan['pesanan_id'] ?>
                            </td>
                            <td>
                                <?= $pesanan['nama_user'] ?>
                            </td>
                            <td>
                                <img src="../app/assets/cars/<?= $pesanan['link_gambar_mobil'] ?>" alt="" width="160px" height="100px" class="object-fit-cover" title="<?= $pesanan['nama_mobil'] ?>">
                            </td>
                            <td>
                                <?= $pesanan['tanggal_pemesanan'] ?>
                            </td>
                            <td>
                                <?= $pesanan['tanggal_akhir'] ?>
                            </td>
                            <td>
                                <?= $pesanan['total'] ?>
                            </td>
                            <td>
                                <?= $pesanan['status_pesanan'] ?>
                            </td>
                            <td>
                                <button type=" button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editStatusModal<?= $pesanan['pesanan_id'] ?>">
                                    Edit Status
                                </button>
                                <div class="modal fade" id="editStatusModal<?= $pesanan['pesanan_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal<?= $pesanan['pesanan_id'] ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <form action="<?= BASE_URL; ?>/orders/ubahStatus" method="post">
                                                <div class="modal-body">
                                                    <h5 style="margin-bottom: 50px; margin-top: 50px;" class="text-center">
                                                        Apakah anda yakin untuk
                                                        menyelesaikan proses pesanan
                                                        <span class="text-italic text-secondary">
                                                            <?= $pesanan['nama_user'] ?>
                                                        </span>
                                                        ini?
                                                    </h5>
                                                    <cite class="text-danger d-flex mt-5" style="font-size: 10px;"><strong>Note
                                                            :
                                                        </strong> perhatian jika anda
                                                        menyetejui pesanan ini
                                                        maka anda tidak bisa
                                                        mengubah status pesanan lagi</cite>
                                                    <input type="text" name="pesanan_id" value="<?= $pesanan['pesanan_id'] ?>" hidden>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Ya, Ubah Status
                                                        Pesanan</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
    </div>

</body>

</html>