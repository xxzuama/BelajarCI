<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Karyawan_model extends CI_Model
{
  private $_table = "karyawan";

  public $id;
  public $nama;
  public $alamat;
  public $telp;



  public function getAll(){
    return $this->db->get($this->_table)->result();
  }


}
