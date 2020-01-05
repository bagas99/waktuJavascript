<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- START script fungsi untuk menampilkan tanggal -->
    <script language="JavaScript">
        var tanggalLengkap = new String();
        var namaHari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namaHari = namaHari.split(" ");
        var namaBulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
        namaBulan = namaBulan.split(" ");
        var tgl = new Date();
        var hari = tgl.getDay();
        var tanggal = tgl.getDate();
        var bulan = tgl.getMonth();
        var tahun = tgl.getFullYear();
        tanggalLengkap = namaHari[hari] + ", " +tanggal+ " " +namaBulan[bulan]+ " " +tahun;
    </script>
    <!-- END -->

    <!-- START script fungsi untuk menampilkan waktu -->
    <script type="text/javascript">
        // 1 detik = 1000
        window.setTimeout("waktu()",1000);
        function waktu() {
            var tanggal = new Date();
            setTimeout("waktu()",1000);
            document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds()+" WIB";
        }
    </script>
    <!-- END -->
</head>
<body>
    <script language='JavaScript'>document.write(tanggalLengkap);</script>
    <div id='jam'></div>
</body>
</html>