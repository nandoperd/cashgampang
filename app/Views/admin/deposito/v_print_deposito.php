<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print Deposito</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/style.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style type="text/css" media="print">
    </style>
</head>

<body onload="window.print();">
<div style="width:800px; height:605px; padding:20px; text-align:center; border: 10px solid #787878">
<!-- <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878"> -->
<br>
<normal class="pull-right">FDB. Nt <?= $deposito['no_urut'] ?></normal><br>
       <span style="font-size:30px; font-weight:bold" class="text-center">OVERSEAS EXPRESS BANK</span>
       <br>
       <span style="font-size:20px; font-weight:bold" class="text-center">SURAT DEPOSITO BERJANGKA</span>
       <br>
       <span style="font-size:17px; font-weight:bold" class="text-center">No. <?= $deposito['no_surat'] ?></span>
       <br>
       <span style="font-size:20px; font-weight:bold" class="text-center">TELAH DITERIMA TITIPAN DEPOSITO</span>
       <br><br>
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Atas Nama  &nbsp;&nbsp;&nbsp; : <b><?= $deposito['nama_deposit'] ?></b></p>  
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b><?= $deposito['alamat_deposit'] ?></b></p>  
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sejumlah      : <b>Rp. <?= $deposito['jumlah']?>,-</b></p>  
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<i><?= $deposito['jumlah_t'] ?> Rupiah</i>)</p>  
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Untuk jangka waktu <?= $deposito['tenor'] ?> (<i><?= $deposito['tenor_t'] ?></i>) Bulan</p>  
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan suku bunga sebesar <?= $deposito['sukubunga'] ?> % (<i><?= $deposito['sukubunga_t'] ?></i> perseratus) sebulan/setahun</p>  
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;menurut syarat-syarat sebagai tertera di sebelah</p>
    <normal class="pull-right">.................................................</normal><br> 
    <!-- <td align="left"><span class="label label-success pull-left">Shipped</span></td> -->
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="label label-success">Bunga sebulan Rp. <?= $deposito['bunga'] ?>,-</p> 
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jatuh waktu tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $deposito['bayar_awal'] ?></p>
    <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dibayar kembali tanggal &nbsp;: <?= $deposito['bayar_ambil'] ?></p>
  </h4>
</div>
</div>
</body>
</html>

