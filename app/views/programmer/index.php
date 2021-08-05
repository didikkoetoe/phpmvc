<div class="container mt-2">
    <div class="row">
        <div class="col-8">
            <h2>Daftar Programmer</h2>

            <ul class="list-group">
                <?php foreach ($data["programmer"] as $prg) : ?>
                    <li class="list-group-item  d-flex justify-content-between align-items-center"><?= $prg['nama']; ?>
                        <a href="<?= BASEURL; ?>/programmer/detail/<?= $prg['id']; ?>" class="badge bg-primary">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>