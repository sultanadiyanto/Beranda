<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>/home">
        <img src="<?= BASEURL;?>/img/logo_polindra.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
            PIPPolindra
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
            <a class="nav-link" href="<?= BASEURL; ?>/kompetisi">Kompetisi</a>
            <a class="nav-link" href="<?= BASEURL; ?>/prestasi">Prestasi</a>
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </div>
        </div>
    </div>
  </div>
</nav>