
    <?php 

		include("kullanicilar.php");

        if (isset($_POST['email'], $_POST['password'] )
        && ($_POST['email']==$kullaniciadi)
        && ($_POST['password']==$parola)) {
        echo "Giriş İşleminiz Yapıldı...<b>";
        echo "Hoşgeldiniz...";
        echo "<b>".$_POST['email'];
        }
        else{
        echo"Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın.<br>
        Yanlış Bilgi Girdiniz...";
        header("Refresh: 1; url=login.html");
        }
	?>
			
		