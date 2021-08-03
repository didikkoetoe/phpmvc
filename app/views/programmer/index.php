<div class="container mt-2">
    <div class="row">
        <div class="col-8">
            <h2>Daftar Programmer</h2>

            <?php foreach ($data["programmer"] as $prg) : ?>
                <ul>
                    <li><?= $prg["nama"]; ?></li>
                    <li><?= $prg["alamat"]; ?></li>
                    <li><?= $prg["jurusan"]; ?></li>
                    <li><?= $prg["umur"]; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>