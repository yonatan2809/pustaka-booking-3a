<?php
class Model_latihan1 extends CI_Model
{
     //membuat variabel untuk menamppung nilai
     public $nilai1, $nilai2, $nilai3;
     //methode penjumlahan
     public function jumlah($n1 = null, $n2 = null)
     {
          $this->nilai1 = $n1;
          $this->nilai2 = $n2;
          $this->hasil = $this->nilai1 + $this->nilai2;
          return $this->hasil;
     }
}
