<!DOCTYPE html>
<html>
<head>
    <title>Form Penyewaan Buku</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Form Penyewaan Buku</h2>
    <form action="penyewaanpost.php" method="post">
        <table>
            <tr>
                <td>Judul buku :</td>
                <td><input type="text" name="judul_buku"></td>
            </tr>
            <tr>
                <td>Kategori Buku:</td>
                <td>
                    <select name="kategori" id="kategori">
                        <option value="Fiksi">Fiksi</option>
                        <option value="Non Fiksi">Non Fiksi</option>
                        <option value="Karya Ilmiah">Karya Ilmiah</option>
                        <option value="Majalah">Majalah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pinjam :</td>
                <td>
                    <select name="tanggal_pinjam">
                        <option value="">Tanggal pinjam</option>
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                    <select name="bulan" id="bulan">
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    <select name="tahun" id="tahun">
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Lama Pinjam :</td>
                <td><input type="number" name="lama_pinjam">hari</td>
            </tr>
            <tr>
                <td>Nama Anggota :</td>
                <td><input type="text" name="nama_anggota"></td>
            </tr>
            <tr>
                <td>Nama Petugas :</td>
                <td>
                    <select name="nama_petugas" id="nama_petugas">
                        <option value="Andi">Andi</option>
                        <option value="Budi">Budi</option>
                        <option value="Citra">Citra</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="btnsubmit" value="Simpan">
                    <input type="reset" name="btnreset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
