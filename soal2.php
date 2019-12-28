<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>

    <form method="POST" >
    <div class="form-group">
        <label>Masukan Jumlah Baris :</label>
        <input class="form-control" type="number" name="jml_baris">
    </div>
    <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
    </form>
    
    <!-- proses -->
<?php
echo "<br><br>";
function acakangkahuruf($panjang){
    $karakter = '1234567890qwertyuiopasdfghjklzxcvbnm';

    $string ='';

    for ($i=0; $i < $panjang; $i++){
        $pos = rand(0, strlen($karakter)-1);
        $string .=$karakter{$pos};
    }
    return $string;
}

$panjang = 28;
    if(isset($_POST['submit']))
    {
        $baris = $_POST['jml_baris'];
        echo "jumlah baris adalah <b> $baris </b><br><br>";
        for ($j=0;$j<$baris;$j++){
            echo acakangkahuruf($panjang)."<br>";
        }

    }
?>
</body>
</html>
