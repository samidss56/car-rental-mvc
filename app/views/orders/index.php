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
                    <th scope="col">ID Pesanan</th>
                    <th scope="col">ID User</th>
                    <th scope="col">ID Mobil</th>
                    <th scope="col">Tanggal Pemesanan</th>
                    <th scope="col">Status Pemesanan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1</td>
                    <td>1</td>
                    <td>2024-03-05</td>
                    <td>Proses</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>