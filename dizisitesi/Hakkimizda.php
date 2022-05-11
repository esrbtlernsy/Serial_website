<?php
include"ayar.php";
include"header.php";
?>

<div class="diziler">
<div class="hakkimizda">
	<h2>	Hakkımızda</h2>

<br/>
Amacımız,dizi izlemek isteyen internet kullanıcılarının rahat bir 
şekilde istedikleri dizilere ulaşarak keyifli bir seyir 
imkanına sahip olmasını sağlamaktadır. 
<br/>

 Sitenin alt tarafında yer alan Tüm Diziler bölümün de ise A
 harfinden başlayıp Z harfine kadar alfabetik olarak sitemizde
 bulunan dizilerin isimleri yer almaktadır. İsmini tam olarak 
 bilmediğiniz dizileri bu listeden bulabilir ya da yanında imdb
 puanı da yazan dizilerden istediğinizi seçebilirsiniz.
 Yeni çıkan bölümler ve Dikkat çeken yeni diziler bölümlerinin 
 altında yer alan Türkçe dublaj butonuna basarak bu içerikleri
 sadece Türkçe dublaj olacak şekilde de listeyebilirsiniz.
 <br/>
 Sitemizde birden çok dizi, yaklaşık 1200 adet çoğunluğu yabancı dizi bulunmaktadır. 
 Tüm bu diziler, internet ortamında paylaşıma açık şekilde paylaşılmış sosyal medya ve 
 diğer video yükleme sitelerinden alınmıştır. Serverlarımızda ve data centerlarımızda
 telif içeriğine mahsus hiç bir içerik saklanmaz, bulundurulmaz.
Dizisec 1080p full hd kalitede dizi ve dizileri bünyesinde barındıran, bir dizi-dizi 
izleme platformudur. Sitenin isminden de belli olduğu gibi dizi ve dizileri istediğiniz 
kriterlere göre seçebilir, aradığınız videoya ulaşabilirsiniz.
<br/>
- Sitemizin anasayfasında bulunan reyting diziler bölümünden bugün, bu hafta, bu ay ve
 tüm zamanların en çok izlenen dizilerini bu kriterlere göre görebilirsiniz.<br/>
- Dikkat çeken diziler bölümünden yeni yayına girmiş ve izleyiciler tarafından ilgi
 görüp izlenmiş dizileri görebilirsiniz.<br/>
- Sıradaki Sezon Fragmanları bölümünden yeni çıkacak dizilerin ya da önceden yayınlanmış 
ve yeni sezonu çıkacak dizilerin yeni sezon fragmanlarına ulaşabilirsiniz.<br/>

- Anasayfada yer alan Yeni Çıkan Bölümler sekmesinden bugün yayınlanan bölümlerden 
başlayarak, en son yayına girmiş dizilerin bölümlerini görebilirsiniz. Dizi bölümlerinin yanındaki 
A harfi, o dizinin Türkçe altyazılı olduğunu gösterir.<br/> D harfi ise dizinin Türkçe dublajlı 
versiyonun yüklü olduğunu gösterir.<br/>
- Dikkat çeken yeni diziler bölümü sitemize 2021 yılında eklenmiş ve izleyiciler 
tarafından çokça izlenen yabancı dizileri göstermektedir.

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