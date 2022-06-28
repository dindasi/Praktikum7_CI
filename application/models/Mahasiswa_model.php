<?php
class Mahasiswa_model extends CI_Model{
    public $id, $nama, $nim, $gender, $tmpt_lahir, $tgl_lahir, $ipk;

    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}
?>