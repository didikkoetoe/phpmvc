<?php

class Programmer extends Controller
{
    public function index()
    {
        $data["judul"] = "Daftar Programmer";
        $data["programmer"] = $this->model('Programmer_model')->getAllPrg();
        $this->view("templates/header", $data);
        $this->view("programmer/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id)
    {
        $data["judul"] = "Detail Programmer";
        $data["programmer"] = $this->model('Programmer_model')->getPrgById($id);
        $this->view("templates/header", $data);
        $this->view("programmer/detail", $data);
        $this->view("templates/footer");
    }

    public function tambah()
    {
        if ($this->model('Programmer_model')->tambahDataPrg($_POST) > 0) {
            Flasher::setFlasher('berhasil', 'ditambahkan', 'success');
            header('Location:' . BASEURL . '/Programmer');
            exit;
        } else {
            Flasher::setFlasher('gagal', 'ditambahkan', 'danger');
            header('Location:' . BASEURL . '/Programmer');
            exit;
        }
    }
}
