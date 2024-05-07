<?php
  include_once("nasabah.php");

  class ModelNasabah{
    private $data=array();

    function __construct(){
    }

    function insert($xnasabah){
      $this->data[] = $xnasabah;
    }

    function getAll(){
      return $this->data;
    }

    function get($rec){
      return $this->data[$rec];
    }

    function update($rec,$xnasabah){
      $this->data[$rec] = $xnasabah;
    }
  }
?>
