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
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <table class="table border table-responsive table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">ID User</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($data['user'] as $user) {
                ?>
                    <tr class="align-middle text-start">
                        <th><?= $user['user_id']; ?></th>
                        <td><?= $user['nama_user']; ?></td>
                        <td><?= $user['alamat']; ?></td>
                        <td><?= $user['nomor_telepon']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><button href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $user['user_id'] ?>">Edit</button>
                            <div class="modal fade" id="editModal<?= $user['user_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="judulModal">Edit Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= BASE_URL; ?>/Users/updateUser" method="post">
                                                <div class="form-group my-2">
                                                    <label for="user_id">ID User</label>
                                                    <input type="text" class="form-control" id="user_id" name="user_id" readonly value="<?= $user['user_id']; ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="nama_user">Nama User</label>
                                                    <input class="form-control" id="nama_user" rows="5" name="nama_user" value="<?= $user["nama_user"] ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="alamat">Alamat User</label>
                                                    <input class="form-control" id="alamat" rows="5" name="alamat" value="<?= $user["alamat"] ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="nomor_telepon">Nomor Telepon</label>
                                                    <input class="form-control" id="nomor_telepon" rows="5" name="nomor_telepon" value="<?= $user["nomor_telepon"] ?>">
                                                </div>
                                                <div class="form-group my-2">
                                                    <label for="email">Email User</label>
                                                    <input type="text" class="form-control" id="email" rows="5" name="email" value="<?= $user["email"] ?>">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Ubah Data User</button>
                                        </div>
                                        </form>
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
</body>

</html>