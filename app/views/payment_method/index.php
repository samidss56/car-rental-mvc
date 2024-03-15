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
            <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#createModal">Add Payment Method +</button>
        </div>
        <table class="table border table-responsive table-hover">
            <thead>
                <tr>
                    <th scope="col">Jenis Transaksi</th>
                    <th scope="col">Kategori Transaksi</th>
                    <th scope="col">Kode Transaksi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>OVO</th>
                    <td>Non-tunai</td>
                    <td>217291</td>
                    <td><button href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button> <button href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button></td>
                </tr>
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
                    <form action="" method="post">
                        <div class="form-group my-2">
                            <label for="jenis_transaksi">Jenis Transaksi</label>
                            <input type="text" class="form-control" id="jenis_transaksi" name="jenis_transaksi">
                        </div>
                        <div class="form-group my-2">
                            <label for="kategori_transaksi">Kategori Transaksi</label>
                            <input class="form-control" id="kategori_transaksi" rows="5" name="kategori_transaksi">
                        </div>
                        <div class="form-group my-2">
                            <label for="kode_transaksi">Kode Transaksi</label>
                            <input type="number" class="form-control" id="kode_transaksi" rows="5" name="kode_transaksi">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data Mobil</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group my-2">
                            <label for="jenis_transaksi">Jenis Transaksi</label>
                            <input type="text" class="form-control" id="jenis_transaksi" name="jenis_transaksi" value="">
                        </div>
                        <div class="form-group my-2">
                            <label for="kategori_transaksi">Kategori Transaksi</label>
                            <input class="form-control" id="kategori_transaksi" rows="5" name="kategori_transaksi" value="">
                        </div>
                        <div class="form-group my-2">
                            <label for="kode_transaksi">Kode Transaksi</label>
                            <input type="number" class="form-control" id="kode_transaksi" rows="5" name="kode_transaksi" value="">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data Mobil</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Delete Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus data "OVO"?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Hapus Jenis Transaksi</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>