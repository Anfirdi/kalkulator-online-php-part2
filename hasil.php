<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Kalkulator Online</title>
    <style>
        body{
            text-align: center;
           justify-content: center;
           align-items: center;
           width: 100%;
           height: 100vh;
           background-image: url(malam.jpg);
    background-repeat: none;
    background-size: cover;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: white;
    font-weight: 600;
    display: flex;
        }
        .wrapper{
           display: flex;
           flex-direction: column;
            width: 50%;
            height: auto;
            backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 30px;
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
    width: 400px;
    padding: 30px;
    margin: 0 auto;
            justify-content: center;
            align-items: center;

        }
        .wrapper a{
            text-decoration: none;
            color: white;
        }
        .php{
            display: flex;
            color: blue;
            padding: 10px;
            justify-content: center;
            align-items: center;
            width: 50%;
            height: auto;
            border: 2px solid blue;
            border-radius: 20px;
            background-color: white;
        }
        .wrapper a{
            transition: all .3s ease-in-out;
            padding: 5px 0px;
        }
        .wrapper a:hover{
            color: blue;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Hasil Perhitungan</h1>
        <div class="php">
        <?php 
        $angka1 = $_GET['angka11'];
        $angka2 = $_GET['angka22'];
        $operator = $_GET['operator'];

        if($operator == '+') {
            $hasil = $angka1 + $angka2;
        }
        else if($operator == '-') {
            $hasil = $angka1 - $angka2;
        }
        else if($operator == 'x') {
            $hasil = $angka1 * $angka2;
        }
        else if($operator == ':') {
            $hasil = $angka1 / $angka2;
        }
        else if($operator == '%') {
            $hasil = $angka1 % $angka2;
        }
        else if($operator == '**') {
            $hasil = $angka1 ** $angka2;
        }
        else if($operator == '^') {
            $hasil = pow($angka1, $angka2);
        }
        echo $angka1 . $operator . $angka2 . '=' . $hasil;
        ?>
        </div>
        <a href="index.php">Kembali</a>
        <a type="button" onclick="return window.print();">Cetak</a>
    </div>
</body>
</html>