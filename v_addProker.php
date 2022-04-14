<?php
    if (isset($_POST['ins'])){
        $control = new c_programKerja();
        $control->insert();
    }
?>
<html>
    <head></head>
    <body>
        <center>        
            <h2> Tambah Program Kerja BEM </h2>
            <form method="post" action="">
                <label>Nomor Program Kerja :</label><br>
                <input type="text" name="nomor" value=""><br>
                <label>Nama Program Kerja :</label><br>
                <input type="text" name="nama" value=""><br>
                <label>Surat Keterangan :</label><br>
                <input type="text" name="surat" value=""><br><br>
                <input type="submit" name="ins" value="Tambah">
            </form>
        </center>
    </body>
</html>
