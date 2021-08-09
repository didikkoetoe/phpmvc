<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['programmer']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['programmer']['alamat']; ?></h6>
            <p class="card-text"><?= $data['programmer']['email']; ?></p>
            <p class="card-text"><?= $data['programmer']['umur']; ?></p>
            <a href="<?= BASEURL; ?>/Programmer" class="btn btn-success">Kembali</a>
        </div>
    </div>
</div>