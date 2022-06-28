<?php
// Dosen
class Dosen extends CI_Controller{
    public function index(){
        $this->load->model('dosen_model','dsn1');

        $this->dsn1->nidn='01111';
        $this->dsn1->pendidikan='S1';

        $this->load->model('dosen_model','dsn2');

        $this->dsn2->nidn='02222';
        $this->dsn2->pendidikan='S2';

        $this->load->model('dosen_model','dsn3');

        $this->dsn3->nidn='03333';
        $this->dsn3->pendidikan='S3';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn'] = $list_dsn;
        
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
}
?>