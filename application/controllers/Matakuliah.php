<?php
// mata kuliah
class Matakuliah extends CI_Controller{
    public function index(){
        $this->load->model('matakuliah_model','mat1');

        $this->mat1->nama='pemweb';
        $this->mat1->sks='3';
        $this->mat1->kode='01';

        $this->load->model('matakuliah_model','mat2');

        $this->mat2->nama='basis data';
        $this->mat2->sks='2';
        $this->mat2->kode='02';

        $this->load->model('matakuliah_model','mat3');

        $this->mat3->nama='UI/UX';
        $this->mat3->sks='3';
        $this->mat3->kode='03';

        $list_mat = [$this->mat1, $this->mat2, $this->mat3];
        $data['list_mat'] = $list_mat;

        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
}
?>