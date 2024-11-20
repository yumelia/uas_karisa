 <?php
 if (isset($_POST['proses'])) {
$no = $_POST ['nomer'];
$nama1 = $_POST ['nama'];
$upd = $_POST['unit'];
$tglg = $_POST ['tanggal'];
$jabatan1 = $_POST ['jabatan'];
$lamaker = $_POST ['lama'];
$statusker = $_POST ['status'];
$bpjs1 = $_POST ['bpjs'];
$pinjaman1 = $_POST ['pinjaman'];
$cicil = $_POST ['tabungan'];
$infaq1 = $_POST ['infaq'];

class penggajihan {
    public $gaji_bersih;
    public function jabatan($no, $nama1, $upd, $tglg, $jabatan1, $lamaker, $statusker, $bpjs1, $pinjaman1, $cicil, $infaq1) {

if ($jabatan1 == "kepala sekolah"){
    $gaji = 10000000;
} elseif ($jabatan1 == "wakasek"){
    $gaji = 7000000;
} elseif ($jabatan1 == "guru"){
    $gaji = "5000000";
} elseif ($jabatan1 == "ob"){
    $gaji = 2500000;
} else {
    $gaji = 0;
}if ($statusker == "Tetap") {
    $bonus = 1000000;
} else {
    $bonus = 0;
}
$this->gaji_bersih = $gaji + $bonus - $bpjs1 + $pinjaman1 + $cicil + $infaq1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<center>
    <h3>Struck Gaji</h3>
    <div class="container mt-5" style="width: 450px;">
            <div class="card">
                <div class="card-header text-center">
                    <h5><?php echo $nama1; ?></h5>
                </div>
                <div class="card-body text-primary">
                    <h3>STRUCK GAJI</h3>
                    <table>
                        <tr>
                            <td>NO</td>
                            <td>:</td>
                            <td><?php echo $no; ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $nama1; ?></td>
                        </tr>
                        <tr>
                            <td>Unit Pendidikan</td>
                            <td>:</td>
                            <td><?php echo $upd; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Gaji</td>
                            <td>:</td>
                            <td><?php echo $tglg; ?></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo $jabatan1; ?></td>
                        </tr>
                        <tr>
                            <td>Lama Kerja</td>
                            <td>:</td>
                            <td><?php echo $lamaker; ?></td>
                        </tr>
                        <tr>
                            <td>Status Kerja</td>
                            <td>:</td>
                            <td><?php echo $statusker; ?></td>
                        </tr>
                        <tr>
                            <td>Bonus</td>
                            <td>:</td>
                            <td><?php echo $bonus; ?></td>
                        </tr>
                        <tr>
                            <td>BPJS</td>
                            <td>:</td>
                            <td><?php echo $bpjs1; ?></td>
                        </tr>
                        <tr>
                            <td>PInjaman</td>
                            <td>:</td>
                            <td><?php echo $pinjaman1; ?></td>
                        </tr>
                        <tr>
                            <td>Cicilan</td>
                            <td>:</td>
                            <td><?php echo $cicil; ?></td>
                        </tr>
                        <tr>
                            <td>Infaq</td>
                            <td>:</td>
                            <td><?php echo $infaq1; ?></td>
                        </tr>
                        <tr>
                            <td>Gaji Bersih</td>
                            <td>:</td>
                            <td><?php echo $this->gaji_bersih; ?></td>
                        </tr>
                    </table>
                </div>
   </div>
</div>
</center>
</body>
</html>
<?php
    }
}
$cetak = new penggajihan();
$cetak->jabatan($no, $nama1, $upd, $tglg, $jabatan1, $lamaker, $statusker, $bpjs1, $pinjaman1, $cicil, $infaq1);
}
?>

  