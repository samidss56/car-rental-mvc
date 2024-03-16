<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
</head>

<body>
    <div class="container">
        <h1 class="my-4"><?= $data['judul']; ?> Page</h1>

        <div class="d-flex justify-content-end">
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">Add Payment Method +</button>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <table class="table border table-responsive table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">ID Tipe Pembayaran</th>
                    <th scope="col">Tipe Pembayaran</th>
                    <th scope="col">Kategori Tipe Pembayaran</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data['transaksi'] as $transaksi) {
                ?>
                    <tr class="align-middle text-start">
                        <th><?= $transaksi['tipe_pembayaran_id']; ?></th>
                        <td><?= $transaksi['tipe_pembayaran']; ?></td>
                        <td><?= $transaksi['kategori_tipe_pembayaran']; ?></td>
                        <td><button href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $transaksi['tipe_pembayaran_id'] ?>">Edit</button>
                            <div class="modal fade" id="editModal<?= $transaksi['tipe_pembayaran_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="judulModal">Edit Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= BASE_URL; ?>/Payment_method/updateTransaksi" method="post">
                                                <div class="form-group my-2">
                                                    <label for="tipe_pembayaran_id">ID Tipe Pembayaran</label>
                                                    <input type="text" class="form-control" id="tipe_pembayaran_id" name="tipe_pembayaran_id" readonly value="<?= $transaksi['tipe_pembayaran_id']; ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="tipe_pembayaran">Tipe Pembayaran</label>
                                                    <input class="form-control" id="tipe_pembayaran" rows="5" name="tipe_pembayaran" value="<?= $transaksi["tipe_pembayaran"] ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="kategori_tipe_pembayaran">Kategori Tipe Pembayaran</label>
                                                    <input type="text" class="form-control" id="kategori_tipe_pembayaran" rows="5" name="kategori_tipe_pembayaran" value="<?= $transaksi["kategori_tipe_pembayaran"] ?>">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Ubah Data Transaksi</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <button href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $transaksi['tipe_pembayaran_id'] ?>">Delete</button>
                            <div class="modal fade" id="deleteModal<?= $transaksi['tipe_pembayaran_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="judulModal">Delete Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin menghapus data <strong><?= $transaksi['tipe_pembayaran']; ?></strong>?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                            <form action="<?= BASE_URL; ?>/Payment_method/hapusTransaksi" method="post">
                                                <input type="text" name="tipe_pembayaran_id" value="<?= $transaksi['tipe_pembayaran_id']; ?>" hidden>
                                                <button type="submit" class="btn btn-primary">Yes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Create Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/Payment_method/tambahTransaksi" method="post">
                        <div class="form-group my-2">
                            <label for="tipe_pembayaran">Tipe Pembayaran</label>
                            <input type="text" class="form-control" id="tipe_pembayaran" name="tipe_pembayaran">
                        </div>
                        <div class="form-group my-2">
                            <label for="kategori_tipe_pembayaran">Kategori Tipe Pembayaran</label>
                            <input class="form-control" id="kategori_tipe_pembayaran" rows="5" name="kategori_tipe_pembayaran">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Tipe Pembayaran</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>