<form action="simpan.php" method="post">
    <table>
        <tr>
            <td>ID Siswa</td>
            <td>:</td>
            <td><input type="number" name="id_siswa"></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa"></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</td>
            <td><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</td>
        </tr>
        <tr>
            <td>ID Jurusan</td>
            <td>:</td>
            <td><input type="text" name="id_jurusan"></td>
        </tr>
        <tr>
            <td>Nama Jurusan</td>
            <td>:</td>
            <td><input type="text" name="nama_jurusan"></td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="SIMPAN">
</form>