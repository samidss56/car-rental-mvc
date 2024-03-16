<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
</head>

<body>
    <div class="container">
        <h1 class="my-4">
            <?= $data['judul']; ?> Page
        </h1>
        <table class="table border table-responsive table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">ID Transaksi</th>
                    <th scope="col" class="text-center">ID User</th>
                    <th scope="col" class="text-center">Tanggal Transaksi</th>
                    <th scope="col" class="text-center">Status Pembayaran</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $i = 1;
                foreach ($data['history'] as $history) {
                ?>
                    <tr>
                        <th scope="row">
                            <?= $i ?>
                        </th>
                        <td>
                            <?= $history['transaksi_id'] ?>
                        </td>
                        <td>
                            <?= $history['user_id'] ?>
                        </td>
                        <td>
                            <?= $history['tanggal_kembali'] ?>
                        </td>
                        <td>
                            <?= $history['status_transaksi'] ?>
                        </td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
