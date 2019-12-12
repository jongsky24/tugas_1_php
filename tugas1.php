<?php
$food = [
    [
        "makanan" => "Ayam Goreng",
        "harga" => "13000"
    ],
    [
        "makanan" => "Ayam Bakar",
        "harga" => "15000"
    ],
    [
        "makanan" => "Ayam Sayur",
        "harga" => "13000"
    ],
    [
        "makanan" => "Tempe Goreng",
        "harga" => "1000"
    ],
    [
        "makanan" => "Tahu Goreng",
        "harga" => "1000"
    ],
    [
        "makanan" => "Soto",
        "harga" => "3000"
    ],
    [
        "makanan" => "Nasi Putih",
        "harga" => "5000"
    ],
    [
        "makanan" => "Es Teh",
        "harga" => "4000"
    ],
    [
        "makanan" => "Es Tebu",
        "harga" => "5000"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas1 PHP</title>
</head>

<body>
    <h1>Daftar Menu</h1>

    <?php foreach ($food as $f) : ?>

        <ul>
            <li>
                <?= $f["makanan"]; ?> = Rp. <?= $f["harga"]; ?>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>