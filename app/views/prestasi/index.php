<div class="container mt-4">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Prestasi</h3>
            <ul class="list-group">
            <?php foreach( $data['mhs'] as $mhs) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <?= $mhs['nama_prestasi']?>
                    <a href="<?= BASEURL;?>/prestasi/detail/<?= $mhs['id']?>" class="badge text-bg-secondary">Selengkapnya</a>
                </li>
                <!-- <li class="list-group-item">A</li>
                <li class="list-group-item">B</li>
                <li class="list-group-item">C</li>
                <li class="list-group-item">D</li> -->
            <?php endforeach;?>
            </ul>   
        </div>
    </div>
</div>