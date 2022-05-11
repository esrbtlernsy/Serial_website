<?php
include"ayar.php";
include"header.php";
?>

        <div class="diziler">
            <?php
            if(isset($_GET['tur'])){
                $sorgu_tur = "SELECT * FROM `turler` WHERE id = ".$_GET['tur'];
                $sonuc_tur = mysqli_query($baglan,$sorgu_tur);
                $tur = mysqli_fetch_assoc($sonuc_tur);
                echo "<div style='margin:10px'>Şu anda ".$tur['tur']." kategorisindeki dizileri görüyorsunuz.</div>";
                $sorgu = "SELECT * FROM `diziler` WHERE tur = ".$_GET['tur'];
            }else if(isset($_GET['arama'])){
                $sorgu = "SELECT * FROM `diziler` WHERE ad LIKE '%".$_GET['arama']."%'";
            }else{
                $sorgu = "SELECT * FROM `diziler`";
            }

            $sonuc = mysqli_query($baglan,$sorgu);
            while($dizi = mysqli_fetch_assoc($sonuc)){
            ?>
                <div class="dizi">
                    <div class="dizi_ic">
                        <a href="tek.php?id=<?php echo $dizi['id']?>" >
                            <img src="<?php echo $dizi['kapak_fotografi'];?>" width="100%" >
                            <div class="diziisim"><?php echo $dizi['ad'];?></div>
                        </a>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="filitreler">
                © 2021 Kütahya Dumlupınar Üniversitesi
            </div>
        </div>
        <div class="Katagoriler">
            Katagoriler
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
    </div>

</body>

</html>