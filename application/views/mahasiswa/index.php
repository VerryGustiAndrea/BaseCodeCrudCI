<div class="container">

    <div class="row mt-3">
       <div class="col-md-3">
       <div class="h3">Daftar Mahasiswa</div>
            <ul class="list-group">
            <?php foreach($mahasiswa as $mhs):?>
                <li class="list-group-item">A<?= $mhs['nama_provinsi']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>