<div class="container mt-2">
    <div class="row">
        <div class="col-8">

            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash() ?>
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3 mt-3" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Programmer</button>

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

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Programmer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/programmer/tambah" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Programmer</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Informasi">Teknik Informasi</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Psikologi">Psikologi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>