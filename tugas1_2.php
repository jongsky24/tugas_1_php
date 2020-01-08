<?php
$food = [
    [
        "makanan" => "Cireng",
        "harga" => "Rp. 1000"
    ],
    [
        "makanan" => "Es Duren",
        "harga" => "Rp. 15000"
    ],
    [
        "makanan" => "Es Milo",
        "harga" => "Rp. 20000"
    ],
    [
        "makanan" => "Es Teh",
        "harga" => "Rp. 5000"
    ],
    [
        "makanan" => "Piscok",
        "harga" => "Rp. 1000"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    <title>Tugas1_2 PHP</title>
</head>

<body>
    <h1>DAFTAR MENU</h1>

    <table style="width: 30%;">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Menu</td>
                <td>Harga</td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($food as $f) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <?= $f["makanan"]; ?>
                    </td>
                    <td>
                        <?= $f["harga"]; ?>
                    </td>
                </tr>

                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>