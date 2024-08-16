<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Led Hanem</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .section{
            background: url('bg.jpg') no-repeat;
        }
    </style>
</head>

<body>
<section>
    <div class="login-box">
        <form action="" method="post">
            <h2 class="logo">Kayıt Ol</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></ion-icon></span>
                <input type="adsoyad" name="adsoyad" id="adsoyad" required>
                <label for="adsoyad" >Ad Soyad</label>
            </div>

            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="mail" name="mail" id="mail" required>
                <label for="mail">Mail</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="şifre" name="şifre" id="şifre" required>
                <label for="şifre">Şifre</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="şifretekrar" name="şifretekrar" id="şifretekrar" required>
                <label for="şifretekrar">Şifre (Tekrar)</label>
            </div>
            <button type="submit" class="login">Kayıt Ol</button>
            <div class="register-link">
                <p>Hesanın Var mı?<a href="../Login Form/login.php">Giriş Yap</a></p>
            </div>
        </form>
        <?php 
        

        if($_POST)
        {
            $adsoyad=$_POST["adsoyad"];
            $mail=$_POST["mail"];
            $şifre=$_POST["şifre"];
            $şifretekrar=$_POST["şifretekrar"];


            $bag=mysqli_connect("localhost","root","","ldhanem");
            if(!$bag) die ("bağlantı kurulamadı..." .mysqli_error());
            mysqli_query($bag, "set names 'utf8'");
            $sql="insert into uyeler values('$adsoyad','$mail','$şifre','$şifretekrar')";
            $sonuc=mysqli_query($bag,$sql);

            if($sonuc)
            {
                header("refresh:2;url=../index.php");
            }
            else
                echo "<h1 style='color:red;'>Üye Eklenemedi...</h1>";

                mysqli_close($bag);
            
        }
        
        ?>
    </div>
</section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>