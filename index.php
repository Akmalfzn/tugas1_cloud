<!DOCTYPE html>
<html>
<head>
    <title>techidnet.com</title>
    <style type="text/css">
        .wrap {
            width: 1200px;
            margin: 35px 85px;
        }

        /*Awal Header*/
        .wrap .logo{
            background : white;
            height: 180px;
            width: 250px;
            border-style: groove;
            border-width: 2px;
            float: left;
        }

        .wrap .header{
            background : #2EC4B6 ;
            height: 180px;
            width: 900px;
            border-style: groove;
            border-width: 2px;
            float: left;
        }

        .tanggal{
            color: white;
            text-align: right;
            padding-right: 20px;
        }
        /*Akhir Header*/

        /*Awal Body*/
        .wrap .content{
            background : white;
            padding-top: 50px;
            height: 600px;
            width: 1155px;
            border-style: groove;
            border-width: 2px;
            float: left;
            overflow-y:auto;
            overflow-x:scroll;
        }
        /*Akhir Body*/

        /*Awal Footer*/
        .wrap .footer{
            background : #00FFF7;
            padding-left: 20px;
            padding-top: 5px;
            height: 30px;
            width: 1135px;
            border-style: groove;
            border-width: 2px;
            float: left;
        }
        /*Akhir Footer*/

        h1{
            padding-left: 300px;
            font-size: 40px;
            padding-top: 10px;
            color: white;
            font-family: monospace;
        }
        
    </style>
</head>
<body background="bg.jpg">
    <div class="wrap">
        <div class="logo"><center>          
            <img src="logoUIN.png" height= "150px" width= "200px">
        </center></div>
        <div class="header">          
            <h1>Cloud Computing</h1>
            <div class="tanggal">
                <?php
                    // Tanggal hari ini
                    echo date('d F Y');
                ?> 
            </div> 
        </div>         
        <div class="content"><center>
            <h4>PERPUSTAKAAN UTAMA UIN SYARIF HIDYATULLAH JAKARTA</h4>
            <img src="perpusUIN.jpg" height= "250px" width= "500px">
            <p style="text-align: center">Perpustakaan utama UIN Jakarta ini bisa dibilang gedung baru. Perpustakaan-nya 
            sangat bersih dan juga sangat nyaman. Dan untuk isi buku Perpustakaan-nya juga lumayan lengkap. Sangat nyaman untuk mengerjakan tugas di sana.</p>
            <h4>STUDY FROM HOME</h4>
            <p style="text-align: center">Nama nya juga study from home, udah pasti ada positif dan negatifnya. positifnya ya kita bisa mengecilkan
            resiko penyebaran virus ini, kita juga bisa melatih team work secara berjauhan (tugas kelompok). kalo negatifnya sih jadi kurang produktif,
            jadi semakin susah juga buat memahami materi yang diberika dosen, jadi kurang konsentrasi juga untuk belajar karena suasana rumah, dan 
            tentunya masih banyak lagi hal lainnya mengenai suka duka dari study from home ini.</p>
        </center></div>
        <div class="footer">
            Copyright 2020 By Muhammad Akmal Fauzan 
        </div>
    </div>
</body>
</html>