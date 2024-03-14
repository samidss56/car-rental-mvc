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
        <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#createModal">Add Cars +</button>
        <table class="table border table-responsive table-hover">
            <thead>
                <tr>
                    <th scope="col">ID Mobil</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Jenis Mobil</th>
                    <th scope="col">Tahun Pembuatan</th>
                    <th scope="col">Plat Nomor</th>
                    <th scope="col">Harga Sewa / Hari</th>
                    <th scope="col">Gambar Mobil</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Toyota Avanza</td>
                    <td>MPV</td>
                    <td>2020</td>
                    <td>B 1234 ABC</td>
                    <td>280.000</td>
                    <td>Gambar Mobil</td>
                    <td><button href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button> <button href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button></td>
                </tr>
            </tbody>
        </table>
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
                    <p>Apakah anda yakin ingin menghapus data "Toyota Avanza"?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Hapus Data Mobil</button>
                </div>
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
                            <label for="mobil_id">ID Mobil</label>
                            <input type="text" class="form-control" id="mobil_id" name="mobil_id" disabled value="1">
                        </div>
                        <div class="form-group my-2">
                            <label for="nama_mobil">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama_mobil" name="nama_mobil">
                        </div>
                        <div class="form-group my-2">
                            <label for="jenis_mobil">Jenis Mobil</label>
                            <input class="form-control" id="jenis_mobil" rows="5" name="jenis_mobil">
                        </div>
                        <div class="form-group my-2">
                            <label for="tahun_pembuatan">Tahun Pembuatan</label>
                            <input type="number" class="form-control" id="tahun_pembuatan" rows="5" name="tahun_pembuatan">
                        </div>
                        <div class="form-group my-2">
                            <label for="plat_nomor">Plat Nomor</label>
                            <input type="text" class="form-control" id="plat_nomor" rows="5" name="plat_nomor">
                        </div>
                        <div class="form-group my-2">
                            <label for="harga_sewa_per_hari">Harga Sewa / Hari</label>
                            <input type="number" class="form-control" id="harga_sewa_per_hari" rows="5" name="harga_sewa_per_hari">
                        </div>
                        <div class="form-group my-2">
                            <label for="link_gambar_mobil">Gambar Mobil</label>
                            <input type="file" class="form-control" id="link_gambar_mobil" rows="5" name="link_gambar_mobil">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ubah Data Mobil</button>
                </div>
                </form>
            </div>
        </div>
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
                            <label for="nama_mobil">Nama Mobil</label>
                            <input type="text" class="form-control" id="nama_mobil" name="nama_mobil">
                        </div>
                        <div class="form-group my-2">
                            <label for="jenis_mobil">Jenis Mobil</label>
                            <input class="form-control" id="jenis_mobil" rows="5" name="jenis_mobil">
                        </div>
                        <div class="form-group my-2">
                            <label for="tahun_pembuatan">Tahun Pembuatan</label>
                            <input type="number" class="form-control" id="tahun_pembuatan" rows="5" name="tahun_pembuatan">
                        </div>
                        <div class="form-group my-2">
                            <label for="plat_nomor">Plat Nomor</label>
                            <input type="text" class="form-control" id="plat_nomor" rows="5" name="plat_nomor">
                        </div>
                        <div class="form-group my-2">
                            <label for="harga_sewa_per_hari">Harga Sewa / Hari</label>
                            <input type="number" class="form-control" id="harga_sewa_per_hari" rows="5" name="harga_sewa_per_hari">
                        </div>
                        <div class="form-group my-2">
                            <label for="link_gambar_mobil">Gambar Mobil</label>
                            <input type="file" class="form-control" id="link_gambar_mobil" rows="5" name="link_gambar_mobil">
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


</body>

</html>