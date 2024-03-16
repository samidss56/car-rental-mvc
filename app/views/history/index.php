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
        <div class=”row”>
            <div class=”col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <table class="table border table-responsive table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">ID User</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Status Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <th>1</th>
                    <td>1</td>
                    <td>2024-03-15</td>
                    <td>Lunas</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>