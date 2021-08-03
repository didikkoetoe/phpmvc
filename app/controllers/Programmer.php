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
}
