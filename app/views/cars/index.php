<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $data['judul']; ?>
    </title>
</head>

<body>
    <div class="container">
        <h1 class="my-4">
            <?= $data['judul']; ?> Page
        </h1>
        <div class="d-flex justify-content-end">
            <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#createModal">Add Cars
                +</button>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <table class="table border table-responsive table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Mobil</th>
                    <th scope="col">Jenis Mobil</th>
                    <th scope="col">Tahun Pembuatan</th>
                    <th scope="col">Plat Nomor</th>
                    <th scope="col">Harga Sewa / Hari</th>
                    <th scope="col">Gambar Mobil</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $i = 1;
                foreach ($data['mobil'] as $mobil) {
                ?>
                    <tr class="align-middle text-start">
                        <th scope="row">
                            <?= $i ?>
                        </th>
                        <td>
                            <?= $mobil['nama_mobil'] ?>
                        </td>
                        <td>
                            <?= $mobil['jenis_mobil'] ?>
                        </td>
                        <td>
                            <?= $mobil['tahun_pembuatan'] ?>
                        </td>
                        <td>
                            <?= $mobil['plat_nomor'] ?>
                        </td>
                        <td>
                            Rp.
                            <?= number_format($mobil['harga_sewa_per_hari']) ?>
                        </td>
                        <td>
                            <img src="../app/assets/cars/<?= $mobil['link_gambar_mobil'] ?>" alt="" width="160px" height="100px" class="object-fit-cover">
                        </td>
                        <td>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $mobil['mobil_id'] ?>">Edit</button>
                            <div class="modal fade" id="editModal<?= $mobil['mobil_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="judulModal">Edit Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <form action="<?= BASE_URL; ?>/cars/updateMobil" method="post" enctype="multipart/form-data">
                                                <div class="form-group my-2">
                                                    <label for="mobil_id">ID Mobil</label>
                                                    <input type="text" class="form-control" id="mobil_id" name="mobil_id" readonly value="<?= $mobil['mobil_id'] ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="nama_mobil">Nama Mobil</label>
                                                    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="<?= $mobil['nama_mobil'] ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="jenis_mobil">Jenis Mobil</label>
                                                    <input type="text" class="form-control" id="jenis_mobil" name="jenis_mobil" value="<?= $mobil['jenis_mobil'] ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="tahun_pembuatan">Tahun Pembuatan</label>
                                                    <input type="number" class="form-control" id="tahun_pembuatan" name="tahun_pembuatan" value="<?= $mobil['tahun_pembuatan'] ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="plat_nomor">Plat Nomor</label>
                                                    <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" value="<?= $mobil['plat_nomor'] ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="harga_sewa_per_hari">Harga Sewa / Hari</label>
                                                    <input type="number" class="form-control" id="harga_sewa_per_hari" name="harga_sewa_per_hari" value="<?= $mobil['harga_sewa_per_hari'] ?>">
                                                </div>
                                                <hr class="hr">
                                                <?php
                                                if ($mobil['link_gambar_mobil'] == null || $mobil['link_gambar_mobil'] == '' || !isset($mobil['link_gambar_mobil'])) {
                                                ?>
                                                    <div class="text-center mt-4 mb-3">
                                                        <h5 class="text-secondary">Gambar Kosong</h5>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="text-center rounded-circle  mt-4 mb-3">
                                                        <img src="../app/assets/cars/<?= $mobil['link_gambar_mobil'] ?>" alt="" width="120px" height="auto">
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <div class="form-group my-2">
                                                    <label for="link_gambar_mobil">Gambar Mobil</label>
                                                    <input type="file" class="form-control" id="link_gambar_mobil" name="link_gambar_mobil">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Ubah
                                                Data
                                                Mobil</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <button href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $mobil['mobil_id'] ?>">Delete</button>
                            <div class="modal fade" id="deleteModal<?= $mobil['mobil_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="judulModal">Delete Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah anda yakin ingin menghapus data "
                                                <strong>
                                                    <?= $mobil['nama_mobil'] ?>
                                                </strong>
                                                "?
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="<?= BASE_URL; ?>/cars/deleteMobil" method="post">
                                                <input type="text" name="mobil_id" value=" <?= $mobil['mobil_id'] ?>" hidden>
                                                <button type="submit" class="btn btn-primary">Yes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php
                    $i++;
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
                    <form action="<?= BASE_URL; ?>/cars/tambahMobil" method="post" enctype="multipart/form-data">
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
                            <input type="number" class="form-control" id="tahun_pembuatan" name="tahun_pembuatan" min="1900" max="2099">
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