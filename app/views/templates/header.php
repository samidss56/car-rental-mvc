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
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bolder " href="<?= BASE_URL; ?>/dashboard">Car Rental</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= BASE_URL; ?>/dashboard">Dashboard <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/cars">Cars</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/users">Users</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/orders">Orders</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/payment_method">Payment Method</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/history">History</a>
                </div>
            </div>
            <div class="d-flex">
                <a class="btn btn-danger" href="<?= BASE_URL; ?>/logout">Logout</a>
            </div>
        </div>
    </nav>