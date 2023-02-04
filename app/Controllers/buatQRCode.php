<?php
if(isset($_GET['nomor']) && $_GET['nomor'] !=''){
    //tampung data kiriman
    $no_urut=$_GET['no_urut'];
    $nomor = $_GET['nomor'];

    // include file qrlib.php
    include "phpqrcode/qrlib.php";

    //Nama Folder file QR Code kita nantinya akan disimpan
    $tempdir = "temp/";

    //jika folder belum ada, buat folder 
    if (!file_exists($tempdir)){
        mkdir($tempdir);
    }

    #parameter inputan
    $isi_teks = $nomor;
    $namafile = $no_urut.".png";
    $quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
    $ukuran = 5; //batasan 1 paling kecil, 10 paling besar
    $padding = 2;

    QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);

    header('location:data_deposit.php');

}else{
    header('location:data_deposit.php');
}
?>