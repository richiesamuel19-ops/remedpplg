<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Donasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Donasi</h2>

    <form action="proses.php" method="POST">

        <label>Nama Donatur</label>
        <input type="text" name="nama_donatur" required>

        <label>Nominal Donasi</label>
        <input type="number" name="nominal" required>

        <label>Tanggal Donasi</label>
        <input type="date" name="tanggal" required>

        <label>Metode Pembayaran</label>
        <select name="metode_pembayaran" required>
            <option value="">-- Pilih Metode --</option>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="QRIS">QRIS</option>
            <option value="E-Wallet">E-Wallet</option>
            <option value="Tunai">Tunai</option>
        </select>

        <button type="submit">Simpan Donasi</button>

    </form>
</div>

</body>
</html>
