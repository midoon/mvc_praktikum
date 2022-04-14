<?php
class koneksiMVC{

    public $mysqli;

    public function __construct()
    {
  $this->mysqli =  mysqli_connect("localhost", "root", "hrnmysql", "modul7");
    }
}
