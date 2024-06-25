<?php 
ini_set("display_errors","");
$jmldata = $_POST["jmldata"];
$pstudio = $_POST["pstudio"];
$jdlfilm = $_POST["jdlfilm"];
$hrgtiket = $_POST["hrgtiket"];
$jmltiket = $_POST["jmltiket"];
$biaya = $_POST["biaya"];
$keterangan = $_POST["keterangan"];
$bayar = $_POST["bayar"];
$jmlmakan = $_POST["jmlmakan"];
$jmlminum = $_POST["jmlminum"];
$tp = $_POST["tp"];
$ttt = $_POST["ttt"];


?>



<html>
    <head>
</head>
<body>
    <form method="post">
 <center>       
<br><b> PENJUALAN TIKET "FUN CINEMA" <b>
<br><b> INDAH DWI FEBRIANI <b>
</center>
<br>
<br>
        
        <br>Jumlah Data <input type = "number" name="jmldata" value="<?php echo isset ($_POST['jmldata']) ? $_POST['jmldata'] : '' ; ?>"></br>
    <br>
    <br>
    <br>
    <table cellpadding = 8>
    <tr>
        <td>Pilihan Studio</td>
        <td><select name="pstudio">
            <option value="Studio 1">Studio 1</option>
            <option value="Studio 2">Studio 2</option>
            <option value="Studio 3">Studio 3</option>
            
        </select></td>
    </tr>
    <tr>
        <td>Judul Film</td>
        <td><input type = "text" name="jdlfilm" value="<?php echo isset ($_POST['jdlfilm']) ? $_POST['jdlfilm'] : '' ; ?>"></td>
    </tr>
    <tr>
        <td>Harga Tiket</td>
        <td><input type = "text" name="hrgtiket" value="<?php echo isset ($_POST['hrgtiket']) ? $_POST['hrgtiket'] : '' ; ?>"></td>
    </tr>
    <tr>
        <td>Jumlah Tiket</td>
        <td><input type = "text" name="jmltiket" value="<?php echo isset ($_POST['jmltiket']) ? $_POST['jmltiket'] : '' ; ?>"></td>
    </tr>
    <tr>
        <td>Biaya Tambahan</td>
        <td><input type = "checkbox" name="biaya" value="Makanan">Makanan</td>
        <td><input type = "text" name="jmlmakan" value="<?php echo isset ($_POST['jmlmakan']) ? $_POST['jmlmakan'] : '' ; ?>"></td>
        
    </tr>
    <tr>
        <td>              </td>
        <td><input type = "checkbox" name="biaya" value="Minuman">Minuman </td>
        <td><input type = "text" name="jmlminum" value="<?php echo isset ($_POST['jmlminum']) ? $_POST['jmlminum'] : '' ; ?>"></td>
    </tr>
    <tr>
        <td>Ket.Tiket</td>
        <td><input type = "text" name="keterangan" value="<?php echo isset ($_POST['keterangan']) ? $_POST['keterangan'] : '' ; ?>"></td>
    </tr>
    
</table>
<input type="submit" name="proses" value="PROSES" id="proses">
<br>
<br>
<table border = 5 cellpadding = 10>
    <tr>
        <td>Nama Studio</td>
        <td>Judul Film</td>
        <td>Harga Tiket</td>
        <td>Jml.Tiket</td>
        <td>Biaya Tambahan</td>
        <td>Ket.Paket</td>
        <td>Bayar</td>
    </tr>
    <tr>
        <td><?php echo "$pstudio" ?></td>
        <td><?php echo "$jdlfilm" ?></td>
        <td><?php echo $hrgtiket ?> </td>
        <td><?php echo $jmltiket ?> </td>
        <td><?php echo $biaya   ?></td>
        <td><?php echo "$keterangan" ?> </td>
        <td><?php echo "$bayar" ?> </td>
        
    </tr>
    
    

</table>
<br>
<br>
<table cellpadding = 8>
<tr>
        <td>Total Pendapatan</td>
        <td><input type = "text" name="tp" value="<?php echo isset ($_POST['tp']) ? $_POST['tp'] : '' ; ?>"></td>
    </tr>
    <tr>
        <td>Total Tiket Terjual</td>
        <td><input type = "ttt" name="ttt" value="<?php echo isset ($_POST['ttt']) ? $_POST['ttt'] : '' ; ?>"></td>
    </tr>

</body>
</html>

