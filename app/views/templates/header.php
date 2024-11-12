<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIPPolindra <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>/beranda">
            PUSAT INFORMASI PRESTASI <br>
            <span class="subtext">Politeknik Negeri Indramayu</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link <?= $data['judul'] == 'Home' ? 'active' : '';?>" aria-current="page" href="<?= BASEURL; ?>/beranda">Home</a>
            <a class="nav-link <?= $data['judul'] == 'Kompetisi' ? 'active' : '';?>" href="<?= BASEURL; ?>/competition">Kompetisi</a>
            <a class="nav-link <?= $data['page'] == 'Prestasi' ? 'active' : '';?>" href="<?= BASEURL; ?>/prestasi">Prestasi</a>
            <a class="nav-link <?= $data['judul'] == 'Pengumuman' ? 'active' : '';?>" href="<?= BASEURL; ?>/pengumuman">Pengumuman</a>
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </div>
        </div>
    </div>
  </div>
</nav>