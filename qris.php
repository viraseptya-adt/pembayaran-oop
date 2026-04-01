<?php
require_once 'Pembayaran.php';
require_once 'Cetak.php';

class QRIS extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "QRIS Rp " . $this->totalBayar();
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk QRIS: Rp " . $this->totalBayar();
    }
}
?>