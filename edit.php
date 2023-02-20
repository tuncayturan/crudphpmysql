<?php
include_once("config.php");
if(isset($_POST['btnguncelle']))
{	

    $id=$_GET['id'];
	$name=$_POST["adsoyad"];
	$mail=$_POST["email"];
    $sorgu="UPDATE uyeler SET isim='$name',email='$mail' WHERE id=$id";
	$komut = mysqli_query($baglan,$sorgu);
	header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];
$komut = mysqli_query($baglan, "SELECT * FROM uyeler WHERE id=$id");

while($row = mysqli_fetch_array($komut))
{
	$name = $row['isim'];
	$email = $row['email'];
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Php Mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="ayar.js"></script>

    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">CRUD APP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Listele</a>
                    </li>                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="adsoyad" class="form-label">Ad Soyad</label>
                        <input type="text" name="adsoyad" class="form-control" placeholder="Adınız"
                            value="<?php echo $name;?>">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Adres</label>
                        <input type="text" name="email" class="form-control" placeholder="name@example.com"
                            value="<?php echo $email;?>">
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-warning" name="btnguncelle">Güncelle</button>
                    </div>

                </form>
            </div>

        </div>
    </div>

</body>




</html>