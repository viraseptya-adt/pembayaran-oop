<?php
require_once 'Pembayaran.php';
require_once 'Cetak.php';

class VirtualAccount extends Pembayaran implements Cetak {

    public function prosesPembayaran() {
        if ($this->validasi()) {
            return "Virtual Account Rp " . $this->totalBayar();
        }
        return "Jumlah tidak valid";
    }

    public function cetakStruk() {
        return "Struk Virtual Account: Rp " . $this->totalBayar();
    }
}
?>