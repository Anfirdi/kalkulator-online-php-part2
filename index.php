<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Online</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form action="hasil.php">
        <h1>Kalkulator Hafiz Ganteng</h1>
        <div class="operator">
        <p>Operator</p>
        <input type="number" name="angka11">
        <select name="operator">
            <option>+</option>
            <option>-</option>
            <option>:</option>
            <option>x</option>
            <option>%</option>
            <option>**</option>
            <option>^</option>
        </select>
        <input type="number" name="angka22">
        </div>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>