<?php
require_once 'Pembayaran.php';
require_once 'Cetak.php';

class COD extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "COD Rp " . $this->totalBayar();
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk COD: Rp " . $this->totalBayar();
    }
}
?>