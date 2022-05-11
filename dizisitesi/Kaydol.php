<?php
    include('ayar.php');
if(isset($_SESSION['login']) AND $_SESSION['login'] == 1){
    header('Location: index.php');
}
    $uye_ol = 0;
    if(isset($_POST['gonder'])){
        $kullanici_adi  =$_POST['isim'];
        $sifre          =$_POST['sifre'];
        $eposta         =$_POST['eposta'];
        $kayit_sorgu = "INSERT INTO `uyeler`(`kullaniciAdi`, `mail`, `sifre`) VALUES ('$kullanici_adi','$eposta','$sifre')";
        $kayit_sonuc = mysqli_query($baglan,$kayit_sorgu);
        if($kayit_sonuc){
            $uye_ol = 1;
        }else{
            $uye_ol = 2;
        }
    }
?>


<html>

<head>
    <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Css.css" />
    <title>Kayıt Ol! | Dizi Sitesi</title>
</head>
<body style="overflow: hidden;">
<div class="buyukdiv" style="height:0;" >

<div class="menu">

<ul>
<li><a href="index.php">Anasayfa</a></li>
<li><a href="Hakkimizda.html">Hakkımızda</a></li>
<li><a href="iletisim.html">İletişim</a></li>
<li><a href="">Arama</a></li>

</ul><div class="giris";>
<a href="Giris.php">Giriş</a></div>
</div>
<div class="logo"></div>


</div>

    <div  class="Kullanici" style="height:250px;padding: 10px;">
        <?php
        if($uye_ol == 1){
            echo "<div> Üyelik oluşturuldu giriş yapabilirsiniz.</div>";
        }else if($uye_ol == 2){
            echo "<div> Kullanıcı Adınız veya E-posta adresiniz başka bir kullanıcı tarafından kullanılıyor.</div>";
        }
        ?>
        <div></div>
        <form action="kaydol.php" method="post">
            <input name="isim" type="text" class="textbox" placeholder="Kullanıcı Adı" />
            <input style="margin-top:20px;" name="sifre" type="password" class="textbox" placeholder="Şifre" />
            <input style="margin-top:20px;" name="eposta" type="email" class="textbox" placeholder="E-Posta" />
            <input style="margin-top:20px;" name="gonder" type="submit" class="gonder" value="Üye ol" />
        </form>
    </div>

</body>

</html>