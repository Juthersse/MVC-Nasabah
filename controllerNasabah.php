<?php
include_once("modelNasabah.php");

class ControllerNasabah{
    public function __construct(){
        $this->model_nasabah= new ModelNasabah();
        $this->index();
    }
    public function index(){
        echo "Model View Controller Demo / Index
        <br>";
    }
    public function addRecord($id,$nama,$email,$telp){
        echo "Add New Record ..<br>";
        $xnasabah = new nasabah($id,$nama,$email,$telp);
        $this->model_nasabah->insert($xnasabah);
    }

    public function viewAllRecord(){
        echo "View All Record ..<br>";
        $result = $this->model_nasabah->getAll();
        print_r($result);
    }

    public function viewSingleRecord($rec){
        echo "View Record No. $rec..<br>";
        $result = $this->model_nasabah->get($rec);
        print_r($result);
    }

    public function updateRecord($rec,$xnasabah){
        echo "Update Record No. $rec..<br>";
        $this->model_nasabah->update($rec,$xnasabah);
    }
}
?>
