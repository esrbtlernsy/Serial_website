<?php
include ("ayar.php");
if(isset($_SESSION['login']) AND $_SESSION['login'] == 1){
    header('Location: index.php');
}
$giris_hata = 0;
if(isset($_POST['gonder'])) {

    $KulAdi = $_POST['Kullaniciadi'];
    $sifre = $_POST['sifre'];
    $sorgu_uye = "SELECT * FROM `uyeler` WHERE kullaniciAdi = '".$KulAdi."'";
    $sonuc_uye = mysqli_query($baglan, $sorgu_uye);

    if($sonuc_uye){
        $uye = mysqli_fetch_assoc($sonuc_uye);
        if($uye['sifre'] == $sifre){
            $_SESSION['login']  = 1;
            $_SESSION['id']  = $uye['id'];
            $_SESSION['kulAdi'] = $KulAdi;
            header('Location: index.php');
        }else{
            $giris_hata = 1;
        }

    }else{
        $giris_hata = 1;
    }

}
if(isset($_GET['cikis']) AND $_GET['cikis'] == 1){
    session_destroy();
    header('Location: index.php');
}
include "header.php"
?>

<div class="Kullanici" style="padding:10px">
    <?php
    if($giris_hata == 1) {
        echo "<div>Kullanıcı adınız veya şifreniz hatalı </div>";
    }
    ?>
    <div>
        <form action="Giris.php" method="post">
            <input name="Kullaniciadi" type="text" class="textbox" placeholder="Kullanıcı Adı" style="margin-top:20px;" />
            <input name="sifre" type="password" class="textbox" placeholder="sifre" style="margin-top:20px;" />
            <input name="gonder" type="submit" class="gonder" value="Giriş Yap" style="margin-top:20px;"/>
        </form>
        <div style="margin:auto;height:150px;text-align:center;">
            <a style="text-decoration:none;color:white;" href="Kaydol.php">Üye Olmak İçin Tıklayınız</a></div>
    </div>
</div>

</body>

</html>