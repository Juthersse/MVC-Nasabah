<?php
class Nasabah {
    private $id;
    private $nama;
    private $email;
    private $telp;

    public function __construct($xid, $xnama, $xemail, $xtelp) {
        $this->id = $xid;
        $this->nama = $xnama;
        $this->email = $xemail;
        $this->telp = $xtelp;
    }
}
?>
