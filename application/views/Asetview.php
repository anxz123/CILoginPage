<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="alert alert-info text-center" role="alert">
            <h3>Tugas Menampilkan Data Menggunakan Framework CodeIgniter</h3>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">nama_aset</th>
                    <th scope="col">jenis</th>
                    <th scope="col">loasi</th>
                    <th scope="col">jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($isi as $items) :
                ?>
                    <tr>
                       
                        <td><?= $items->ID; ?></td>
                        <td><?= $items->NAMA; ?></td>
                        <td><?= $items->JENIS; ?></td>
                        <td><?= $items->LOKASI; ?></td>
                        <td><?= $items->JUMLAH; ?></td>
                    </tr>
                <?php

                endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>