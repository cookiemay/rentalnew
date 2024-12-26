<?php
include "koneksi.php";
include "navbar.php";
// session_start();
// // if(!isset($_SESSION['username'])){
// //     header("location:login.php?login_dahulu");
// // }

$sql_mobil="SELECT * FROM mobil ";
$query_mobil=mysqli_query($koneksi,$sql_mobil);
$sql_customer="SELECT * FROM customer";
$query_customer=mysqli_query($koneksi,$sql_customer);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH SEWA</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container py-5">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="card shadow">
                    <div class="navbar card-header bg-dark text-white">
                    <h3 class="text-center">TAMBAH SEWA</h3>
                    </div>
                    <div class="card-body">
 <form action="proses_tambah.php" method=POST>
      <div>  <label >Jenis Mobil</label>
        <select name="kd_mobil" class="form-control form-select " required>
            <option value="">PILIH MOBIL</option>
            <?php while($mobil=mysqli_fetch_assoc($query_mobil)){       
            echo "<option value='".$mobil['kd_mobil']."'>".$mobil['jenis_mobil']."</option>";
       }?>
        </select><br>
    </div>
    <div>
        <label >Nama Customer</label>
        <select name="kd_customer"  class="form-control form-select" required>
            <option value="">PILIH CUSTOMER</option>
            <?php 
            while($customer=mysqli_fetch_assoc($query_customer)){       
            echo "<option value='".$customer['kd_customer']."'>".$customer['nama']."</option>";
       }?></select><br>
    </div>
    <div>
        <label >Tanggal Pinjam</label>
        <input type="date" name="tgl_pinjam" class="form-control" required><br>
    </div>
    <div>    
        <label >Tanggal Kembali</label>
        <input type="date" name="tgl_kembali" class="form-control" required><br>
    </div>
        <input type="submit" value="SIMPAN" class="btn btn-primary col-sm-12 mt-2">
    </form>
</div>
</div>
    </div>
<div class="col-sm-6 col-md-6 col-lg-6">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h3>DATA MOBIL</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr class="text-center">
                                <th>KD MOBIL</th>
                                <th>JENIS MOBIL</th>
                                <th>WARNA</th>
                                <th>STOK</th>
                                <th>TARIF SEWA</th>
                            </tr>                        
                                <?php                                     
                                    while($mobil = mysqli_fetch_assoc($query_mobil)) { ?>
                                        <tr class="text-center">
                                            <td><?= $mobil['kd_mobil'] ?></td>
                                            <td><?= $mobil['jenis_mobil'] ?></td>
                                            <td><?= $mobil['warna'] ?></td>
                                            <td><?= $mobil['stok'] ?></td>
                                            <td>Rp. <?= number_format($mobil['tarif_sewa']) ?></td>
                                    
                                        </tr>
                                <?php } ?>
                        </table>
                        <div class="alert alert-info">
                            MOBIL YANG TIDAK BISA DISEWA KARENA STOK KOSONG: 
                            <?php
                            
                                $query_mobil = mysqli_query($koneksi, "SELECT * FROM mobil ");
                                while ($mobil = mysqli_fetch_assoc($query_mobil)) { 
                                    if($mobil['stok'] == 0) { ?>                            
                                    <b class="badge bg-danger text-white"><?= $mobil['jenis_mobil'] ?></b>        
                            <?php }else{ 
                            echo ""; 
                            } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>