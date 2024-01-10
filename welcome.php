<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    
</head>
<body>
        <?php
        $nama = $_POST["first"] . " " . $_POST["last"];
        $jenis_kelamin = isset($_POST["gender"]) ?$_POST['gender'] : "tidak ada";
        $negara = $_POST['country'];
        $bahasa = isset($_POST ["bahasa"]) ? implode(", ", $_POST['bahasa']) : "tidak ada";
        $bio = $_POST['bio'];
    ?>
    <h1>HALLO <?= $nama?></h1>
        <h2>SELAMAT DATANG!</h2>
    <p><b>Terima kasih telah bergabung di Website Kami. Media Belajar kita Bersama!</b></p>
    <p>Jenis Kelamin: <?=$jenis_kelamin;?> </p>
    <p>Kewarganegaraan: <?=$negara;?></p> 
    <p>Bahasa Yang Dikuasai <?=$bahasa;?></p>
    <p>bio: <?=$bio;?></p>
    </body>
</html>
