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
        <table class="table border table-responsive table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Mobil</th>
                    <th scope="col">Harga Sewa</th>
                    <th scope="col">Lama Sewa</th>
                    <th scope="col">Tanggal Selesai Transaksi</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                $i = 1;
                foreach ($data['history'] as $history) {
                ?>
                    <tr class="align-middle text-start">
                        <th scope="row">
                            <?= $i ?>
                        </th>
                        <td>
                            <?= $history['nama_user'] ?>
                        </td>

                        <td>
                            <img src="../app/assets/cars/<?= $history['link_gambar_mobil'] ?>" alt="" width="160px" height="100px" class="object-fit-cover" title="<?= $history['nama_mobil'] ?>">
                        </td>

                        <td>
                            Rp.
                            <?= number_format($history['harga_sewa_per_hari']) ?>
                        </td>
                        <td>
                            <?php
                            $tanggalMulaiSewaTimestamp = strtotime($history['tanggal_pemesanan']);
                            $tanggalAkhirSewaTimestamp = strtotime($history['tanggal_akhir']);
                            $selisihHari = ($tanggalAkhirSewaTimestamp - $tanggalMulaiSewaTimestamp) / (60 * 60 * 24);
                            if ($selisihHari < 0) {
                                $selisihHari = 0;
                            }
                            echo $selisihHari;
                            ?>
                            Hari
                        </td>

                        <td>
                            <?= $history['tanggal_transaksi'] ?>
                        </td>
                        <td>
                            <?= $history['status_pembayaran'] ?>
                        </td>
                        <td>
                            Rp.
                            <?= number_format($history['total']) ?>
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