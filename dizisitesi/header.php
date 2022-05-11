<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Css.css" />
    <title>Dizi Sitesi</title>
</head>
<body>
<div class="buyukdiv" >

    <div class="menu">

        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="Hakkimizda.php">Hakkımızda</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
            <li>
                <form action="index.php" method="get">
                    <div id="box">
                        <input type="text" name="arama" id="search" placeholder="⌕  Dizi  Ara    ">

                    </div>
                </form>
            </li>

        </ul>
        <div class="giris">
            <?php
            if(isset($_SESSION['login']) AND $_SESSION['login'] == 1){
                echo 'Hoşgeldin '.$_SESSION['kulAdi'].' <a href="Giris.php?cikis=1">Çıkış</a>';
            }else{
                echo '<a href="Giris.php">Giriş</a>';
            }
            ?>

        </div>
    </div>
    <div class="logo"></div>
    <div style="width: 100%;height: 10px;"></div>