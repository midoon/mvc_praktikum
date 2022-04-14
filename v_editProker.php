<?php
    if (isset($_POST['edit'])){
        $control = new c_programKerja();
        $control -> update();
    }
?>
<html>
    <head></head>
    <body>
        <center> 
            <h2> Edit Program Kerja BEM </h2>
            <form method="post">
                <input type="hidden" name="nomor" value="<?php echo $proker['nomorProgram']?>">
                <label>Nama Program Kerja</label><br>
                <input type="text" name="nama" value="<?php echo $proker['namaProgram'] ?>"><br>
                <label>Surat Keterangan</label><br>
                <input type="text" name="surat" value="<?php echo $proker['suratKeterangan'] ?>"><br><br>
                <input type="submit" name="edit" value="OK">
            </form>
        </center>
    </body>
</html>