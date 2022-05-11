
<?php
include"ayar.php";
include"header.php";
$kayit = 0;
if(isset($_POST['sikayet'])){
    $ad = $_POST['your-name'];
    $email = $_POST['your-email'];
    $konu = $_POST['konu'];
    $mesaj = $_POST['your-message'];
    $kayit_sorgu = "INSERT INTO `sikayet`( `ad`, `email`, `konu`, `mesaj`) VALUES ('$ad','$email','$konu','$mesaj')";
    $kayit_sonuc = mysqli_query($baglan,$kayit_sorgu);
    if($kayit_sonuc){
        $kayit = 1;
    }else{
        $kayit = 2;
    }
}
?>



<div class="diziler">
<div class="hakkimizda">
	<h2>	İletişim Bilgileri</h2>
<h4>
Emre Berkay Ayaz,   201713171022, emre.ayaz@ogr.dpu.edu.tr  , Kartal/İstanbul,Türkiye  <br/>

Binnur Karakaş,     201713171026 , binnur.karakas@ogr.dpu.edu.tr  , Afyonkarahisar/merkez  , Türkiye <br/>

Gökçe Adalı,        201613171062 , gokce.adali@ogr.dpu.edu.tr , İzmir/konak,Türkiye <br/>

Esra Betül Erensoy, 201813171044, esra.erensoy@ogr.dpu.edu.tr,  Gaziantep, Türkiye <br/>

Mehmet Emin Şeker,  201813171905, mehmet.seker@ogr.dpu.edu.tr ,  İstabul, Türkiye <br/>
</h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.4758426104704!2d29.89841231529557!3d39.481168619926954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c94893e58a97d5%3A0x86150cbafe506ac8!2sK%C3%BCtahya%20Dumlup%C4%B1nar%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1616004571187!5m2!1str!2str" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<br/>
<br/>
<h4>Telif Hakkı Şikayetleri için</h4> 
<h5>
Sitemiz 5651 sayılı yasanın 5. maddesinde tanımlanan yer sağlayıcı olarak 
hizmet vermektedir. İlgili yasaya göre, web site yönetiminin hukuka aykırı
 içerikleri kontrol etme yükümlülüğü yoktur. Bu sebeple, sitemiz uyar ve kaldır
 prensibini benimsemiştir. Telif hakkına konu olan eserlerin yasal olmayan bir
 biçimde paylaşıldığını ve yasal haklarının çiğnendiğini düşünen hak sahipleri
 veya meslek birlikleri, bu formu kullanarak bize ulaşabilirler. Buraya ulaşan 
 talep ve şikayetler hukuksal olarak incelenecek, şikayet yerinde görüldüğü takdirde,
 ihlal olduğu düşünülen içerikler sitemizden kaldırılacaktır.
İlgili Yasa:
MADDE 5- (1) Yer sağlayıcı, yer sağladığı içeriği kontrol etmek 
veya hukuka aykırı bir faaliyetin söz konusu olup olmadığını araştırmakla
 yükümlü değildir. (2) Yer sağlayıcı, yer sağladığı hukuka aykırı içeriği bu 
 Kanunun 8 inci ve 9 uncu maddelerine göre haberdar edilmesi hâlinde yayından çıkarmakla yükümlüdür.</h5>
    <form action="iletisim.php" method="POST">
    <?php
    if($kayit == 1){
        echo '<p style="background: green;">Mesajınız başarı ile alındı.</p>';
    }else if($kayit == 2){
        echo '<p style="background: red; color:#fff;">Mesajını kaydediliken bir hata ile karşılaşıldı.</p>';
    }
    ?>

Adınız (gerekli)<br/>
<input type="text" name="your-name" value="" class="text" required><br/>
E-posta adresiniz (gerekli)<br/>
<input type="email" name="your-email" value="" class="text" required><br/>
Konu (gerekli)<br/>
<input type="text" name="konu" value="" class="text" required> <br/>
Mesajınız(gerekli)<br/>
<textarea name="your-message" cols="40" rows="10" class="textarea" required></textarea>
<br/><br/>
<input type="submit" name="sikayet" value="Gönder" class="buttongonder">
</form>
</div>
<div class="filitreler">
© 2021 Kütahya Dumlupınar Üniversitesi</div>
</div>
<div class="Katagoriler">Katagoriler
    <ol>
        <?php
        $sonuc = mysqli_query($baglan,"SELECT * FROM `turler`");
        while($tur = mysqli_fetch_assoc($sonuc)){
            ?>
            <li>
                <a href="http://localhost/dizisitesi/index.php?tur=<?php echo $tur['id']?>">
                    <?php echo $tur['tur']; ?>
                </a>
            </li>
            <?php
        }
        ?>
    </ol>
</div>

</body>

</html>