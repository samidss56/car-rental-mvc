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
        <table class="table border table-responsive table-hover">
            <thead>
                <tr>
                    <th scope="col">Jenis Transaksi</th>
                    <th scope="col">Kategori Transaksi</th>
                    <th scope="col">Kode Transaksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>OVO</th>
                    <td>Non-tunai</td>
                    <td>217291</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>