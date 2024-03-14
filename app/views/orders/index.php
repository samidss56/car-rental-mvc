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
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status Sewa</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>1</td>
                    <td>1</td>
                    <td>2024-03-05</td>
                    <td>2024-03-06</td>
                    <td>500.000</td>
                    <td>Proses</td>
                    <td><button href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editStatusModal">Edit</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Edit Status Pemesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group my-2">
                            <label for="pesanan_id">ID Pesanan</label>
                            <input type="text" class="form-control" id="pesanan_id" name="pesanan_id" disabled value="1">
                        </div>
                        <div class="form-group my-2">
                            <label for="user_id">ID User</label>
                            <input type="text" class="form-control" id="user_id" name="user_id" disabled value="1">
                        </div>
                        <div class="form-group my-2">
                            <label for="mobil_id">ID Mobil</label>
                            <input class="form-control" id="mobil_id" rows="5" name="mobil_id" disabled value="1">
                        </div>
                        <div class="form-group my-2">
                            <label for="tanggal_sewa">Tanggal Sewa</label>
                            <input type="number" class="form-control" id="tanggal_sewa" rows="5" name="tanggal_sewa" disabled value="2023-03-05">
                        </div>
                        <div class="form-group my-2">
                            <label for="tanggal_kembali">Tanggal Kembali</label>
                            <input type="number" class="form-control" id="tanggal_kembali" rows="5" name="tanggal_kembali" disabled value="2023-03-06">
                        </div>
                        <div class="form-group my-2">
                            <label for="total_harga">Total Harga</label>
                            <input type="number" class="form-control" id="total_harga" rows="5" name="total_harga" disabled value="500.000">
                        </div>
                        <div class="form-group my-2">
                            <label for="status_pesanan">Status Pesanan</label>
                            <select name="status_pesanan" id="status_pesanan" class="form-select">
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Ubah Status Pesanan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>