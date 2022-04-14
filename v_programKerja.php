<html>
    <head>
      <style>
        p{
          padding: 10px;
          background-color: blueviolet;
          width: 150px;
        }

        p a{
          color: white;
          text-decoration: none;
        }
      </style>
    </head>
    <body>
        <center>
        <h2> Daftar Program Kerja BEM </h2>
            <table border="1" cellpadding="5" cellspacing="0">
                <tbody align="center">
                    <tr><td>No</td><td>Nama Program Kerja</td><td>Surat Keterangan</td><td colspan = "2"> Aksi</td></tr>
                </tbody>
                <?php
                
                    foreach ($proker as $row) {
                        echo "<tr>
                              <td> $row[nomorProgram]</td>
                              <td> $row[namaProgram]</td>
                              <td> $row[suratKeterangan]</td>
                              <td><a href='?edit=$row[nomorProgram]'>Edit </a></td>
                              <td><a href='?hapus=$row[nomorProgram]'>Hapus </a></td>
                              </tr> ";
                    }
                ?>
            </table>
            <p><a href="?do=add">Tambah Proker</a></p>
        </center>
    </body>
</html>
