<?php

require "./koneksiMVC.php";

class m_programKerja
{
    private $database;
    protected $tablename = "proker";

    public function __construct()
    {
        $this->database = new koneksiMVC();
        $this->database = $this->database->mysqli;
    }

    // Add Program Kerja
    public function setPogramKerja($nomorProgram, $namaProgram, $suratKeterangan)
    {
        $this->database->query("INSERT INTO $this->tablename (nomorProgram, namaProgram, suratKeterangan) VALUES ($nomorProgram, '$namaProgram', '$suratKeterangan')");
    }

    // Get All ProgramKerja
    public function getAll()
    {
        return $this->database->query("SELECT * FROM $this->tablename");
    }


    public function delProgram($where){
        $this->database->query("DELETE FROM $this->tablename WHERE nomorProgram = '$where'");
        
    }

    public function getPogramKerja($nomorProgram){
        $qry = $this->database->query("SELECT * FROM $this->tablename where nomorProgram = '$nomorProgram'");
        $row = mysqli_fetch_array($qry,MYSQLI_ASSOC);
        return $row;
    }

    public function editProgramKerja($no, $nama, $sk){
        $this->database->query("UPDATE $this->tablename SET namaProgram = '$nama', nomorProgram = '$no', suratKeterangan = '$sk' WHERE nomorProgram = '$no'");
        
    }

}
