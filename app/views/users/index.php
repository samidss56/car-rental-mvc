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
                    <th scope="col">ID User</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Alamat User</th>
                    <th scope="col">Nomor Telepon User</th>
                    <th scope="col">Email User</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Djarot Subagyo</td>
                    <td>Jl. Melati No. 456</td>
                    <td>087654321098</td>
                    <td>jane.smith@example.com</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>