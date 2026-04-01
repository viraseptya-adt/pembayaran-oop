<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
</head>
<body>

<h2>Sistem Pembayaran</h2>

<form method="POST">
    Jumlah: <input type="number" name="jumlah" required><br><br>

    Metode:
    <select name="metode">
        <option value="transfer">Transfer Bank</option>
        <option value="ewallet">E-Wallet</option>
        <option value="qris">QRIS</option>
        <option value="cod">COD</option>
        <option value="va">Virtual Account</option>
    </select>

    <br><br>
    <button type="submit">Bayar</button>
</form>

<hr>

<?php
if ($_POST) {
    require_once 'TransferBank.php';
    require_once 'Ewallet.php';
    require_once 'QRIS.php';
    require_once 'COD.php';
    require_once 'VirtualAccount.php';

    $jumlah = $_POST['jumlah'];
    $metode = $_POST['metode'];

    switch ($metode) {
        case 'transfer':
            $obj = new TransferBank($jumlah);
            break;
        case 'ewallet':
            $obj = new Ewallet($jumlah);
            break;
        case 'qris':
            $obj = new QRIS($jumlah);
            break;
        case 'cod':
            $obj = new COD($jumlah);
            break;
        case 'va':
            $obj = new VirtualAccount($jumlah);
            break;
    }

    echo $obj->prosesPembayaran();
    echo "<br>";
    echo $obj->cetakStruk();
}
?>

</body>
</html>