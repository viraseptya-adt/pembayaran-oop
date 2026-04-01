<?php
abstract class Pembayaran {
    protected $jumlah;

    public function __construct($jumlah) {
        $this->jumlah = $jumlah;
    }

    abstract public function prosesPembayaran();

    public function validasi() {
        return $this->jumlah > 0;
    }

    public function diskon() {
        return $this->jumlah * 0.10;
    }

    public function pajak() {
        return $this->jumlah * 0.11;
    }

    public function totalBayar() {
        $total = $this->jumlah - $this->diskon();
        return $total + $this->pajak();
    }
}
?>