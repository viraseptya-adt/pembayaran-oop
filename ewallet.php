<?php
require_once 'Pembayaran.php';
require_once 'Cetak.php';

class Ewallet extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "E-Wallet Rp " . $this->totalBayar();
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk E-Wallet: Rp " . $this->totalBayar();
    }
}
?>