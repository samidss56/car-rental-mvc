<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $data["judul"]; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/global.css">
</head>

<body>
    <div class="row">
        <div class="col-2">
            <nav class="sidebar-wrapper">
                <div class="sidebar-items-wrapper">
                    <a class="sidebar-brand" href="<?= BASE_URL; ?>/dashboard">Car Rental</a>
                    <a class="sidebar-item" href="<?= BASE_URL; ?>/dashboard">Dashboard</a>
                    <a class="sidebar-item" href="<?= BASE_URL; ?>/cars">Cars</a>
                    <a class="sidebar-item" href="<?= BASE_URL; ?>/users">Users</a>
                    <a class="sidebar-item" href="<?= BASE_URL; ?>/orders">Orders</a>
                    <a class="sidebar-item" href="<?= BASE_URL; ?>/payment_method">Payment Method</a>
                    <a class="sidebar-item" href="<?= BASE_URL; ?>/history">History</a>
                    <div class="btn-logout-wrapper">
                        <a class="btn btn-logout" href="<?= BASE_URL; ?>/logout">Logout</a>
                    </div>
                </div>
            </nav>
        </div>