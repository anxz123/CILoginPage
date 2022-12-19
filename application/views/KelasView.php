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
            <h3>weblanjut tugas4 2001050005</h3>
        </div>
        <a href="<?=site_url('KelasControl/tambah')?>" class="mb-8 float-end btn btn-success"> tambah data </a><br>

        <div class="card text-bg-light mt-5 mb-3" style="max-width: 100rem;">
  <div class="card-header">Data Kampus</div>
  <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">fakultas</th>
                    <th scope="col">prodi</th>
                    <th scope="col">kelas</th>
                    <th scope="col">isi</th>
                    <th colspan="2">aksi</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($isi as $items) :
                ?>
                    <tr>
                       
                        <td><?= $items->id; ?></td>
                        <td><?= $items->fakultas; ?></td>
                        <td><?= $items->prodi; ?></td>
                        <td><?= $items->kelas; ?></td>
                        <td><?= $items->isi; ?></td>
                        <td> 

                        <a href="<?=site_url('KelasControl/hapus/' . $items->id)?>"
                        onclick="return confirm('anda yakin ingin menghapus?')"
                        class="btn btn-danger"> delete </a>

                        <a href="<?=site_url('KelasControl/edit/' . $items->id)?>"
                        class="btn btn-warning"> edit </a>

                        
                        </td>
                    </tr>
                <?php

                endforeach; ?>
            </tbody>
        </table>
    </div>
</div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>