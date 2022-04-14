<?php

include_once("m_programKerja.php");

class c_programKerja {
  
   public $model;

   public function __construct(){
      $this->model = new m_programKerja();
      }

   public function invoke() {
      $proker = $this->model->getAll();
      include 'v_programKerja.php';
      
   }

   function insert() {
      $this->model->setPogramKerja($_POST['nomor'], $_POST['nama'], $_POST['surat']);
      header('Location: ?');
   }

   function viewInsert() {
      include "v_addProker.php";
   }

   function update() {
      $this->model->editProgramKerja($_POST['nomor'], $_POST['nama'], $_POST['surat']);
      header('Location:?');
   }

   function viewUpdate($nomorProgram) {
      $proker = $this->model->getPogramKerja($nomorProgram);
      include "v_editProker.php";
   }

   function delete($nomorProgram) {
      $this->model->delProgram($nomorProgram);
      header('Location: ?');
   }

}
